<?php

namespace Simtabi\Gesanda\Views\Components\Form;

use Closure;
use Simtabi\Gesanda\Abstracts\FormInputTemplate;
use Simtabi\Gesanda\Traits\Form\HasOptions;

class Select extends FormInputTemplate
{

    use HasOptions;

    /** @SuppressWarnings(PHPMD.ExcessiveParameterList) */
    public function __construct(
        string|null                   $name,
        public array                  $options,
        public int|string|array|null  $selected                     = null,
        string|null                   $id                           = null,
        string|false|null             $placeholder                  = null,
        array|object|null             $bind                         = null,
        string|false|null             $label                        = null,
        bool|null                     $floatingLabel                = null,
        string|Closure|null           $prepend                      = null,
        string|Closure|null           $append                       = null,
        string|int|array|Closure|null $value                        = null,
        string|null                   $caption                      = null,
        bool|null                     $displayValidationSuccess     = null,
        bool|null                     $displayValidationFailure     = null,
        public bool                   $allowPlaceholderToBeSelected = true,
        string|null                   $errorBag                     = null,
        array                         $locales                      = [null],
        bool                          $marginBottom                 = true,
        string|null                   $nestedWireKey                = null,
        string                        $type                         = 'text',
        bool                          $showInputError           = true,
    ) {

        parent::__construct(
            $name,
            $id,
            $placeholder,
            $bind,
            $label,
            $floatingLabel,
            $prepend,
            $append,
            $value,
            $caption,
            $displayValidationSuccess,
            $displayValidationFailure,
            $errorBag,
            $locales,
            $marginBottom,
            $nestedWireKey,
            $type,
            $showInputError,
        );
    }

    protected function setViewPath(): string
    {
        return 'form.select';
    }
}
