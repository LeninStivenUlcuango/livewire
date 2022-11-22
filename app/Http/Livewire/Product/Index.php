<?php

namespace App\Http\Livewire\Product;

use App\Http\Manager\ManagerCart;
use Livewire\Component;
use App\Models\Product;

class Index extends Component
{
    
    public function addToCart(ManagerCart $cart, $productId){
        $cart->addToCart($productId);
    }

    public function render()
    {
        return view('livewire.product.index',[
            'products'=> Product::all()]);
    }
}
