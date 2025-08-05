<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newsletter;

class AdminNewsletterController extends Controller
{
    public function index()
    {
        $newsletters = Newsletter::latest()->paginate(15);
        return view('admin.newsletters.index', compact('newsletters'));
    }

    public function show(Newsletter $newsletter)
    {
        return view('admin.newsletters.show', compact('newsletter'));
    }

    public function edit(Newsletter $newsletter)
    {
        return view('admin.newsletters.edit', compact('newsletter'));
    }

    public function update(Request $request, Newsletter $newsletter)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email,' . $newsletter->id,
            'status' => 'required|in:active,inactive',
        ]);

        $newsletter->update($request->all());

        return redirect()->route('admin.newsletters.index')->with('success', 'تم تحديث البريد الإلكتروني بنجاح');
    }

    public function destroy(Newsletter $newsletter)
    {
        $newsletter->delete();

        return redirect()->route('admin.newsletters.index')->with('success', 'تم حذف البريد الإلكتروني بنجاح');
    }
} 