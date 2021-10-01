<?php

namespace Vespera\LaravelComponents\Components;

class FormLabel extends AbstractComponent
{
    public $required;

    public function __construct(bool $required = false)
    {
        $this->required = $required;
    }
}
