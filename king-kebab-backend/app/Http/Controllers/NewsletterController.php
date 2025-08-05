<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255|unique:newsletters,email',
        ]);

        Newsletter::create([
            'email' => $request->email,
            'is_active' => true
        ]);

        return redirect()->back()->with('success', 'Vous êtes maintenant inscrit à notre newsletter!');
    }
} 