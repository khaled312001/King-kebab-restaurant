<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share settings with all views
        View::composer('*', function ($view) {
            $view->with('settings', [
                'site_name' => Setting::get('site_name', 'King Kebab'),
                'site_description' => Setting::get('site_description', 'Le vrai goût du kebab'),
                'contact_email' => Setting::get('contact_email', 'contact@kingkebab.com'),
                'contact_phone' => Setting::get('contact_phone', '0426423743'),
                'contact_address' => Setting::get('contact_address', '20, avenue Marcel Nicolas'),
                'opening_hours' => Setting::get('opening_hours', '11h00 - 23h00'),
                'facebook_url' => Setting::get('facebook_url', '#'),
                'instagram_url' => Setting::get('instagram_url', '#'),
                'twitter_url' => Setting::get('twitter_url', '#'),
            ]);
        });
    }
}
