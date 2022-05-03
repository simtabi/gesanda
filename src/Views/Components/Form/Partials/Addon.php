<?php

namespace Simtabi\Gesanda\Views\Components\Form\Partials;

use Closure;
use Simtabi\Gesanda\Abstracts\AbstractComponent;

class Addon extends AbstractComponent
{
    public function __construct(public string|Closure $addon)
    {
        parent::__construct();
    }

    protected function setViewPath(): string
    {
        return 'form.partials.addon';
    }
}
