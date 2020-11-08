<?php

namespace Aldrumo\DefaultTheme;

use Aldrumo\ThemeManager\Theme\ThemeBase;
use Illuminate\Support\Facades\Blade;

class DefaultTheme extends ThemeBase
{
    /** @var string */
    protected $viewsPath = '/../resources/views';

    public function boot(): void
    {
        parent::boot();
        Blade::componentNamespace('Aldrumo\\DefaultTheme\\View\\Components', 'DefaultTheme');

        $this->serviceProvider->setPublishes(
            [
                __DIR__ . '/../resources/dist' => public_path('aldrumo/default-theme'),
            ],
            'aldrumo-public'
        );
    }
}
