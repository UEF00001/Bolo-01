@extends('layouts.app')
@section('content')
    <div class="m-0 p-0 row w-100">
        <div class="col-md-2" id="side-section">
            @include('includes.recent-adds')
        </div>
        <div class="account-page bg-white p-3 sign">
            <div class="d-flex flex-column justify-content-center" id="signin-block">
                <h5 class="mb-3">Sign In</h5>

                <form action="" method="post">
                    <input type="text" class="form-control mb-2" placeholder="Email" name="email">
                    <input type="text" class="form-control mb-2" placeholder="Password" name="password">
                    <a class="nav-link p-0" href="#">Forget Password?</a>
                    <button type="submit" class="btn btn-success mt-3 mb-1">Submit</button>
                    <a class="nav-link p-0" href="#">Create Account?</a>

                </form>
            </div>
        </div>
    </div>
@endsection
