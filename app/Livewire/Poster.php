<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Desain Poster')]

class Poster extends Component
{
    public function render()
    {
        sleep(1);
        return view('livewire.poster');
    }
}
