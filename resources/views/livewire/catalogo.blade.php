{{-- <div class="card"> --}}
<h1 class="text-center">Catálogo de produtos</h1>
<div class="card-body">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Lista
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">

                <div class="accordion-body">
                    @foreach ($produtos as $product)
                        <div class="card">
                            @livewire('produto1', ['product' => $product], key($product['id']))
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
