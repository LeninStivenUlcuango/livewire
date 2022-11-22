<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name,$price, $description, $thumbnail;

    public function save()
    {
       $validate= $this->Validate([
            'name'=> 'required',
            'price'=> 'required',
            'description'=> 'required',
            'thumbnail'=> 'image|max:1024',
        ]);

        $validate['thumbnail']=$this->thumbnail->store('photos');

        $product=Product::create($validate);
        return redirect('/');
    }

    public function mount(){
        $this->name="";
    }

    public function render()
    {
        return view('livewire.product.create');
    }
}
