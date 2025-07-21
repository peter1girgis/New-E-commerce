<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Order Details - PeterStore')]
class MyOrderDetailPage extends Component
{
    public function render()
    {
        return view('livewire.my-order-detail-page');
    }
}
