@extends('layout')
@section('title', 'Products')
@section('content')

    <div class="container products">
        <div class="row">
            <h3>Корзина</h3>
            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ strtolower($product->description) }}</p>
                            <p><strong>Price: </strong> {{ $product->price }}$</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
