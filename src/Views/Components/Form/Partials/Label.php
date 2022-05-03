<?php

namespace Simtabi\Gesanda\Views\Components\Form\Partials;

use Simtabi\Gesanda\Abstracts\AbstractComponent;
use Simtabi\Gesanda\Traits\Form\HasTooltip;

class Label extends AbstractComponent
{

    use HasTooltip;

    public function __construct(
        public string|null $label,
        public string|null $id         = null,
        public bool        $isRequired = false,
    )
    {
        parent::__construct();
    }

    /**
     * @return bool
     */
    public function isRequired(): bool
    {
        return $this->isRequired;
    }

    protected function setViewPath(): string
    {
        return 'form.partials.label';
    }
}
