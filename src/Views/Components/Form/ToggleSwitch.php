<?php

namespace Simtabi\Gesanda\Views\Components\Form;

class ToggleSwitch extends Checkbox
{
    protected function setViewPath(): string
    {
        $this->toggleSwitch = true;

        return 'form.checkbox';
    }
}
