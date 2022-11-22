<?php 
    namespace App\Http\Manager;

use App\Models\Product;
use App\Models\ShoppingCart;

    class ManagerCart
    {
        private $sessionName="shopping_cart_id";
        private $cart;

        public function __construct()
        {
            $this->cart= $this->findOrCreate($this->findSession());
        }

        public function addToCart($productId){
            $product = $this->getProduct($productId);
           $this->cart->products()->attach($product->id); 
        }

        public function getCart(){
            return $this->cart;
        }

        public function getProduct($productId){
            return Product::where('slug', $productId)->first();
        }

        private function findOrCreate($cartId=null){
            $cart=null;

            if(is_null($cartId)){
                $cart = ShoppingCart::create();
            }else{
                $cart = ShoppingCart::find($cartId);
                if(is_null($cart)){
                    $cart = ShoppingCart::create();
                }
            }

            request()->session()->put($this->sessionName, $cartId);
        
            return $cart;
        }

        private function findSession(){
            return request()->session()->get($this->sessionName);
        }
        
    }
?>