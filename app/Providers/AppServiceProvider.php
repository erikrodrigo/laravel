<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    // public function register()
    // {
    //     $this->app->bind('path.public', function() {
    //         return '/home2/mushugra/public_html/public';
    //     });
    // }
    public function register()
    {
        $this->app->bind('path.public', function() {
            return base_path().'/public';
        });
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (config('app.env') === 'production') {
            \URL::forceScheme('https');
        }   //
        
        \Blade::directive('convert', function ($value) {
           return "<?php echo number_format($value, 0); ?>";
        });
        
        \Blade::directive('convert2', function ($value) {
           return "<?php echo number_format($value, 2); ?>";
        });
        
        \Blade::directive('convert3', function ($value) {
           return "<?php echo number_format($value, 3); ?>";
        });
    }
}
