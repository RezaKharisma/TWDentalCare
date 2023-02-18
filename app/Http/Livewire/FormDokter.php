<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormDokter extends Component
{
    public $nama;

    public function mount()
    {
        $this->nama = "Halo";
    }

    public function render()
    {
        return view('livewire.form-dokter');
    }
}
