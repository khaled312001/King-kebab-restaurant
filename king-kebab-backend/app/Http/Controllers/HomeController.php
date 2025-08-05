<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredMeals = Menu::available()->limit(6)->get();
        
        return view('home', compact('featuredMeals'));
    }

    public function menu()
    {
        $categories = MenuCategory::with('menus')->get();
        $menus = Menu::available()->get();
        
        return view('menu', compact('categories', 'menus'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function reservation()
    {
        return view('reservation');
    }


} 