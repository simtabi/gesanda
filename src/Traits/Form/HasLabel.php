<?php

namespace Simtabi\Gesanda\Traits\Form;

trait HasLabel
{

    public function getLabel(string|false|null $locale = null): string|null
    {
        if ($this->label === false) {
            return null;
        }

        if ($this->label) {
            return $this->label . ($locale ? ' (' . strtoupper($locale) . ')' : '');
        }

        return $this->getNameTranslationFromValidation($locale);
    }

}
