<?php

namespace App\Http\Livewire;

use App\Http\Manager\ManagerCart;
use Livewire\Component;

class Cart extends Component
{
    public $cart;

    public function mount(ManagerCart $cart){
        $this->cart = $cart->getCart();
        // dd((new ManagerCart())->getCart()->products()->count());
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
