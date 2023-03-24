@extends('template')

@section('content')
    <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="card">
            @livewire('catalogo')
            @livewire('carrinho')
            @livewire('valor-total')
        </div>
    </div>
@endsection