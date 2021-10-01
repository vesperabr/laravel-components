<?php

namespace Vespera\LaravelComponents\Components;

use Illuminate\View\ComponentAttributeBag;
use Vespera\LaravelComponents\Support\Traits\HandlesDefaultValue;
use Vespera\LaravelComponents\Support\Traits\HandlesValidationError;

class FormTextarea extends AbstractComponent
{
    use HandlesDefaultValue;
    use HandlesValidationError;

    public $label;
    public $name;
    public $helperText;
    public $showErrors;
    public $bag;
    public $value;

    public function __construct(
        string $label = '',
        string $name = '',
        string $helperText = null,
        bool $showErrors = false,
        string $bag = 'default',
        $bind = null,
        $value = null
    ) {
        $this->label = $label;
        $this->name = $name;
        $this->helperText = $helperText;
        $this->showErrors = $showErrors;
        $this->bag = $bag;
        $this->value = $this->getDefaultValue($name, $bind, $value);
    }

    protected function prepareAttributes(ComponentAttributeBag $attributes): ComponentAttributeBag
    {
        if ($this->name) {
            $attributes['name'] = $this->name;
        }

        $attributes['id'] = $attributes['id'] ?? $this->name;

        return $attributes;
    }
}
