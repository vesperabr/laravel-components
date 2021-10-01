<?php

namespace Vespera\LaravelComponents\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\View\ComponentAttributeBag;

abstract class AbstractComponent extends Component
{
    /**
     * Render the component
     *
     * @return void
     */
    public function render()
    {
        return function (array $data) {
            $component = Str::kebab(class_basename($this));
            $data['attributes'] = $this->prepareAttributes($data['attributes']);
            return "laravel-components::$component";
        };
    }

    /**
     * Prepare component attributes before render the view
     *
     * @param ComponentAttributeBag $attributes
     * @return ComponentAttributeBag
     */
    protected function prepareAttributes(ComponentAttributeBag $attributes): ComponentAttributeBag
    {
        return $attributes;
    }
}
