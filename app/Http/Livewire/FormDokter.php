<?php

namespace App\Http\Livewire;

use App\Http\Controllers\DokterController;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormDokter extends Component
{
    use WithFileUploads;

    public $form = [
        'nama' => '',
        'email' => '',
        'jenisKelamin' => '',
        'tempatLahir' => '',
        'tanggalLahir' => '',
        'umur' => '0',
        'agama' => '0',
        'nomorTelepon' => '',
        'alamat' => '',
        'pendidikan' => '',
        'foto' => '',
    ];

    public $foto;

    public $jenKelRadios;

    public $agamaSelect;

    public $buttonType = "button";

    public function mount()
    {
        $this->form['tanggalLahir'] = now()->format('Y-m-d');

        $this->jenKelRadios = [
            [
                'value' => '1',
                'label' => 'Laki - laki'
            ],
            [
                'value' => '0',
                'label' => 'Perempuan'
            ]
        ];

        $this->agamaSelect = [
            [
                'label' => 'Pilih agama...',
                'value' => '0',
                'disabled' => true,
                'selected' => true,
            ],
            [
                'label' => 'Kristen',
                'value' => 'Kristen',
                'disabled' => false,
                'selected' => false,
            ],
            [
                'label' => 'Islam',
                'value' => 'Islam',
                'disabled' => false,
                'selected' => false,
            ],
            [
                'label' => 'Hindu',
                'value' => 'Hindu',
                'disabled' => false,
                'selected' => false,
            ],
            [
                'label' => 'Buddha',
                'value' => 'Buddha',
                'disabled' => false,
                'selected' => false,
            ]
        ];
    }

    public function updated($form)
    {
        $validatedData = $this->validateOnly($form, $this->getRules());

        if ($validatedData) {
            $this->buttonType = "submit";
        }
    }

    public function updatedFoto()
    {
        $this->form['foto'] = $this->foto;
    }

    public function getRules(){
        return [
            'form.nama' => 'required|min:6',
            'form.email' => 'required|email',
            'form.jenisKelamin' => 'required',
            'form.tempatLahir' => 'sometimes|nullable',
            'form.tanggalLahir' => 'required',
            'form.umur' => 'sometimes|nullable|numeric',
            'form.agama' => 'sometimes|nullable',
            'form.alamat' => 'required',
            'form.pendidikan' => 'sometimes|nullable',
            'form.foto' => 'required|size:1024|mimes:jpg,bmp,png,jpeg',
        ];
    }

    public function resetForm()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->foto = [];
        $this->form = [
            'nama' => '',
            'email' => '',
            'jenisKelamin' => '',
            'tempatLahir' => '',
            'tanggalLahir' => now()->format('Y-m-d'),
            'agama' => '0',
            'nomorTelepon' => '',
            'alamat' => '',
            'pendidikan' => '',
            'foto' => '',
        ];
    }

    public function getPath()
    {
        return dirname($this->storage->path($this->form['foto']));
    }

    public function simpan()
    {
        $validatedData = $this->validate($this->getRules());

        if ($validatedData) {
            $this->buttonType = "submit";
        }
    }

    public function render()
    {
        return view('livewire.form-dokter');
    }
}
