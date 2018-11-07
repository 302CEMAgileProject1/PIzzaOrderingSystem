@extends('user.layouts.master')

@section('title', 'View Cart')

@section('sectionHeader', 'Cart')

@section('sectionHeaderSentence', 'Items currently in cart')

@section('content')
    @if (session()->has('success_message'))
        <div class="alert alert-success">
            {{ session()->get('success_message') }}
        </div>
    @endif

    @if (session()->has('error_message'))
        <div class="alert alert-danger">
            {{ session()->get('error_message') }}
        </div>
    @endif

    @if (sizeof($items) > 0)

        <div class="row bar">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th>Quantity</th>
                        <th>Price (RM)</th>
                        <th>Total (RM)</th>
                        <th>Action</th> //Updated
                    </tr>

                <tbody>

                    @foreach($items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->price}}</td>
                        <td>{{ $item->price * $item->quantity }}</td>
                        <td>
                            <form method="POST" action="{{ route('cart.destroy', [$item->id]) }}"  class="side-by-side">
                                {{method_field('DELETE')}}

                                {{ csrf_field() }}

                                <input type="submit" class="btn btn-danger btn-sm" value="Remove">
                            </form>
                        </td> //Updated
                    </tr>
                    @endforeach

                    <tr>
                        <th colspan="3" class="text-right">Item subtotal -</th>
                        <th>{{ \Cart::getSubTotal() }}</th>
                    </tr>

                </tbody>

            </table>
        </div>

        <div class="text-center">
            <a href="{{ route('product.index') }}" class="btn btn-primary btn-lg mt-3">Continue Shopping</a>

            <a href="{{ route('orderHistory.store') }}" class="btn btn-primary btn-lg mt-3 ml-5">Order</a>
        </div>


    @else

        <div class="text-center">
            <h3>You have no items in your shopping cart</h3>

            <a href="{{ route('product.index') }}" class="btn btn-primary btn-lg mt-3">Continue Shopping</a>
        </div>

    @endif

@endsection
