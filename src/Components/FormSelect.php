<?php

namespace Vespera\LaravelComponents\Components;

use Illuminate\View\ComponentAttributeBag;
use Vespera\LaravelComponents\Support\Traits\HandlesDefaultValue;
use Vespera\LaravelComponents\Support\Traits\HandlesValidationError;

class FormSelect extends AbstractComponent
{
    use HandlesDefaultValue;
    use HandlesValidationError;

    public $label;
    public $name;
    public $options;
    public $helperText;
    public $showErrors;
    public $bag;
    public $selected;

    public function __construct(
        string $label = '',
        string $name = '',
        $options = [],
        string $helperText = null,
        bool $showErrors = false,
        string $bag = 'default',
        $bind = null,
        $selected = null
    ) {
        $this->label = $label;
        $this->name = $name;
        $this->options = $options;
        $this->helperText = $helperText;
        $this->showErrors = $showErrors;
        $this->bag = $bag;
        $this->selected = $this->getDefaultValue($name, $bind, $selected);
    }

    protected function prepareAttributes(ComponentAttributeBag $attributes): ComponentAttributeBag
    {
        if ($this->name) {
            $attributes['name'] = $this->name;
        }

        $attributes['id'] = $attributes['id'] ?? $this->name;

        return $attributes;
    }

    public function isSelected($key): bool
    {
        if ($this->selected == $key) {
            return true;
        }

        if (is_array($this->selected) && in_array($key, $this->selected)) {
            return true;
        }

        return false;
    }
}
