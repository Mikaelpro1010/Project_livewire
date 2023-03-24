<?php

namespace App\Http\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ValorTotal extends Component
{
    public $valor_compra = 0;

    public $new_valor_compra;

    public $listeners = ['addProduct'];

    public function render()
    {
        return view('livewire.valor-total', ['valor_total' => $this->valor_compra ]);
    }

    public function addProduct($valor_total)
    {
        $this->valor_compra += $valor_total;
    }

}
