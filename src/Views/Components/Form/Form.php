<?php

namespace Simtabi\Gesanda\Views\Components\Form;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Simtabi\Gesanda\Support\FormBinder;
use Simtabi\Gesanda\Support\Helpers;
use Simtabi\Gesanda\Traits\WithDefaultUI;

class Form extends Component
{
    use WithDefaultUI;

    public function __construct(
        public string            $method   = 'GET',
        public array|object|null $bind     = null,
        public string|null       $errorBag = null,
        public string|null       $wire     = null,
    ) {
        if ($bind) {
            app(FormBinder::class)->bindNewDataBatch($bind);
        }
        if ($errorBag) {
            app(FormBinder::class)->bindErrorBag($errorBag);
        }
        if ($wire) {
            app(FormBinder::class)->bindNewLivewireModifier($wire === '1' ? null : $wire);
        }
        $this->method = strtoupper($method);
    }

    public function render(): View
    {
        return view('gesanda::blade.' . Helpers::getUI($this->defaultUI) . '.form.form');
    }
}
