<?php

namespace Simtabi\Gesanda\Traits\Form;

trait HasPlaceholder
{
    public function getPlaceholder(string|null $label, string $locale = null): string|null
    {
        if ($this->placeholder === false) {
            return null;
        }
        if ($this->placeholder) {
            return $this->placeholder . ($locale ? ' (' . strtoupper($locale) . ')' : '');
        }

        return $label ?: $this->getNameTranslationFromValidation($locale);
    }
}
