<?php

namespace App\View\Components\input;

use Illuminate\View\Component;

class textarea extends Component
{
    public $layout;

    public $label;

    public $name;

    public $required;

    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($layout = null, $label = null, $name = null, $required = null, $value = null)
    {
        $this->layout = $layout ?? 'V';
        $this->label = $label ?? 'Label';
        $this->name = $name ?? 'name';
        $this->required = $required;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input.textarea');
    }
}
