<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Paul';

    public function mount()
    {
        $this->name = 'shit';
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
