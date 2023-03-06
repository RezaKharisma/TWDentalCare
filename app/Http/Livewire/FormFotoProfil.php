<?php

namespace App\Http\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormFotoProfil extends Component
{
    use WithFileUploads;

    use LivewireAlert;

    public $foto;

    public $isDisabled = true;

    public function updatedFoto()
    {
        $this->isDisabled = true;

        $this->validate($this->getRules());

        $this->isDisabled = false;
    }

    public function getRules()
    {
        return [
            'foto' => "nullable|image|max:2048|mimes:jpg,jpeg,png,svg,gif"
        ];
    }

    public function resetFoto()
    {
        $this->foto = '';
    }

    public function simpan()
    {
        $this->validate($this->getRules());

        $this->alert('question', 'How are you today?', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'Good',
            'onConfirmed' => 'confirmed'
        ]);
    }

    public function render()
    {
        return view('livewire.form-foto-profil');
    }
}
