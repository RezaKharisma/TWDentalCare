<?php

namespace App\View\Components\ui;

use Illuminate\View\Component;

class button extends Component
{
    public $type;

    public $style;

    public $size;

    public $rounded;

    public $outline;

    public $name;

    public $href;

    public $icon;

    public $modal;

    public $navLink;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $type = null, $style = null, $size = null,
        $rounded = null, $outline = null, $name = null,
        $href = null, $icon = null, $modal = null,
        $navLink = null)
    {
        $this->type = $type ?? 'button';
        $this->style = $style ?? 'primary';
        $this->size = $size;
        $this->rounded = $rounded;
        $this->outline = $outline;
        $this->name = $name;
        $this->href = $href ?? '#';
        $this->icon = $icon;
        $this->modal = $modal;
        $this->navLink = $navLink;
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
