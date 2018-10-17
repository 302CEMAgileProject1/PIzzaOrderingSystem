<form method="POST" action="/profile">

    {{method_field('PUT')}}

    {{csrf_field()}}

    <input type="hidden" value="{{ Auth::user()->profile->id }}" name="id">

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ Auth::user()->profile->first_name }}" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ Auth::user()->profile->last_name }}" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="company">Company</label>
                <input id="company" type="text" class="form-control" name="company" value="{{ Auth::user()->profile->company }}" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="street">Street</label>
                <input id="street" type="text" class="form-control" name="street" value="{{ Auth::user()->profile->street }}" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="form-group">
                <label for="city">City</label>
                <input id="city" type="text" class="form-control" name="city" value="{{ Auth::user()->profile->city }}" required>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-group">
                <label for="zip_code">ZIP</label>
                <input id="zip_code" type="text" class="form-control" name="zip_code" value="{{ Auth::user()->profile->zip_code }}" required>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-group">
                <label for="state">State</label>
                <input id="state" type="text" class="form-control" name="state" value="{{ Auth::user()->profile->state }}" required>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-group">
                <label for="country">Country</label>
                <input id="country" type="text" class="form-control" name="country" value="{{ Auth::user()->profile->country }}" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="phone">Telephone</label>
                <input id="phone" type="text" class="form-control" name="phone" value="{{ Auth::user()->profile->phone }}" required>
            </div>
        </div>

        {{--<div class="col-md-6">--}}
            {{--<div class="form-group">--}}
                {{--<label for="email_account">Email</label>--}}
                {{--<input id="email_account" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="col-md-12 text-center">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </div>
</form>