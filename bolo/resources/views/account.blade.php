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
                    <li class="nav-item tabletoggle" id="orders" data-id="orders-content">
                        <a class="nav-link" href="#">My Orders</a>
                    </li>
                    <li class="nav-item tabletoggle" id="shipping-address" data-id="shipping-address-content">
                        <a class="nav-link" href="#">My Shipping Address</a>
                    </li>
                    <li class="nav-item tabletoggle" id="mop" data-id="mop-details">
                        <a class="nav-link" href="#">Methods O`f Payment</a>
                    </li>
                    <li class="nav-item tabletoggle" id="bonus" data-id="bonus-content">
                        <a class="nav-link" href="#">Bonus Stuff</a>
                    </li>
                    <table class="m-3 table table-borderless standard-font d-none" id="orders-content">
                        <thead>
                            <th>Order#</th>
                            <th>Date</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pointer-cursor order-details">GMC0001</td>
                                <td>09/11/04</td>
                                <td>Complete</td>
                            </tr>
                            <tr>
                                <td class="pointer-cursor order-details">GMC0006</td>
                                <td>10/02/04</td>
                                <td>In Transit</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-none order-details-content p-4">
                        <table class="table table-borderless standard-font">
                            <thead>
                                <th>Release - Artist</th>
                                <th>Price</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>I Still Dream Of You - Dennis Plater</td>
                                    <td>&euro;139.00</td>
                                </tr>
                                <tr>
                                    <td>X-Rated 12 - Paul</td>
                                    <td>&euro;89.00</td>
                                </tr>
                                <br>
                                <tr>
                                    <td>Subtotal</td>
                                    <td>&euro;228.00</td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td>&euro;228.00</td>
                                </tr>
                                <tr>
                                    <td>Discount</td>
                                    <td>&euro;0.00</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>&euro;228.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="p-4">
                            <p>Your Shipping Address</p>
                            <p>Gibralto Szidon</p>
                            <p>18 Kolb Elstreet N.E</p>
                            <p>Cedar Rapids</p>
                            <p>Minnesote</p>
                            <p>54751</p>
                            <p>U.S.A</p>
                            <br>
                            <p>Payment Method</p>
                            <p>Paypal</p>
                            <br>
                            <p>Paypal Address</p>
                            <p>a@a.a</p>
                            <br>
                            <p>Tracking #</p>
                            <p>Psi234324324se</p>
                            <br>
                            <p>Status #</p>
                            <p>Delivered</p>
                        </div>
                    </div>
                    <div id="shipping-address-content" class="d-none p-4">
                        <textarea name="" id="" cols="30" rows="10" class="w-75"></textarea>
                        <p class="pointer-cursor">(Edit Address)</p>
                        <br>
                        <br>
                        <br>
                        <h3 class="standard-font">ADDITIONAL NOTES</h3>
                        <textarea name="" id="" cols="30" class="w-75" rows="10"
                            placeholder="Such as, if you need your order to be shipped at a later date, or info to help the package delivered on the back porch or something."></textarea>
                        <p class="pointer-cursor">(Edit)</p>
                    </div>
                    <div id="mop-details" class="p-4 d-none">
                        <p>Paypal Address</p>
                        <p>a@a.a</p>
                        <p class="pointer-cursor">(Edit Email)</p>
                        <br>
                        <p>Swish Number</p>
                        <p>063 070 813 4001</p>
                        <p class="pointer-cursor">(Edit Swish #)</p>
                    </div>
                    <div id="bonus-content" class="p-4 d-none">
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="#">(Sign Out)</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@push('after-scripts')
    <script>
        // $('#orders').click(function (e) { 
        //     e.preventDefault();
        //     if ($('#orders-content').hasClass('d-none')) {
        //         $(this).find('.nav-link').append('*')
        //         $('#orders-content').removeClass('d-none');
        //     }else{
        //         console.log($(this).find('.nav-link').text());
        //         $(this).find('.nav-link').text($(this).find('.nav-link').text().replace('*',''))
        //         $('#orders-content').addClass('d-none');
        //     }
        // });
        $('.tabletoggle').click(function(e) {
            e.preventDefault();
            var showID = $(this).data('id');
            var id = $(this).attr('id');
            $('.order-details-content').addClass('d-none');


            $('.tabletoggle').each(function (index, element) {
                $(`#${$(this).data('id')}`).not(`#${showID}`).addClass('d-none');        
                $(`#${$(this).attr('id')}`).find('.nav-link').text($(`#${$(this).attr('id')}`).find('.nav-link').text().replace('*', ''))
            });

            if ($(`#${showID}`).hasClass('d-none')) {
                $(`#${id}`).find('.nav-link').append('*')
                $(`#${showID}`).removeClass('d-none');
            } else {
                $(`#${id}`).find('.nav-link').text($(`#${id}`).find('.nav-link').text().replace('*', ''))
                $(`#${showID}`).addClass('d-none');
            }

        });
        $('.order-details').click(function(e) {
            e.preventDefault();

            $('.order-details').each(function (index, element) {
                $(this).text($(this).text().replace('*', ''))
            });

            if ($('.order-details-content').hasClass('d-none')) {
                $(this).append('*')
                $('.order-details-content').removeClass('d-none');
            } else {
                console.log($(this).text());
                $(this).text($(this).text().replace('*', ''))
                $('.order-details-content').addClass('d-none');
            }
        });
    </script>
@endpush
