<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class AdminSettingController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $settings = [
            'site_name' => 'required|string|max:255',
            'site_description' => 'nullable|string',
            'site_email' => 'required|email',
            'site_phone' => 'nullable|string|max:20',
            'site_address' => 'nullable|string',
            'site_facebook' => 'nullable|url',
            'site_twitter' => 'nullable|url',
            'site_instagram' => 'nullable|url',
            'site_youtube' => 'nullable|url',
            'site_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'site_favicon' => 'nullable|image|mimes:ico,png,jpg|max:1024',
            'opening_hours' => 'nullable|string',
            'delivery_info' => 'nullable|string',
            'about_text' => 'nullable|string',
        ];

        $request->validate($settings);

        foreach ($request->all() as $key => $value) {
            if (in_array($key, array_keys($settings))) {
                $setting = Setting::where('key', $key)->first();
                
                if ($request->hasFile($key)) {
                    $file = $request->file($key);
                    $fileName = time() . '_' . $key . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('uploads/settings'), $fileName);
                    $value = 'uploads/settings/' . $fileName;
                }

                if ($setting) {
                    $setting->update(['value' => $value]);
                } else {
                    Setting::create([
                        'key' => $key,
                        'value' => $value
                    ]);
                }
            }
        }

        return redirect()->route('admin.settings')->with('success', 'تم تحديث الإعدادات بنجاح');
    }
} 