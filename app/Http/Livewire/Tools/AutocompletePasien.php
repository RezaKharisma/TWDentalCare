<?php

namespace App\Http\Livewire\Tools;

use App\Models\Pasien;
use Livewire\Component;

class AutocompletePasien extends Component
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
        if(!empty($this->search))
        {
            $this->records = Pasien::orderby('nama','asc')->select('*')->where('nama','like','%'.$this->search.'%')->limit(5)->get();
            $this->showdiv = true;
        }else{
            $this->showdiv = false;
        }
    }

    // Fetch record by ID
    public function fetchEmployeeDetail($id = 0)
    {
        $record = Pasien::select('*')->where('id',$id)->first();
        $this->search = $record->name;
        $this->empDetails = $record;
        $this->showdiv = false;
    }

    public function render()
    {
        return view('livewire.tools.autocomplete-pasien');
    }
}
