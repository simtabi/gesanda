<?php

namespace Simtabi\Gesanda\Views\Components\Form;

use Closure;
use Simtabi\Gesanda\Abstracts\FormInputTemplate;
use Simtabi\Gesanda\Traits\Form\CanBeChecked;

class Checkbox extends FormInputTemplate
{

    use CanBeChecked;

    public array                         $group                    = [null];
    public bool|array|null               $checked                  = null;
    public bool                          $inline                   = false;
    public bool                          $toggleSwitch             = false;

    /** @SuppressWarnings(PHPMD.ExcessiveParameterList) */
    public function __construct(

        string|null                   $name,
        array                         $group                    = [null],
        bool|array|null               $checked                  = null,
        bool                          $inline                   = false,
        bool                          $toggleSwitch             = false,
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
        string                        $type                     = 'text',
        bool                          $showInputError           = true,
    ) {

        $this->group         = $group;
        $this->checked       = $checked;
        $this->inline        = $inline;
        $this->toggleSwitch  = $toggleSwitch;

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
            $showInputError
        );
    }

    protected function setViewPath(): string
    {
        return 'form.checkbox';
    }
}
