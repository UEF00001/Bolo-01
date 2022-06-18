@extends('layouts.app')
@section('content')
    <div class="row mx-5">
        <div class="col-md-2">
            @include('includes.recent-adds')
        </div>
        <div class="col-md-10">
            <h5>About</h5>
            <p>Bolo Records is a little online shop, newly opened, located online, shipping from northwestern Wisconsin. The stock is old music (80s-90s). The style runs ambient to tribal, folk to house. The hope is to present records (tapes? CDs?) that are “new” to most, but there will certainly be a good run of sought after items, too.</p>
            <p>I want to keep things simple. I wanna keep pricing inside of what I consider “reasonable.” Haha, what does that mean? I consider sales history, demand, rarity and whatever I imagine the zeitgeist to be.. In practice, I’ll do my best to offer the lowest price online per item.  </p>
            <h5>Contact</h5>
            <p>The shop has a placeholder instagram and soundcloud account, but email is the primary avenue of contact. Please just email me with questions, concerns, requests and wantlists. You can email me direct at: <a href="mailto:shop@hell-meadow.com">shop@hell-meadow.com</a> or fill out the below contact form:
            </p>
            <form action="" method="post">
                <div class="">
                    <input type="text" class="form-control mb-2" placeholder="Name" name="name">
                    <input type="text" class="form-control mb-2" placeholder="Email" name="email">
                    <input type="text" class="form-control mb-2" placeholder="Confirm Email" name="c_email">
                    <textarea class="form-control mb-2" name="" id="" cols="30" rows="10" placeholder="Write you message"></textarea>
                <button type="submit" class="btn btn-secondary mb-4">Submit</button>
                </div>
            </form>
            <h5>Shipping</h5>
            <p>Registered USPS is the preferred shipping carrier. All items are sent registered and within 2-3 business days. Please add any specific details in your order form. Contact me if you need an electronic receipt for EU customs or anything similar.
            </p>
            <p>Domestic Shipping < 500g €4</p>
            <p>International Shipping < 500g €16</p>
            <p>I am happy to combine shipping.</p>
        </div>
    </div>
@endsection
