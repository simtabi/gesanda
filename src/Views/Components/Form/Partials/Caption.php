<?php

namespace Simtabi\Gesanda\Views\Components\Form\Partials;

use Simtabi\Gesanda\Abstracts\AbstractComponent;

class Caption extends AbstractComponent
{
    public function __construct(public string $inputId, public string|null $caption)
    {
        parent::__construct();
    }

    protected function setViewPath(): string
    {
        return 'form.partials.caption';
    }
}
