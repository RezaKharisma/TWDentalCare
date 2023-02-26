<?php

namespace App\View\Components\input;

use Illuminate\View\Component;

class radio extends Component
{
    public $layout;

    public $label;

    public $name;

    public $radios;

    public $required;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($layout = null, $label = null, $name = null, $required = null, $radios = [])
    {
        $radio = [
            [
                'value' => '...',
                'label' => '...'
            ]
        ];

        $this->layout = $layout ?? 'V';
        $this->label = $label ?? 'Label';
        $this->name = $name ?? 'name';
        $this->required = $required;
        $this->radios = $radios ?? $radio;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input.radio');
    }
}
