<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Setting;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $settings = $this->getSettings();
        $articles = Article::published()->latest()->paginate(6);
        
        return view('articles.index', compact('articles', 'settings'));
    }

    public function show($id)
    {
        $settings = $this->getSettings();
        $article = Article::published()->findOrFail($id);
        $relatedArticles = Article::published()
            ->where('id', '!=', $id)
            ->latest()
            ->limit(3)
            ->get();
        
        return view('articles.show', compact('article', 'relatedArticles', 'settings'));
    }

    private function getSettings()
    {
        return [
            'site_name' => Setting::get('site_name', 'King Kebab'),
            'site_description' => Setting::get('site_description', 'Le vrai goût du kebab'),
            'contact_address' => Setting::get('contact_address', '20, avenue Marcel Nicolas'),
            'contact_phone' => Setting::get('contact_phone', '0426423743'),
            'contact_email' => Setting::get('contact_email', 'contact@kingkebab.com'),
            'opening_hours' => Setting::get('opening_hours', '11h00 - 23h00'),
            'facebook_url' => Setting::get('facebook_url', '#'),
            'instagram_url' => Setting::get('instagram_url', '#'),
            'twitter_url' => Setting::get('twitter_url', '#'),
        ];
    }
} 