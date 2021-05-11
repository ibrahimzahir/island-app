<?php

namespace App\Http\Livewire;

use DB;
use Livewire\Component;
use App\Models\Population;

class Populations extends Component
{
    public  $populations, $firstname, $middlename, $lastname, $nationalID, $DOB, $pAddress, $cAddress, $maritalStatus,$email, $mobile;
    public $ismodalOpen=0;

    public function render()
    {   
    $this->populations=Population::all();
      
       
       return view('livewire.population');
    }
}
