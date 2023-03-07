<?php

namespace App\Http\Livewire\Tools;

use App\Models\Perawat;
use Livewire\Component;

class AutocompletePerawat extends Component
{
    public $layout;
    public $label;
    public $name;
    public $required;
    public $value;
    public $attributes = [];
    public $showdiv = false;
    public $search = "";
    public $records;
    public $empDetails;

    public function searchResult()
    {
        if(!empty($this->search))
        {
            $this->records = Perawat::orderby('nama','asc')->select('*')->where('nama','like','%'.$this->search.'%')->limit(5)->get();
            $this->showdiv = true;
        }else{
            $this->showdiv = false;
        }
    }

    // Fetch record by ID
    public function fetchEmployeeDetail($id = 0)
    {
        $record = Perawat::select('*')->where('id',$id)->first();
    }

    public function render()
    {
        return view('livewire.tools.autocomplete-perawat');
    }
}
