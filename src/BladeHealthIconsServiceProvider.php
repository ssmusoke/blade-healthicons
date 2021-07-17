<?php

declare(strict_types=1);

namespace SSMusoke\HealthIcons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeHealthIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-healthicons', []);

            $factory->add('healthicons', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-healthicons.php', 'blade-healthicons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-healthicons'),
            ], 'blade-healthicons');

            $this->publishes([
                __DIR__.'/../config/blade-healthicons.php' => $this->app->configPath('blade-healthicons.php'),
            ], 'blade-healthicons-config');
        }
    }
}
