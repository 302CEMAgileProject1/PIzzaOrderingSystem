@extends('user.layouts.master')

@section('title', 'Search')

@section('sectionHeader', 'Search Result')

@section('sectionHeaderSentence', 'The search result displayed')

@section('content')

    {{--Search feature--}}
    @include('user.layouts.search')

    <div class="row">

        @forelse($products as $product)
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 my-2">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset($product->image_path) }}">
                    <div class="card-body">
                        <p><strong>{{ $product->name }}</strong></p>

                        <p>{{ $product->description }}</p>

                        <p><strong>Price:</strong> {{ $product->price }}</p>

                        <form method="post" action="{{ route('cart.store') }}">
                            {{ csrf_field() }}

                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <input type="submit" class="btn btn-success btn-block" value="Add to Cart">

                        </form>
                    </div>
                </div>
            </div>
        @empty
            <h3 class="container-fluid alert text-center">
                No privilege found using the term <i>{{ request('q') }}</i>
            </h3>
        @endforelse

    </div>
@endsection