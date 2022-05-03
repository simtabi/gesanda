<?php

namespace Simtabi\Gesanda\Traits\Form;

trait HasFloatingLabel
{

    public function shouldDisplayFloatingLabel(): bool
    {
        return is_null($this->floatingLabel) ? config('gesanda.floating_label', false) : $this->floatingLabel;
    }

}
