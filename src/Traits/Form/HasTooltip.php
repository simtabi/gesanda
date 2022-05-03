<?php

namespace Simtabi\Gesanda\Traits\Form;

trait HasTooltip
{

    public string|null $tooltipTitle = null;
    public string|null $tooltip      = null;

    public function getTooltip(string|false|null $locale = null): string|null
    {
        if ($this->tooltip === false) {
            return null;
        }

        if ($this->tooltip) {
            return $this->tooltip . ($locale ? ' (' . strtoupper($locale) . ')' : '');
        }

        return $this->getNameTranslationFromValidation($locale);
    }

}
