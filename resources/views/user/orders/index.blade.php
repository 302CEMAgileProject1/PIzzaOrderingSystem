@extends('user.layouts.master')

@section('title', 'View Order History')

@section('sectionHeader', 'Order History')

@section('sectionHeaderSentence', 'This is the order history made')

@section('content')
    <div class="row bar">
        <div id="customer-account" class="col-lg-9 clearfix">
            <div class="bo3">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Created At</th>
                        <th>Total (RM)</th>
                        <th>Action</th>
                    </tr>

                    <tbody>

                    @foreach($histories as $history)
                        <tr>
                            <td>{{ $history->id }}</td>
                            <td>{{ $history->created_at }}</td>
                            <td>{{ $history->total }}</td>
                            <td>
                                <a href="{{ route('orderHistory.show', [$history]) }}">View</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>
        </div>

        @include('user.layouts.sidebar')

    </div>
@endsection