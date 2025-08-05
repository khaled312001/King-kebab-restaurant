<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuCategory;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $categories = MenuCategory::with('menus')->get();
        $menus = Menu::available()->get();
        
        return view('menu', compact('categories', 'menus'));
    }

    public function show($id)
    {
        $meal = Menu::findOrFail($id);
        $relatedMeals = Menu::where('category', $meal->category)
            ->where('id', '!=', $meal->id)
            ->available()
            ->limit(4)
            ->get();
            
        return view('meal-details', compact('meal', 'relatedMeals'));
    }

    public function category($category)
    {
        $categoryModel = MenuCategory::where('name', $category)->firstOrFail();
        $meals = Menu::where('category', $category)->available()->get();
        
        return view('menu-category', compact('categoryModel', 'meals'));
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