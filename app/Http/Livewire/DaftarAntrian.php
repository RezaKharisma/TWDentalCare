<?php

namespace App\Http\Livewire;

use DateTime;
use Livewire\Component;
use App\Helpers\DefaultValue;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DaftarAntrian extends Component
{
    use LivewireAlert;

    public $form;

    public $foto;

    public $jenKelRadios;

    public $agamaSelect;

    public function mount()
    {
        $this->getForm();
        $this->getDefaultValue();
    }

    public function updated($form)
    {
        $this->validateOnly($form, $this->getRules());
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

    public function getRules(){
        return [
            'form.nama' => 'required',
            'form.email' => 'required|email',
            'form.jenisKelamin' => 'required',
            'form.tanggalLahir' => 'required',
            'form.umur' => 'required',
            'form.nomorTelepon' => 'required',
        ];
    }

    public function getForm()
    {
        $this->form = [
            'nama' => old('nama') ?? '',
            'email' => old('email') ?? '',
            'jenisKelamin' => old('jenisKelamin') ?? '',
            'tanggalLahir' => old('tanggalLahir') ?? '',
            'nomorTelepon' => old('nomorTelepon') ?? '',
            'umur' => old('umur') ?? '',
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
        $this->alert('warning', 'Mohon periksa form kembali!');

        $this->validate($this->getRules());

        $this->alert('success', 'Data berhasil tersimpan!');

        $this->flash('success', 'Data berhasil tersimpan!', [], '/list-antrian');
    }

    public function render()
    {
        return view('livewire.daftar-antrian');
    }
}
