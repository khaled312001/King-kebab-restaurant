<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Reservation;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\Newsletter;
use App\Models\Article;

class AdminController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'بيانات الدخول غير صحيحة.',
        ])->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        $stats = [
            'reservations' => Reservation::count(),
            'pending_reservations' => Reservation::where('status', 'pending')->count(),
            'contacts' => Contact::count(),
            'unread_contacts' => Contact::where('status', 'unread')->count(),
            'menus' => Menu::count(),
            'newsletters' => Newsletter::count(),
            'articles' => Article::count(),
        ];

        $recent_reservations = Reservation::latest()->take(5)->get();
        $recent_contacts = Contact::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recent_reservations', 'recent_contacts'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'current_password' => 'nullable|string',
            'new_password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('current_password')) {
            if (!Hash::check($request->current_password, $user->password)) {
                return back()->withErrors(['current_password' => 'كلمة المرور الحالية غير صحيحة']);
            }
            
            if ($request->filled('new_password')) {
                $user->password = Hash::make($request->new_password);
            }
        }

        $user->save();

        return back()->with('success', 'تم تحديث الملف الشخصي بنجاح');
    }
} 