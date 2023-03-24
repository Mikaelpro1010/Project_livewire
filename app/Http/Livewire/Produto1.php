<?php

namespace App\Http\Livewire;

use App\Models\Produto;
use Livewire\Component;

class Produto1 extends Component
{
    public $product;
    public $quantidade = '';

    public function render()
    {
        return view('livewire.produto1');
    }

    public function createProduct()
    {
        $this->emit('createProduct', 
            $this->product['nome'],
            $this->product['preco'],
            $this->quantidade,
        );
    }

    // public function addProduct()
    // {
    //     $this->emit('addProduct', 
    //         $this->product['preco'],
    //         $this->quantidade,
    //         $this->valor_total,
    //     );
    // }
}
