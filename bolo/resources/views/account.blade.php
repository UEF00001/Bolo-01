@extends('layouts.app')
@section('content')
    <div class="row mx-5">
        <div class="col-md-2">
            @include('includes.recent-adds')
        </div>
        <div class="col-md-10">
            <h5>Your Account</h5>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">My Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Shipping Address</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Methods Of Payment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bonus Stuff</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sign Out</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
