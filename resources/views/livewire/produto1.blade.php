<div>
    <form wire:submit.prevent="createProduct">
        <div class="text-center">
            <p>${{$product['preco']}}</p>
            <img src="{{$product['url']}}" width="100"><br>

            <label for="">Quantidade:</label>
            <input type="number" name="quantidade" wire:model="quantidade">
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </div>
    </form>
</div>
