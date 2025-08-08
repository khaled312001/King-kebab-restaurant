<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuCategory;
use App\Models\Setting;
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
        $settings = Setting::pluck('value', 'key')->toArray();
        
        return view('menu', compact('categories', 'menus', 'settings'));
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