<?php

namespace Simtabi\Gesanda\Views\Components\Elements;

use Illuminate\View\Component;
use Illuminate\View\View;
use Simtabi\Gesanda\Abstracts\AbstractComponent;

class Alert extends AbstractComponent
{


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string            $type             = 'primary',
        public bool              $closable         = false,
        public ?string           $heading          = null,
        public string|array|null $message          = null,
        public ?string           $borderColor      = 'primary',
        public ?string           $borderStyle      = 'dashed',
        public ?string           $iconColor        = 'primary',
        public ?string           $iconType         = 'svg',
        public ?string           $icon             = null,
        public ?string           $bg               = 'light-primary',
        public ?string           $messageCss       = 'fs-6 pe-7',
        public ?string           $cta              = null,
        public bool              $isActive         = false,
        public bool              $isNotice         = true,
        public int               $autoCloseTime    = 5000,
    )
    {
        parent::__construct();
    }

    protected function setViewPath(): string
    {
        return 'elements.alert';
    }

}
