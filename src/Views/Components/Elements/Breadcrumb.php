<?php

namespace Simtabi\Gesanda\Views\Components\Elements;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    /**
     * The links.
     * Key => Name of the link &  Value => Route name of the link
     *
     * @var array
     */
    public $items;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($items = null)
    {
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('gesanda::package1.breadcrumb');
    }
}
