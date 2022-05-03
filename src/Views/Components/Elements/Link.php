<?php

namespace Simtabi\Gesanda\Views\Components\Elements;

use Simtabi\Gesanda\Abstracts\AbstractComponent;

class Link extends AbstractComponent
{
    protected function setViewPath(): string
    {
        return 'button.link';
    }
}
