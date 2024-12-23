@extends('admin.layout.main')

@section('content')
    <div class="row align-items-center h-100">
        <form class="col-lg-3 col-md-4 col-10 mx-auto text-center">

            <h1 class="h6 mb-3">Change Password</h1>
            <div class="mb-3">
                <label class="text-muted" for="password">Current Password</label>
                <input id="password" type="password" class="form-control" name="current_password" required>
            </div>
            <div class="mb-3">
                <label class="text-muted" for="password">New Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>
            <div class="mb-3">
                <label class="text-muted" for="password">Confrim New Password</label>
                <input id="password" type="password" class="form-control" name="password_confirmation" required>
            </div>


            <button class="btn btn-lg btn-primary btn-block" type="submit">Change Password</button>
        </form>
    </div>
@endsection
