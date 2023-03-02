<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormPerawat extends Component
{
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

    protected $validationAttributes = [
        'form.nama' => 'Nama Lengkap',
        'form.email' => 'Email',
        'form.jenisKelamin' => 'Jenis Kelamin',
        'form.tempatLahir' => 'Tempat Lahir',
        'form.tanggalLahir' => 'Tanggal Lahir',
        'form.umur' => 'Umur',
        'form.agama' => 'Agama',
        'form.alamat' => 'Alamat',
        'form.pendidikan' => 'Pendidikan',
        'form.foto' => 'Foto',
    ];

    public $foto;

    public $jenKelRadios;

    public $agamaSelect;

    public $kesalahan;

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
        $this->kesalahan = $this->errorBag;
        $this->validateOnly($form, $this->getRules());
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
            'form.foto' => 'required|size:1024|mimes:jpg,bmp,png',
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

    public function render()
    {
        return view('livewire.form-dokter');
    }
}
