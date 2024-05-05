<?php

namespace App\Livewire;

use App\Models\ContactList;
use Livewire\Component;

class ContactListManager extends Component
{
    public $name;

    public $contactlist;

    public $search;

    public $perPage = 10;

    public function render()
    {
        $contactlists = ContactList::where('user_id', auth()->id())
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%'.$this->search.'%');
            })
            ->paginate($this->perPage);

        return view('livewire.contact-list-manager', compact('contactlists'));
    }

    public function create()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);

        Contactlist::create([
            'user_id' => auth()->id(),
            'name' => $this->name,
        ]);

        $this->reset('name');
        $this->dispatch('contactlistAdded');
    }

    public function delete($id)
    {
        Contactlist::findOrFail($id)->delete();
    }
}
