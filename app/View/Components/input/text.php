<?php

namespace App\View\Components\input;

use Illuminate\View\Component;

class text extends Component
{
    public $type;

    public $layout;

    public $label;

    public $name;

    public $required;

    public $icon;

    public $endText;

    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = null, $layout = null, $label = null, $name = null, $required = null, $icon = null, $endText = null, $value = null)
    {
        $this->type = $type ?? 'text';
        $this->layout = $layout ?? 'V';
        $this->label = $label ?? 'Label';
        $this->name = $name ?? 'name';
        $this->required = $required;
        $this->icon = $icon;
        $this->endText = $endText;
        $this->value = $value;
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
