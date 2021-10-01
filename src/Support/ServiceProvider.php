<?php

namespace Vespera\LaravelComponents\Support;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Vespera\LaravelComponents\Components\Form;
use Vespera\LaravelComponents\Components\FormCheckboxes;
use Vespera\LaravelComponents\Components\FormInput;
use Vespera\LaravelComponents\Components\FormLabel;
use Vespera\LaravelComponents\Components\FormRadios;
use Vespera\LaravelComponents\Components\FormSelect;
use Vespera\LaravelComponents\Components\FormTextarea;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__ . '/../../resources/views' => resource_path('views/vendor/laravel-components')]);
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'laravel-components');
        $this->loadComponents();
    }

    private function loadComponents()
    {
        Blade::component(Form::class, 'form');
        Blade::component(FormCheckboxes::class, 'form-checkboxes');
        Blade::component(FormInput::class, 'form-input');
        Blade::component(FormLabel::class, 'form-label');
        Blade::component(FormRadios::class, 'form-radios');
        Blade::component(FormSelect::class, 'form-select');
        Blade::component(FormTextarea::class, 'form-textarea');
    }
}
