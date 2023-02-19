<?php

namespace App\View\Components\ui;

use Illuminate\View\Component;

class button extends Component
{
    public $type;

    public $style;

    public $size;

    public $rounded;

    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = null, $style = null, $size = null, $rounded = null, $name = null)
    {
        $this->type = $type ?? 'button';
        $this->style = $style ?? 'primary';
        $this->size = $size ?? '';
        $this->rounded = $rounded ?? '';
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.button');
    }
}
