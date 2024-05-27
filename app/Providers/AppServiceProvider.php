<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('error', function ($field) {
            return "<?php if(\$errors->has($field)): ?>
                            <div class=\"text-danger\" style=\"color:red;\">{{ \$errors->first($field) }}</div>
                    <?php endif; ?>";    
        });

    }
}
