<?php

namespace Simtabi\Gesanda\Abstracts;

use Closure;
use Simtabi\Gesanda\Traits\Form\CanBeWired;
use Simtabi\Gesanda\Traits\Form\HasAddon;
use Simtabi\Gesanda\Traits\Form\HasFloatingLabel;
use Simtabi\Gesanda\Traits\Form\HasId;
use Simtabi\Gesanda\Traits\Form\HasLabel;
use Simtabi\Gesanda\Traits\Form\HasName;
use Simtabi\Gesanda\Traits\Form\HasPlaceholder;
use Simtabi\Gesanda\Traits\Form\HasTooltip;
use Simtabi\Gesanda\Traits\Form\HasValidation;

abstract class FormInputTemplate extends AbstractComponent
{

    use CanBeWired;
    use HasAddon;
    use HasFloatingLabel;
    use HasId;
    use HasLabel;
    use HasName;
    use HasPlaceholder;
    use HasTooltip;
    use HasValidation;

    public    string      $name;
    protected string|null $id = null;

    public function __construct(

        string                                  $name,
        string|null                             $id                       = null,
        protected string|false|null             $placeholder              = null,
        protected array|object|null             $bind                     = null,
        protected string|false|null             $label                    = null,
        protected bool|null                     $floatingLabel            = null,
        protected string|Closure|null           $prepend                  = null,
        protected string|Closure|null           $append                   = null,
        protected string|int|array|Closure|null $value                    = null,
        public    string|null                   $caption                  = null,
        protected bool|null                     $displayValidationSuccess = null,
        protected bool|null                     $displayValidationFailure = null,
        protected string|null                   $errorBag                 = null,
        public    array                         $locales                  = [null],
        public    bool                          $marginBottom             = true,
        public    string|null                   $nestedWireKey            = null,
        public    string|null                   $type                     = 'text',
        public    bool                          $showInputError           = true,
        public    bool                          $iconOnTheRight           = true,

    )
    {

        $this->name                     = empty($name) ? 'phone-' . uniqid() : $name;
        $this->id                       = empty($id)   ? $this->name         : $id;

        parent::__construct();
    }

}
