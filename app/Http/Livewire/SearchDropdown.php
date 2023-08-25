<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search;

    public $searchData = [];

    public function updatedSearch($newValue)
    {
        if (strlen($this->search) < 2 ){
            $this->searchData = [];

            return;
        }
        $this->searchData = Product::where('title','like' , '%'.$this->search. '%')->get();
    }

    public function render()
    {
        return view('livewire.search-dropdown');
    }
}
