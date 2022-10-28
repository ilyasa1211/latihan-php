<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;

class Search extends Component
{
    public $Search = '';
    public function render()
    {
        return view('livewire.search', [
            "data" => Item::where('namaBarang','like','%'.$this->Search.'%')->get(),
        ]);
    }
}
