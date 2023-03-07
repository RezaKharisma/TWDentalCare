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

    protected $listeners = ['confirmed', 'cancelled'];

    public function updatedFoto()
    {
        $this->validate($this->getRules());

        $this->alert('question', 'Ingin menyimpan foto', [
            'timer' => null,
            'showCancelButton' => true,
            'cancelButtonText' => 'Cancel',
            'showConfirmButton' => true,
            'confirmButtonText' => 'Submit',
            'onConfirmed' => 'confirmed',
            'onDismissed' => 'cancelled'
        ]);
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

    public function cancelled()
    {
        $this->resetFoto();
    }

    public function confirmed($data)
    {
        $this->alert('success', 'Foto berhasil tersimpan!');
    }

    public function render()
    {
        return view('livewire.form-foto-profil');
    }
}
