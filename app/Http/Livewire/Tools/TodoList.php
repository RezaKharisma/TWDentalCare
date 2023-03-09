<?php

namespace App\Http\Livewire\Tools;

use App\Models\Diagnosis;
use App\Models\Dokter;
use Livewire\Component;

class TodoList extends Component
{
    public $layout;
    public $label;
    public $name;
    public $required;
    public $value;
    public $showdiv = false;
    public $search = "";
    public $records;
    public $empDetails;

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
        $record = Diagnosis::select('*')->where('id',$id)->first();
        
        $this->search = $record->nama;
        $this->empDetails = $record;
        $this->showdiv = false;
    }

    public function batalPilih()
    {
        $this->showdiv = false;
        $this->search = "";
        $this->records = [];
        $this->empDetails = [];
    }

    public function render()
    {
        return view('livewire.tools.todo-list');
    }
}
