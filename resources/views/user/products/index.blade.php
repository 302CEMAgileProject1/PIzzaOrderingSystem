@extends('user.layouts.master')

@section('title', 'View Menu')

@section('sectionHeader', 'Pizza Menu')

@section('content')
    <div class="row">

        @foreach($products as $product)
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 my-2">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset($product->image_path) }}">
                <div class="card-body">
                    <p><strong>{{ $product->name }}</strong></p>

                    <p>{{ $product->description }}</p>

                    <p><strong>Price:</strong> {{ $product->price }}</p>

                    <div class="text-center">
                        <a href="#" class="btn btn-outline-success">Order</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
@endsection