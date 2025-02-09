<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Tenis Meja')]

class Tenismeja extends Component
{
    public function render()
    {
        sleep(1);
        return view('livewire.tenismeja');
    }
}
