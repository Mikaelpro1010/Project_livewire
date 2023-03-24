<?php

namespace App\Http\Livewire;

use App\Models\Produto;
use Livewire\Component;

class Carrinho extends Component
{
    public $listeners = ['updateCarrinho'=>'render'];


    public function render()
    {
        $produtos = Produto::get();

        return view('livewire.carrinho', compact('produtos'));
    }
}
