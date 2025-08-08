<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuCategory;
use App\Models\Setting;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $categories = MenuCategory::with('menus')->get();
        $menus = Menu::available()->get();
        $settings = Setting::pluck('value', 'key')->toArray();
        
        return view('menu', compact('categories', 'menus', 'settings'));
    }

    public function show($id)
    {
        $meal = Menu::findOrFail($id);
        $relatedMeals = Menu::where('category', $meal->category)
            ->where('id', '!=', $meal->id)
            ->available()
            ->limit(4)
            ->get();
        $settings = Setting::pluck('value', 'key')->toArray();
            
        return view('meal-details', compact('meal', 'relatedMeals', 'settings'));
    }

    public function category($category)
    {
        $categoryModel = MenuCategory::where('name', $category)->firstOrFail();
        $meals = Menu::where('category', $category)->available()->get();
        $settings = Setting::pluck('value', 'key')->toArray();
        
        return view('menu-category', compact('categoryModel', 'meals', 'settings'));
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $meals = Menu::where('name', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->available()
            ->get();
            
        return response()->json($meals);
    }


}