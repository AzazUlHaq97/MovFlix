@extends('layout')

@section('content')

<div class="row">
    @foreach($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $product->picture }}" alt="">
                <div class="caption">
                    <h4>{{ $product->Product_Name }}</h4>
                    <p>{{ $product->Product_description }}</p>
                    <p><strong>Price: </strong> {{ $product->price }}/- PKR</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->Product_Id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
