<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


class Tenismeja extends Component
{
    #[Layout('components.layouts.lomba')]
    #[Title('Tenis Meja')]

    public function render()
    {
        sleep(1);
        return view('livewire.tenismeja');
    }
}
