<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FormFotoProfil extends Component
{
    use WithFileUploads;

    public $foto;

    public function updatedFoto()
    {
        $this->validateOnly($this->foto, $this->getRules());
    }

    public function getRules()
    {
        return [
            'foto' => 'image|mimes:png,jpg,jpeg'
        ];
    }

    public function resetFoto()
    {
        $this->foto = '';
    }

    public function render()
    {
        return view('livewire.form-foto-profil');
    }
}
