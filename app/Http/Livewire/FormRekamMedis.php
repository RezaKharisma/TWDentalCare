<?php

namespace App\Http\Livewire;

use App\Models\Dokter;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class FormRekamMedis extends Component
{
    use LivewireAlert;

    public $form;

    public $dataPasien = [];

    public $optDokter = [];

    public $dataDiagnosis = [];

    public function mount()
    {
        $this->getForm();
        $this->getDataDokter();
    }

    public function getForm()
    {
        $this->form = [
            'noRM' => 'RM001',
            'idDokter' => '0',
            'idPerawat' => '0',
            'idPasien' => '0',
            'alergi' => '',
            'anamnesis' => '',
            'idDiagnosis' => '',
            'riwayatPasien' => '',
            'perawatan' => '',
            'biaya' => '',
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
        array_push($this->optDokter, [
            'label' => "Pilih dokter...",
            'value' => '0',
            'disabled' => true,
            'selected' => true
        ]);

        foreach (Dokter::all() as $dokter) {
            array_push($this->optDokter, [
                'label' => $dokter->nama,
                'value' => $dokter->id,
                'disabled' => false,
                'selected' => false
            ]);
        }
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
