<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Lomba Vlog')]

class Vlog extends Component
{
    public function render()
    {
        sleep(1);
        return view('livewire.vlog', ['pageId' => 'vlog']);
    }
}
