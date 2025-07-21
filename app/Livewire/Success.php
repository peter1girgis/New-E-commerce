<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('SUCCESS - PeterStore')]
class Success extends Component
{
    public function render()
    {
        return view('livewire.success');
    }
}
