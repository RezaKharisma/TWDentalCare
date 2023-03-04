<?php

namespace App\View\Components\ui;

use Illuminate\View\Component;

class card extends Component
{
    public $cardHeader;

    public $cardFooter;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cardHeader = null, $cardFooter = null)
    {
        $this->cardHeader = $cardHeader;
        $this->cardFooter = $cardFooter;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.card');
    }
}
