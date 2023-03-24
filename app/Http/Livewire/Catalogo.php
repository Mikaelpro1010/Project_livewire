<?php

namespace App\Http\Livewire;

use App\Models\Produto;
use Livewire\Component;

class Catalogo extends Component
{

    public $nome, $quantidade, $preco, $product;

    public $listeners = ['createProduct'];

    public function render()
    {
        $produtos = collect([
            [
                'id' => 0,
                'nome' => "xbox",
                'preco' => 1500,
                'url' => 'imgs/xbox.png',
            ],
            [
                'id' => 1,
                'nome' => "ps4",
                'preco' => 2000,
                'url' => 'imgs/ps4.png',
            ],
        ]);

        return view('livewire.catalogo', compact('produtos'));
    }

    private function resetInput()
    {
        $this->nome = '';
        $this->preco = '';
        $this->quantidade = '';
    }

    public function createProduct($nome, $preco, $quantidade)
    {
        $valor_total = $preco * $quantidade;
        Produto::create(
            [
                'nome' => $nome,
                'preco' => $preco,
                'quantidade' => $quantidade,
                'valor_total' => $valor_total,
            ]
        );

        $this->emit(
            'addProduct',
            $valor_total,
        );

        $this->emit(
            'updateCarrinho',
        );

        $this->resetInput();
        session()->flash('message', 'Produto adicionado ao carrinho!');
    }
}
