<?php

namespace App\Http\Livewire;

use App\Models\Dokter;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class FormRekamMedis extends Component
{
    use LivewireAlert;

    public $form;

    public $dataPasien;

    public $dataDokter;

    public $dataDiagnosis;

    public function mount()
    {
        $this->getForm();
        $this->getDataDokter();
    }

    public function getForm()
    {
        $this->form = [
            'noRM' => 'RM001',
            'idDokter' => 'Dokter Admin',
            'idPerawat' => 'Perawat Admin',
            'idPasien' => 'Made Admin',
            'alergi' => '',
            'anamnesis' => '',
            'idDiagnosis' => '',
            'riwayatPasien' => '',
            'perawatan' => '',
            'alergi' => '',
        ];
    }

    public function getRules()
    {
        $this->form = [
            'noRM' => '',
            'idDokter' => 'required',
            'idPerawat' => 'required',
            'idPasien' => 'required',
            'alergi' => '',
            'anamnesis' => '',
            'idDiagnosis' => '',
            'riwayatPasien' => '',
            'perawatan' => '',
            'biaya' => '',
        ];
    }

    public function getDataDokter()
    {
        $this->dataDokter = Dokter::select('name')->all();
        dd($this->dataDokter);
    }

    public function resetForm()
    {
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
        return view('livewire.form-rekam-medis');
    }
}
