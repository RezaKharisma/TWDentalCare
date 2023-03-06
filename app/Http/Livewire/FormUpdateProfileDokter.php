<?php

namespace App\Http\Livewire;

use App\Helpers\DefaultValue;
use DateTime;
use Livewire\Component;

class FormUpdateProfileDokter extends Component
{
    public $form;

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

    public function getDefaultValue()
    {
        $this->jenKelRadios = DefaultValue::getJenisKelamin();
        $this->agamaSelect = DefaultValue::getAgama();
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
        ];
    }

    public function getRules(){
        return [
            'form.nama' => 'required',
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

    public function getUmur($tanggal_lahir){
        $tanggal_lahir = new DateTime($tanggal_lahir);
        $sekarang = new DateTime("today");
        if ($tanggal_lahir > $sekarang) {
        return "0";
        }
        $thn = $sekarang->diff($tanggal_lahir)->y;
        return $thn;
    }

    public function resetForm()
    {
        $this->resetErrorBag();
        $this->resetValidation();
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
        return view('livewire.form-update-profile-dokter');
    }
}
