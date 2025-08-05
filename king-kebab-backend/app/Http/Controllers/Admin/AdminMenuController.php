<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\MenuCategory;

class AdminMenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with('category')->latest()->paginate(10);
        return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {
        $categories = MenuCategory::all();
        return view('admin.menus.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:menu_categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_available' => 'boolean',
        ]);

        $data = $request->all();
        $data['is_available'] = $request->has('is_available');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/menus'), $imageName);
            $data['image'] = 'uploads/menus/' . $imageName;
        }

        Menu::create($data);

        return redirect()->route('admin.menus.index')->with('success', 'تم إضافة العنصر بنجاح');
    }

    public function show(Menu $menu)
    {
        return view('admin.menus.show', compact('menu'));
    }

    public function edit(Menu $menu)
    {
        $categories = MenuCategory::all();
        return view('admin.menus.edit', compact('menu', 'categories'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:menu_categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_available' => 'boolean',
        ]);

        $data = $request->all();
        $data['is_available'] = $request->has('is_available');

        if ($request->hasFile('image')) {
            // Delete old image
            if ($menu->image && file_exists(public_path($menu->image))) {
                unlink(public_path($menu->image));
            }
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/menus'), $imageName);
            $data['image'] = 'uploads/menus/' . $imageName;
        }

        $menu->update($data);

        return redirect()->route('admin.menus.index')->with('success', 'تم تحديث العنصر بنجاح');
    }

    public function destroy(Menu $menu)
    {
        if ($menu->image && file_exists(public_path($menu->image))) {
            unlink(public_path($menu->image));
        }
        
        $menu->delete();

        return redirect()->route('admin.menus.index')->with('success', 'تم حذف العنصر بنجاح');
    }

    public function categories()
    {
        $categories = MenuCategory::withCount('menus')->latest()->paginate(10);
        return view('admin.menus.categories', compact('categories'));
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:menu_categories',
            'description' => 'nullable|string',
        ]);

        MenuCategory::create($request->all());

        return redirect()->route('admin.menu.categories')->with('success', 'تم إضافة الفئة بنجاح');
    }

    public function deleteCategory($id)
    {
        $category = MenuCategory::findOrFail($id);
        
        if ($category->menus()->count() > 0) {
            return back()->with('error', 'لا يمكن حذف الفئة لوجود عناصر مرتبطة بها');
        }
        
        $category->delete();

        return redirect()->route('admin.menu.categories')->with('success', 'تم حذف الفئة بنجاح');
    }
} 