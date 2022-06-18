@extends('layouts.app')
@section('content')
    <div class="row mx-5">
        <div class="col-md-2">
            @include('includes.recent-adds')
        </div>
        <div class="col-md-10">
            <div class="d-flex flex-column justify-content-center" id="signin-block">
                <h5 class="mb-3">Sign In</h5>

                <form action="" method="post">
                    <input type="text" class="form-control mb-2" placeholder="Email" name="email">
                    <input type="text" class="form-control mb-2" placeholder="Password" name="password">
                    <div class="d-flex justify-content-between w-100">
                        <a class="nav-link" href="#">Forget Password?</a>
                        <a class="nav-link" href="#">Create Account?</a>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
