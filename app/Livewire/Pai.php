<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Olimpiade PAI')]

class Pai extends Component
{
    public function render()
    {
        sleep(1);
        return view('livewire.pai');
    }
}
