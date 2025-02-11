<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


class Pai extends Component
{
    #[Layout('components.layouts.lomba')]
    #[Title('Olimpiade PAI')]
    
    public function render()
    {
        sleep(1);
        return view('livewire.pai');
    }
}
