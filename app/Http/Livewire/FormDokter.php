<?php

namespace App\Http\Livewire;

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
        'agama' => '0',
        'nomorTelepon' => '',
        'alamat' => '',
        'pendidikan' => '',
        'foto' => '',
    ];

    public $foto;

    public $jenKelRadios;

    public $agamaSelect;

    public function mount()
    {
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

    public function updatedFoto()
    {
        $this->form['foto'] = $this->foto;
    }

    public function render()
    {
        return view('livewire.form-dokter');
    }
}
