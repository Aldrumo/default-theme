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
        Blade::componentNamespace('Aldrumo\\DefaultTheme\\Views\\Components', 'DefaultTheme');

        $this->publishes(
            [
                __DIR__.'/path/to/assets' => public_path('aldrumo/default-theme'),
            ],
            'aldrumo-public'
        );
    }
}
