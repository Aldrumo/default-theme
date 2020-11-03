<?php

namespace Aldrumo\DefaultTheme;

use Aldrumo\ThemeManager\Theme\ThemeBase;
use Illuminate\Support\Facades\Blade;

class DefaultTheme extends ThemeBase
{
    /** @var string */
    protected $viewsPath = '/../resources/views';

    public function boot()
    {
        parent::boot();
        Blade::componentNamespace('Aldrumo\\DefaultTheme\\Views\\Components', 'DefaultTheme');
    }
}
