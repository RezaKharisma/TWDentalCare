<?php

namespace App\View\Components\input;

use Illuminate\View\Component;

class select extends Component
{
    public $layout;

    public $label;

    public $name;

    public $options;

    public $required;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($layout = null, $label = null, $name = null, $required = null, $options = [])
    {
        $option = [
            [
                'label' => '...',
                'value' => '...',
                'disabled' => true,
                'selected' => true,
            ]
        ];

        $this->layout = $layout ?? 'V';
        $this->label = $label ?? 'Label';
        $this->name = $name ?? 'name';
        $this->required = $required;
        $this->options = $options ?? $option;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input.select');
    }
}
