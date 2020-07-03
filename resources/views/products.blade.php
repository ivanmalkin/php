@extends('layout')
@section('title', 'Products')
@section('content')

    <div class="container products">
        <div class="row">
            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ strtolower($product->description) }}</p>
                            <p><strong>Price: </strong> {{ $product->price }}$</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                            <p class="btn-holder"><a href="{{ url('delete/'.$product->id) }}" class="btn btn-danger btn-block text-center" role="button">Delete</a> </p>
                            <p class="btn-holder"><a href="{{ url('edit/'.$product->id) }}" class="btn btn-primary btn-block text-center" role="button">Edit</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
