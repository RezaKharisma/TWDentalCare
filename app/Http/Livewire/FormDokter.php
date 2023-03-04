<?php

namespace App\Http\Livewire;

use App\Http\Controllers\DokterController;
use DateTime;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormDokter extends Component
{
    use WithFileUploads;

    public $form;

    public $foto;

    public $jenKelRadios;

    public $agamaSelect;

    public $buttonType = "button";

    public function mount()
    {
        $this->getForm();
        $this->getDefaultValue();
    }

    public function updated($form)
    {
        $validatedData = $this->validateOnly($form, $this->getRules());

        if ($validatedData) {
            $this->buttonType = "submit";
        }
    }

    public function updatedFormTanggalLahir()
    {
        $this->form['umur'] = $this->getUmur($this->form['tanggalLahir']);
    }

    public function updatedFoto()
    {
        $this->form['foto'] = $this->foto;
    }

    public function getDefaultValue()
    {
        $this->jenKelRadios = [
            ['value' => '1', 'label' => 'Laki - laki'],
            ['value' => '0', 'label' => 'Perempuan']
        ];

        $this->agamaSelect = [
            ['label' => 'Pilih agama...', 'value' => '0', 'disabled' => true, 'selected' => true],
            ['label' => 'Kristen', 'value' => 'Kristen', 'disabled' => false, 'selected' => false],
            ['label' => 'Islam', 'value' => 'Islam', 'disabled' => false, 'selected' => false],
            ['label' => 'Hindu', 'value' => 'Hindu', 'disabled' => false, 'selected' => false],
            ['label' => 'Buddha', 'value' => 'Buddha', 'disabled' => false, 'selected' => false,]
        ];
    }

    public function getRules(){
        return [
            'form.nama' => 'required|min:6',
            'form.email' => 'required|email',
            'form.jenisKelamin' => 'required',
            'form.tempatLahir' => 'sometimes|nullable',
            'form.tanggalLahir' => 'required',
            'form.umur' => 'required',
            'form.agama' => 'sometimes|nullable',
            'form.nomorTelepon' => 'required',
            'form.alamat' => 'required',
            'form.pendidikan' => 'sometimes|nullable',
            'form.foto' => 'required|size:1024|mimes:jpg,bmp,png,jpeg',
        ];
    }

    public function getForm()
    {
        $this->form = [
            'nama' => old('nama') ?? '',
            'email' => old('email') ?? '',
            'jenisKelamin' => old('jenisKelamin') ?? '',
            'tempatLahir' => old('tempatLahir') ?? '',
            'tanggalLahir' => old('tanggalLahir') ?? '',
            'agama' => old('agama') ?? '0',
            'nomorTelepon' => old('nomorTelepon') ?? '',
            'alamat' => old('alamat') ?? '',
            'pendidikan' => old('pendidikan') ?? '',
            'foto' => old('foto') ?? '',
        ];
    }

    public function getUmur($tanggal_lahir){
        $tanggal_lahir = new DateTime($tanggal_lahir);
        $sekarang = new DateTime("today");
        if ($tanggal_lahir > $sekarang) {
        return "0";
        }
        $thn = $sekarang->diff($tanggal_lahir)->y;
        $bln = $sekarang->diff($tanggal_lahir)->m;
        $tgl = $sekarang->diff($tanggal_lahir)->d;
        return $thn;
    }

    public function resetForm()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->foto = [];
        $this->getForm();
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
