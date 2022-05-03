<?php

namespace Simtabi\Gesanda\Traits\Form;

use Lang;
use Simtabi\Gesanda\Providers\GesandaServiceProvider;

trait HasName
{
    
    public string $defaultLocale  = 'en';
    public bool   $showLocaleName = false;

    protected function getNameTranslationFromValidation(string|null $locale = null): string
    {

        $locale = !empty($locale) ? $locale : $this->defaultLocale;
        $phrase = 'validation.attributes.' . $this->getNameWithoutArrayNotation();

        if (!$this->langHas($phrase, $locale)) {
            $phrase = GesandaServiceProvider::PACKAGE_NAME .'::'. 'validation.attributes.' . $this->getNameWithoutArrayNotation();
            if (!$this->langHas($phrase, $locale)) {
                $name   = str_replace('-', ' ', $this->name);
                $name   = str_replace('_', ' ', $name);
                $phrase = ucfirst($name);
            }
        }

        return __($phrase) . ($locale && $this->showLocaleName ? ' (' . strtoupper($locale) . ')' : '');
    }

    protected function getNameWithoutArrayNotation(): string
    {
        return strstr($this->name, '[', true) ?: $this->name;
    }

    protected function getNameWithArrayNotationConvertedInto(string $notation = '.'): string
    {
        return str_replace(['[', ']'], [$notation, ''], $this->name);
    }


    /**
     * Determine if phrase exist.
     *
     * @param string $phrase
     * @param string $lang
     * @return boolean
     */
    protected function langHas($phrase, $lang)
    {

        if(Lang::hasForLocale($phrase,$lang)){
            return true;
        }

        return false;
    }

}
