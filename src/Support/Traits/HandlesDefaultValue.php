<?php

namespace Vespera\LaravelComponents\Support\Traits;

use Illuminate\Support\Str;
use Vespera\DataBinder\Support\Facades\DataValue;

trait HandlesDefaultValue
{
    protected function getDefaultValue(string $name, $bind = null, $default = null)
    {
        $name = Str::dot($name);
        $default = $default ?: DataValue::get($name, $bind);
        return old($name, $default);
    }
}
