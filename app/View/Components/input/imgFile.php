<?php

namespace App\View\Components\input;

use Illuminate\View\Component;

class imgFile extends Component
{
    public $layout;

    public $label;

    public $name;

    public $required;

    public $width;

    public $foto;

    public $defaultImage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($layout = null, $label = null, $name = null, $required = null, $width = null, $defaultImage = null, $foto = null)
    {
        $this->layout = $layout ?? 'V';
        $this->label = $label ?? 'Label';
        $this->name = $name ?? 'name';
        $this->required = $required;
        $this->width = $width ?? "100";
        $this->defaultImage = $defaultImage;
        $this->foto = $foto;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input.img-file');
    }
}
