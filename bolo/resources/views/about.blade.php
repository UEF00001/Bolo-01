@extends('layouts.app')
@section('content')
    <div class="m-0 p-0 row w-100">
        <div class="col-md-2" id="side-section">
            @include('includes.recent-adds')
        </div>
        <div class="account-page">
            <div id="about">
                <h4 class="pb-2 standard-font">About</h4>
                <p>Bolo Records is a little online shop, newly opened, located online, shipping from northwestern Wisconsin.
                    The
                    stock is old music (80s-90s). The style runs ambient to tribal, folk to house. The hope is to present
                    records (tapes? CDs?) that are “new” to most, but there will certainly be a good run of sought after
                    items,
                    too.</p>
                <p>I want to keep things simple. I wanna keep pricing inside of what I consider “reasonable.” Haha, what
                    does
                    that mean? I consider sales history, demand, rarity and whatever I imagine the zeitgeist to be.. In
                    practice, I’ll do my best to offer the lowest price online per item. </p>
            </div>
            <div id="contact">
                <h4 class="pb-2 standard-font">Contact</h4>
                <p>The shop has a placeholder instagram and soundcloud account, but email is the primary avenue of contact.
                    Please just email me with questions, concerns, requests and wantlists. You can email me direct at: <a
                        href="mailto:shop@hell-meadow.com">shop@hell-meadow.com</a> or fill out the below contact form:
                </p>
                <form action="" method="post">
                    <div class="">
                        <input type="text" class="form-control mb-2" placeholder="Name" name="name">
                        <input type="text" class="form-control mb-2" placeholder="Email" name="email">
                        <input type="text" class="form-control mb-2" placeholder="Confirm Email" name="c_email">
                        <textarea class="form-control mb-2" name="" id="" cols="30" rows="10"
                            placeholder="Write you message"></textarea>
                        <a type="submit" class="text-dark text-decoration-none standard-font mb-4">Submit</a>
                    </div>
                </form>
            </div>

            <div id="shipping">
                <h4 class="pb-2 standard-font">Shipping</h4>
                <p>Registered USPS is the preferred shipping carrier. All items are sent registered and within 2-3 business
                    days. Please add any specific details in your order form. Contact me if you need an electronic receipt
                    for
                    EU customs or anything similar.
                </p>
                <p>Domestic Shipping < 500g €4</p>
                        <p>International Shipping < 500g €16</p>
                                <p>I am happy to combine shipping.</p>
            </div>
        </div>
    </div>
@endsection
@push('after-scripts')
    <script>
        $(document).on("scroll", onScroll);

        //smoothscroll
        $(".about-sub-links a").on("click", function(e) {
            e.preventDefault();

            $(".about-sub-links a").each(function() {
                $(this).removeClass("active");
            });
            $(this).addClass("active");

            var target = this.hash,
                $target = $(target);
            $("html, body")
                .stop()
                .animate({
                        scrollTop: $target.offset().top + 2,
                    },
                    10,
                    function() {
                        window.location.hash = target;
                        $(document).on("scroll", onScroll);
                    }
                );
        });

        function onScroll(event) {
            var scrollPos = $(document).scrollTop();
            $(".about-sub-links a").each(function() {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                console.log(
                    refElement.position().top,
                    refElement.height(),
                    scrollPos
                );
                if (
                    refElement.position().top <= scrollPos &&
                    refElement.position().top + refElement.height() > scrollPos
                ) {
                    currLink.addClass("active");
                } else {
                    currLink.removeClass("active");
                }
            });
        }
    </script>
@endpush
