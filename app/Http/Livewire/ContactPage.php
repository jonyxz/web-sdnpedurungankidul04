<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactPage extends Component
{
    public $contact;

    public function mount()
    {
        $this->contact = Contact::first();
    }

    public function render()
    {
        return view('livewire.contact-page');
    }
}