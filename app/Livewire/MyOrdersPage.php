<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Orders - PeterStore')]
class MyOrdersPage extends Component
{
    use WithPagination ;

    protected $paginationTheme = 'Tailwind'; // Use Bootstrap pagination theme
    public function render()
    {
        $orders = Order::where('user_id',auth()->user()->id )->latest()->paginate(10);
        return view('livewire.my-orders-page',[
            'orders' => $orders
        ]);
    }
}
