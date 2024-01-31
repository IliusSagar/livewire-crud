<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;

class ItemList extends Component
{

    public $items;
 

    public function render()
    {
        return view('livewire.item-list');
    }

    public function mount()
    {
        $this->items = Item::all();
    }

    public function deleteitem($id)
    {
        $item  = Item::find($id);
        $item ->delete();

        $this->mount();
        // $this->items = $this->items->except($id);
    }

   
}
