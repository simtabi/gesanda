<?php

namespace Simtabi\Gesanda\Views\Components\Form;

use Closure;
use Simtabi\Gesanda\Abstracts\FormInputTemplate;
use Simtabi\Gesanda\Support\FormBinder;

class Radio extends FormInputTemplate
{

    public array           $group;
    public int|string|null $checked = null;
    public bool            $inline  = false;

    /** @SuppressWarnings(PHPMD.ExcessiveParameterList) */
    public function __construct(
        string|null                   $name,
        array                         $group,
        int|string|null               $checked                  = null,
        bool                          $inline                   = false,
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

        $this->group   = $group;
        $this->checked = $checked;
        $this->inline  = $inline;
    }

    public function getGroupModeCheckedStatus(int|string $value): bool
    {
        if (old($this->name)) {
            return (string) old($this->name) === (string) $value;
        }
        if ($this->checked) {
            return (string) $this->checked === (string) $value;
        }
        $dataBatch = $this->bind ?: app(FormBinder::class)->getBoundDataBatch();

        return (string) data_get($dataBatch, $this->name) === (string) $value;
    }

    protected function setViewPath(): string
    {
        return 'form.radio';
    }
}
