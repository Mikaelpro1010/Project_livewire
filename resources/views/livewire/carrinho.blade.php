<div>
    {{-- <div class="container card"> --}}
    <div class="card-body">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseOne">
                        Carrinho de compras
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <table class="p-3 table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Nome
                                    </th>
                                    <th>
                                        Preco
                                    </th>
                                    <th>
                                        Quantidade
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produtos as $product)
                                    <tr>
                                        <td>
                                            {{ $product->nome }}
                                        </td>
                                        <td>
                                            {{ $product->preco }}
                                        </td>
                                        <td>
                                            {{ $product->quantidade }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
</div>
