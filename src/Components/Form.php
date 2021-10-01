<?php

namespace Vespera\LaravelComponents\Components;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ViewErrorBag;
use Illuminate\View\ComponentAttributeBag;
use Vespera\DataBinder\Support\Facades\DataBinder;

class Form extends AbstractComponent
{
    public $method;
    private $multipart;
    private $bag;

    public function __construct(
        string $method = 'POST',
        bool $multipart = false,
        string $bag = 'default',
        $bind = null
    ) {
        $this->method = strtoupper(trim($method));
        $this->multipart = $multipart;
        $this->bag = $bag;
        DataBinder::bind($bind);
    }

    /**
     * Prepare the data before append it into the component
     *
     * @param array $data
     * @return array
     */
    protected function prepareAttributes(ComponentAttributeBag $attributes): ComponentAttributeBag
    {
        $attributes['method'] = $this->method === 'GET' ? 'GET' : 'POST';

        if ($this->multipart) {
            $attributes['enctype'] = 'multipart/form-data';
        }

        return $attributes;
    }

    /**
     * Determine if the form has validation errors
     *
     * @return boolean
     */
    public function hasErrors(): bool
    {
        $errors = View::shared('errors', function () {
            return request()->session()->get('errors', new ViewErrorBag());
        });

        return $errors->getBag($this->bag)->isNotEmpty();
    }
}
