<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Cerpen extends Component
{
    #[Layout('components.layouts.lomba')]
    #[Title('Cerpen Berbantuan Aplikasi Presentasi')]

    public function render()
    {
        sleep(1);
        return view('livewire.cerpen');
    }
}
