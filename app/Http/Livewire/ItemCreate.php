<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;

class ItemCreate extends Component
{

    public $name;
    public $description;

   

    public function render()
    {
        return view('livewire.item-create');
    }

    public function createItem()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Item::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        // Optionally, you can reset the form after successful submission
        // $this->reset();

        return redirect()->route('item.list');

        session()->flash('message', 'Item created successfully.');
    }

    
}
