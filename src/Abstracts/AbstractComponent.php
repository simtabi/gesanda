<?php

namespace Simtabi\Gesanda\Abstracts;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Simtabi\Gesanda\Support\Helpers;
use Simtabi\Gesanda\Traits\WithDefaultUI;

abstract class AbstractComponent extends Component
{

    use WithDefaultUI;

    protected string $viewPath;
    protected bool   $asIs = false;

    public function __construct()
    {
        $this->viewPath = $this->setViewPath();
    }

    abstract protected function setViewPath(): string;

    public function render(): View|Factory|Htmlable|Closure|string|Application
    {
        if ($this->asIs) {
            return view($this->viewPath);
        }
        return view('gesanda::blade.' . Helpers::getUI($this->defaultUI) . '.' . $this->viewPath);
    }
}
