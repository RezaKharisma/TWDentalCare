<?php

namespace App\Http\Livewire;

use App\Helpers\DefaultValue;
use DateTime;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormPasien extends Component
{
    use WithFileUploads;

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

    public function updatedFoto()
    {
        $this->validate([
            'foto' => "nullable|image|max:2048|mimes:jpg,jpeg,png,svg,gif"
        ]);
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
            'form.tempatLahir' => '',
            'form.tanggalLahir' => 'required',
            'form.umur' => 'required',
            'form.agama' => '',
            'form.nomorTelepon' => 'required',
            'form.alamat' => 'required',
            'form.pekerjaan' => '',
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
            'pekerjaan' => old('pekerjaan') ?? '',
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
        $this->foto = [];
        $this->getForm();
    }

    public function simpan()
    {
        $this->alert('warning', 'Mohon periksa form kembali!');

        $this->validate($this->getRules());

        $this->alert('success', 'Data berhasil tersimpan!');
    }

    public function render()
    {
        return view('livewire.form-pasien');
    }
}
