<?php

namespace ConfrariaWeb\Template\Providers;

use ConfrariaWeb\Template\Contracts\TemplateContract;
use ConfrariaWeb\Template\Repositories\TemplateRepository;
use ConfrariaWeb\Template\Services\TemplateService;
use ConfrariaWeb\Vendor\Traits\ProviderTrait;
use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider
{

    use ProviderTrait;

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');
        $this->loadViewsFrom(__DIR__ . '/../Views', 'template');
        $this->loadMigrationsFrom(__DIR__ . '/../../databases/Migrations');
        //$this->registerSeedsFrom(__DIR__.'/../../databases/Seeds');
        $this->publishes([__DIR__ . '/../../config/cw_template.php' => config_path('cw_template.php')], 'config');
    }

    public function register()
    {
        $this->app->bind(TemplateContract::class, TemplateRepository::class);
        $this->app->bind('TemplateService', function ($app) {
            return new TemplateService($app->make(TemplateContract::class));
        });
    }
}
