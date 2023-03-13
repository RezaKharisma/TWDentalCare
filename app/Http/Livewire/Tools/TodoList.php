<?php

namespace App\Http\Livewire\Tools;

use App\Models\Diagnosis;
use App\Models\Dokter;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class TodoList extends Component
{
    use LivewireAlert;

    public $layout;
    public $label;
    public $name;
    public $required;
    public $value;
    public $showdiv = false;
    public $search = "";
    public $records;
    public $empDetails = [];

    public function searchResult()
    {
        if(!empty($this->search)){
            $this->records = Diagnosis::orderby('nama_diagnosis','asc')->select('*')->where('nama_diagnosis','like','%'.$this->search.'%')->limit(5)->get();
            $this->showdiv = true;
        }else{
            $this->showdiv = false;
        }
    }

    public function fetchData($id = 0)
    {
        $cek = true;
        $this->search = '';
        $this->showdiv = false;
        $record = Diagnosis::select('*')->where('id', $id)->first();

        if (!empty($this->empDetails)) {
            foreach ($this->empDetails as $detail) {
                if ($detail['nama'] == $record->nama_diagnosis) {
                    $this->alert('info', 'Diagnosis sudah dipilih');
                    $cek = false;
                }
            }
        }

        if ($cek) {
            $this->pushArray($record);
        }
    }

    public function pushArray($record)
    {
        array_push($this->empDetails, [
            'id' => $record->id,
            'nama' => $record->nama_diagnosis
        ]);
    }

    public function deleteList($key = 0)
    {
        unset($this->empDetails[$key]);
    }

    public function render()
    {
        return view('livewire.tools.todo-list');
    }
}
