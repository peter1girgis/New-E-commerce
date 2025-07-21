<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
#[Title('PRODUCTS - PeterStore')]
class ProductsPage extends Component
{
    use WithPagination ;
    public function render()
    {
        $products = Product::where('is_active',1)->paginate(6);
        return view('livewire.products-page',[
            'products' => $products ,
        ]);
    }
}
