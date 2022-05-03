<?php

namespace Simtabi\Gesanda\Views\Components\Form;

use Closure;
use Simtabi\Gesanda\Abstracts\FormInputTemplate;
use Simtabi\Gesanda\Traits\Form\HasValue;

class Textarea extends FormInputTemplate
{

    use HasValue;

    /** @SuppressWarnings(PHPMD.ExcessiveParameterList) */
    public function __construct(
        string                        $name,
        string|null                   $id                       = null,
        string|false|null             $placeholder              = null,
        array|object|null             $bind                     = null,
        string|false|null             $label                    = null,
        bool|null                     $floatingLabel            = null,
        string|Closure|null           $prepend                  = null,
        string|Closure|null           $append                   = null,
        string|int|array|Closure|null $value                    = null,
        string|null                   $caption                  = null,
        bool|null                     $displayValidationSuccess = null,
        bool|null                     $displayValidationFailure = null,
        string|null                   $errorBag                 = null,
        array                         $locales                  = [null],
        bool                          $marginBottom             = true,
        string|null                   $nestedWireKey            = null,
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
            null,
            $showInputError,
        );
    }

    protected function setViewPath(): string
    {
        return 'form.textarea';
    }
}
