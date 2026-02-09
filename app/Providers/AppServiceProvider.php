<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Use Tailwind pagination
        Paginator::useTailwind();
        
        // Share settings globally to all views
        View::composer('*', function ($view) {
            try {
                $settings = Setting::first();
                if (!$settings) {
                    $settings = new Setting([
                        'site_name' => 'Nasdem Sidoarjo',
                        'site_tagline' => 'Restorasi Indonesia',
                        'email' => 'info@nasdem.com',
                        'phone' => '(031) 1234567'
                    ]);
                }
            } catch (\Exception $e) {
                $settings = new Setting([
                    'site_name' => 'Nasdem Sidoarjo',
                    'site_tagline' => 'Restorasi Indonesia',
                    'email' => 'info@nasdem.com',
                    'phone' => '(031) 1234567'
                ]);
            }
            $view->with('settings', $settings);
        });
    }
}