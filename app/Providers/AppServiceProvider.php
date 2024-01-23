<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\ServiceProvider;

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
        View::composer('partials.sidebar', function ($view) {
            // Fetch the username or data from the API here
            $nis = json_decode(Cookie::get('sipon_session'))->nis;
            $token = json_decode(Cookie::get('sipon_session'))->token;
            $response = Http::withHeaders([
                    'Accept' => 'aplication/json',
                    'Authorization' => 'Bearer ' . $token,
                ])->get('https://sipon.kyaigalangsewu.net/api/v1/santri/'.$nis);
            $santri=$response->json()['data'];
            // Share the data with the sidebar view
            $view->with('operator', $santri);
        });
    }
}
