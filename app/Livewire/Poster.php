<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Poster extends Component
{
    #[Layout('components.layouts.lomba')]
    #[Title('Desain Poster')]

    public function render()
    {
        sleep(1);
        return view('livewire.poster');
    }
}
