@extends('user.layouts.master')

@section('title', 'View Profile')

@section('sectionHeader', 'Profile')

@section('sectionHeaderSentence', 'You can view Profile here')

@section('content')
    <div class="row bar">
        <div id="customer-account" class="col-lg-9 clearfix">
            <div class="bo3">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-warning" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="heading">
                    <h3 class="text-uppercase">Personal details for {{ $user->name }}</h3>
                </div>

                <form method="POST" action="/profile">

                    {{method_field('PATCH')}}

                    {{csrf_field()}}

                    <input type="hidden" value="{{ $user->profile->id }}" name="id">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="company">Company</label>
                                <input id="company" type="text" class="form-control" name="company" value="{{$user->profile->company}}" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="street">Street</label>
                                <input id="street" type="text" class="form-control" name="street" value="{{$user->profile->street}}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input id="city" type="text" class="form-control" name="city" value="{{$user->profile->city}}"  required>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label for="zip_code">ZIP</label>
                                <input id="zip_code" type="text" class="form-control" name="zip_code" value="{{$user->profile->zip_code}}" required>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input id="state" type="text" class="form-control" name="state" value="{{$user->profile->state}}" required>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input id="country" type="text" class="form-control" name="country" value="{{$user->profile->country}}" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Telephone</label>
                                <input id="phone" type="text" class="form-control" name="phone" value="{{$user->profile->phone}}" required>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        @include('user.layouts.sidebar')

    </div>
@endsection
