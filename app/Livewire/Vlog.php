<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


class Vlog extends Component
{
    #[Layout('components.layouts.lomba')]
    #[Title('Video Pendek (Vlog)')]

    public function render()
    {
        sleep(1);
        return view('livewire.vlog');
    }
}
