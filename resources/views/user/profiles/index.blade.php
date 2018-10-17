@extends('user.layouts.master')

@section('title', 'View Profile')

@section('sectionHeader', 'Profile')

@section('content')
    <div class="row bar">
        <div id="customer-account" class="col-lg-9 clearfix">
            <div class="box mt-5">

            </div>
            <div class="bo3">
                <div class="heading">
                    <h3 class="text-uppercase">Personal details for {{ Auth::user()->name }}</h3>
                </div>

                @if ($errors->any())
                    <div class="alert alert-warning" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(!Auth::user()->profile()->exists())
                    {{--Profile linked to User is empty--}}
                    @include('user.profiles.create_form')
                @else
                    @include('user.profiles.edit_form')
                @endif

            </div>
        </div>

        @include('user.layouts.sidebar')

    </div>
@endsection