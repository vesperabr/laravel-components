<?php

namespace Vespera\LaravelComponents\Support\Traits;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\Support\ViewErrorBag;

trait HandlesValidationError
{
    public function hasError()
    {
        $errors = View::shared('errors', function () {
            return request()->session()->get('errors', new ViewErrorBag());
        });

        $name = Str::dot($this->name);
        return $errors->getBag($this->bag)->has($name);
    }
}
