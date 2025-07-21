<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('PRODUCTDETAILS - PeterStore')]
class ProductDetailPage extends Component
{
    public $product ;
    public function mount($slug){
        $this->product = Product::where('slug', $slug)->firstOrFail();
    }
    public function render()
    {

        return view('livewire.product-detail-page',[
            'product' => $this->product ,
        ]);
    }
}
