<?php

namespace App\View\Components\input;

use Illuminate\View\Component;

class text extends Component
{

    public $layout = 'V';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($layout)
    {
        $this->layout = $layout;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input.text');
    }
}
