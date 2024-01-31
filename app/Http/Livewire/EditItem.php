<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;

class EditItem extends Component
{
    public $items;
    public $name;
    public $description;

    public function mount($id)
    {
        $this->items = Item::findOrFail($id);
        $this->name = $this->items->name;
        $this->description = $this->items->description;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $this->items->update([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Item updated successfully.');

        return redirect()->route('item.list');
        // $this->reset();
    }

    public function render()
    {
        return view('livewire.edit-item');
    }
}
