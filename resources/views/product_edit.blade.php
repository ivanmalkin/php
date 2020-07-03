@extends('layout')
@section('title', 'Product Edit')
@section('content')

    <div class="container products">
        <div class="row">
            <form method="POST" action="{{ route('editAction', [$product->id]) }}">
                @csrf
                <div class="form-group">
                    <label for="name">Название</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <input type="text" class="form-control" name="description" id="description" value="{{ $product->description }}">
                </div>
                <div class="form-group">
                    <label for="price">Цена</label>
                    <input type="number" class="form-control" name="price" id="price" value="{{ $product->price }}">
                </div>
                <button type="submit" class="btn btn-primary">Изменить</button>
            </form>
        </div>
    </div>

@endsection
