<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;


#[Title('CART - PeterStore')]
class CartPage extends Component
{

    public function render()
    {
        return view('livewire.cart-page');
    }
}
