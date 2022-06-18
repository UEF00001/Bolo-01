@extends('layouts.app')
@section('content')
    <div class="row mx-5">
        <div class="col-md-2">
            @include('includes.recent-adds')
        </div>
        <div class="col-md-10">
            <div class="cart-items">
                <div class="d-flex cart-item">
                    <div class="item-image mx-4">
                        <img class="img-fluid" class="h-100" src="{{ asset('Assets/Images/R-7696672-1447303028-4579.jpeg.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column item-details justify-content-between">
                        <p>Bodywave 12” Waves Jazz Dance Records, U.S.A. 1986 vg+/EX</p>
                        <div class="d-flex justify-content-between">
                            <a href="javascript:void(0)" class="btn btn-secondary">Remove</a>
                            <span>€139.00</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex cart-item mt-4">
                    <div class="item-image mx-4">
                        <img class="img-fluid" class="h-100" src="{{ asset('Assets/Images/R-15793316-1597888782-9556.jpeg.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column item-details justify-content-between">
                        <p>I Still Dream Of You 7” Dennis Planter Hot Box, U.K. 1986 vg/VG+</p>
                        <div class="d-flex justify-content-between">
                            <a href="javascript:void(0)" class="btn btn-secondary">Remove</a>
                            <span>€89.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="calculation float-right">
                <p>Subtotal €268.00</p>
                <p>Shipping €14.00</p>
                <p>Discount €0.00</p>
                <p class="mt-1">Total €272.00</p>
            </div>
            <div class="checkout">
                <p>Do You Have An Account? If So, Check Out <a href="{{ url('signin') }}">Here</a></p>
                <p>If Not, Continue To Check Out As Guest</p>

                <h6>SHIPPING ADDRESS</h6>

                <form action="">
                    <input type="text" class="form-control mb-2 w-100" placeholder="First Name" name="first_name">
                    <input type="text" class="form-control mb-2 w-100" placeholder="Last Name" name="last_name">
                    <input type="text" class="form-control mb-2 w-100" placeholder="Street Address 1" name="name">
                    <input type="text" class="form-control mb-2 w-100" placeholder="Street Address 2" name="name">
                    <input type="text" class="form-control mb-2 w-100" placeholder="Post Code" name="name">
                    <input type="text" class="form-control mb-2 w-100" placeholder="State/Region" name="name">
                    <input type="text" class="form-control mb-2 w-100" placeholder="Country" name="name">
                    <textarea class="form-control mb-2 w-100" name="" id="" cols="30" rows="10" placeholder="ADDITIONAL NOTES"></textarea>
                    <button class="btn btn-success">Checkout</button>
                </form>
            </div>
        </div>
    </div>
@endsection
