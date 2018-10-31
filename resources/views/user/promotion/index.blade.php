@extends('user.layouts.master')

@section('title', 'View Promotions')

@section('sectionHeader', 'Promotions')

@section('sectionHeaderSentence', 'You can view promotion here')

@section('content')
    <div class="row">

        @foreach($promotions as $promotion)
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 my-2">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ $promotion->image_path }}">
                    <div class="card-body">
                        {{--<p class="card-text text-center">--}}
                            {{--{{ $promotion->description }}--}}
                        {{--</p>--}}

                        <p>
                            <strong>Code: </strong>{{ $promotion->code }}
                        </p>

                        {{--<div class="text-center">--}}
                            {{--<a href="" class="btn btn-outline-success">View</a>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection