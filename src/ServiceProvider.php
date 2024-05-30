<?php

namespace Trendyminds\Tip;

use Statamic\Providers\AddonServiceProvider;
use Trendyminds\Tip\Fieldtypes\Tip;

class ServiceProvider extends AddonServiceProvider
{
    protected $vite = [
        'input' => [
            'resources/js/main.js',
            'resources/css/main.css',
        ],
        'publicDirectory' => 'resources/dist',
    ];

    public function bootAddon()
    {
        Tip::register();
    }
}
