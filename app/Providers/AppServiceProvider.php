<?php

namespace App\Providers;

<<<<<<< HEAD
=======
use App\Models\Core\Settings;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
>>>>>>> 02b12afbcfc48a7aa01129d319afbe25f6726349
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
<<<<<<< HEAD
        //
=======
        // Register Telescope services
        if ($this->app->environment('local')) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }
>>>>>>> 02b12afbcfc48a7aa01129d319afbe25f6726349
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        //
=======
        // HTTPS Force Redirect
        if (App::environment() !== 'local') {
            URL::forceScheme('https');
        }
//        // Share data with all views
//        View::share([
//            'title' => Settings::where('name', 'Title')->first()->value ?? config('veyaz.title'),
//            'short_title' => Settings::where('name', 'Short Title')->first()->value ?? config('veyaz.short_title'),
//            'description' => Settings::where('name', 'Description')->first()->value ?? config('veyaz.description'),
//            'logo' => Settings::where('name', 'Logo')->first()->value ?? config('veyaz.logo'),
//            'default_photo_profile' => Settings::where('name', 'Default Photo Profile')->first()->value ?? config('veyaz.default_photo_profile'),
//        ]);
>>>>>>> 02b12afbcfc48a7aa01129d319afbe25f6726349
    }
}
