<?php

namespace Vespera\LaravelComponents\Components;

use Illuminate\View\ComponentAttributeBag;
use Vespera\LaravelComponents\Support\Traits\HandlesDefaultValue;
use Vespera\LaravelComponents\Support\Traits\HandlesValidationError;

class FormInput extends AbstractComponent
{
    use HandlesDefaultValue;
    use HandlesValidationError;

    public $label;
    public $name;
    public $prepend;
    public $append;
    public $helperText;
    public $showErrors;
    public $bag;
    public $value;

    public function __construct(
        string $label = '',
        string $name = '',
        string $prepend = null,
        string $append = null,
        string $helperText = null,
        bool $showErrors = false,
        string $bag = 'default',
        $bind = null,
        $value = null
    ) {
        $this->label = $label;
        $this->name = $name;
        $this->prepend = $prepend;
        $this->append = $append;
        $this->helperText = $helperText;
        $this->showErrors = $showErrors;
        $this->bag = $bag;
        $this->value = $this->getDefaultValue($name, $bind, $value);
    }

    protected function prepareAttributes(ComponentAttributeBag $attributes): ComponentAttributeBag
    {
        $attributes['type'] = $attributes['type'] ?? 'text';
        $attributes['id'] = $attributes['id'] ?? $this->name;

        if ($this->name) {
            $attributes['name'] = $this->name;
        }

        if ($this->value) {
            $attributes['value'] = $this->value;
        }

        return $attributes;
    }
}
