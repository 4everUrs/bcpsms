<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
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
        Blade::directive('money', function ($amount) {
            return "<?php echo '₱ ' . number_format($amount, 2); ?>";
        });
        Blade::directive('date', function ($date) {
            return "<?php echo Carbon\Carbon::parse($date)->toFormattedDateString()?>";
        });
        Blade::directive('time', function ($date) {
            return "<?php echo Carbon\Carbon::parse($date)->format('g:i:A')?>";
        });
        Blade::if('isAdmin', function () {
            return auth()->check() && auth()->user()->user_level == 0;
        });
        Blade::if('isEmployee', function () {
            return auth()->check() && auth()->user()->user_level == 3;
        });
    }
}
