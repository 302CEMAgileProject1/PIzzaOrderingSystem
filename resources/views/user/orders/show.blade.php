@extends('user.layouts.master')

@section('title', 'View Order History Details')

@section('sectionHeader', 'Order History Details')

@section('sectionHeaderSentence', 'Details of the order made')

@section('content')
    <div class="row bar">
        <div id="customer-account" class="col-lg-9 clearfix">
            <div class="bo3">

                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price (RM)</th>
                        <th>Total (RM)</th>
                    </tr>

                    <tbody>

                    @foreach($orderHistory->cart_data as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->price * $item->quantity }}</td>
                        </tr>
                    @endforeach

                    <tr>
                        <th colspan="3" class="text-right">Item Subtotal (RM) -</th>
                        <th>{{ $orderHistory->total }}</th>
                    </tr>

                    </tbody>
                </table>



            </div>

        </div>

        @include('user.layouts.sidebar')

    </div>
@endsection