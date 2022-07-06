@extends('layouts.app')
@section('content')
    <div class="m-0 p-0 row w-100">
        <div class="col-md-2" id="side-section">
            @include('includes.recent-adds')
        </div>
        <div class="">
            <div class="account-page bg-white">
                <h5 style="padding: 0.5rem 1rem;">Your Account</h5>
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
    </div>
@endsection
