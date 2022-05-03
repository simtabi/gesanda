<?php

namespace Simtabi\Gesanda\Views\Components\Form;

use Closure;
use Simtabi\Gesanda\Abstracts\FormInputTemplate;

class Button extends FormInputTemplate
{

    /** @SuppressWarnings(PHPMD.ExcessiveParameterList) */
    public function __construct(
        string|null                   $name                     = null,
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
        string                        $type                     = 'button',
        bool                          $showInputError           = true,
        public ?string                $title                    = 'Button',
        public ?string                $loadingText              = 'Please wait...',
        public string|null            $icon                     = null,
        public bool                   $iconOnTheRight           = true,
        public string                 $spinnerColor             = 'white',
        public string                 $spinnerSize              = '20px',
        public string                 $spinnerType              = 'circle-spinner',
        public string                 $spinnerStyling           = 'm-0',
        public string                 $animateClass             = 'animate__animated animate__fadeIn',
    ) {

        $name = empty($name) ? $type .'-' . uniqid() : $name;

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
            $iconOnTheRight
        );
    }

    protected function setViewPath(): string
    {
        return 'form.button';
    }





}
