<?php

namespace Vespera\LaravelComponents\Components;

use Vespera\LaravelComponents\Support\Traits\HandlesDefaultValue;
use Vespera\LaravelComponents\Support\Traits\HandlesValidationError;

class FormRadios extends AbstractComponent
{
    use HandlesDefaultValue;
    use HandlesValidationError;

    public $label;
    public $name;
    public $options;
    public $helperText;
    public $showErrors;
    public $bag;
    public $checked;

    public function __construct(
        string $label = '',
        string $name = '',
        $options = [],
        string $helperText = null,
        bool $showErrors = false,
        string $bag = 'default',
        $bind = null,
        $checked = null
    ) {
        $this->label = $label;
        $this->name = $name;
        $this->options = $options;
        $this->helperText = $helperText;
        $this->showErrors = $showErrors;
        $this->bag = $bag;
        $this->checked = $this->getDefaultValue($name, $bind, $checked);
    }
}
