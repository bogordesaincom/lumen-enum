<?php

namespace Bogordesain\Enum;

use Illuminate\Support\ServiceProvider;
use Bogordesain\Enum\Console\EnumMakeCommand;

class EnumServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Config
        $this->publishes([
            __DIR__.'/../config/enum.php' => config('enum.php'),
        ], 'config');

        // Command
        if ($this->app->runningInConsole()) {
            $this->commands([
                EnumMakeCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/enum.php', 'enum');
    }
}
