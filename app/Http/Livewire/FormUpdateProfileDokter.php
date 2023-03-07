<?php

namespace App\Http\Livewire;

use App\Helpers\DefaultValue;
use DateTime;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class FormUpdateProfileDokter extends Component
{
    use LivewireAlert;

    public $form;

    public $jenKelRadios;

    public $agamaSelect;

    public function mount()
    {
        $this->getForm();
        $this->getDefaultValue();
    }

    public function updated($form)
    {
        $validatedData = $this->validateOnly($form, $this->getRules());
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
            'nama' => old('nama') ?? 'Made Admin',
            'email' => old('email') ?? 'admin@gmail.com',
            'jenisKelamin' => old('jenisKelamin') ?? '1',
            'tempatLahir' => old('tempatLahir') ?? 'Denpasar',
            'tanggalLahir' => old('tanggalLahir') ?? '2023-02-02',
            'umur' => old('umur') ?? '25',
            'agama' => old('agama') ?? '3',
            'nomorTelepon' => old('nomorTelepon') ?? '081903407890',
            'alamat' => old('alamat') ?? 'Jalan Raya Pemogan No 160',
            'pendidikan' => old('pendidikan') ?? 'Sarjana Komputer',
        ];
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
            'form.pendidikan' => ''
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
    }

    public function render()
    {
        return view('livewire.form-update-profile-dokter');
    }
}
