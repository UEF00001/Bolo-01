@extends('layouts.app')
@section('content')
    <div class="m-0 p-0 row w-100">
        <div class="col-md-2" id="side-section">
            @include('includes.recent-adds')
        </div>
        <div class="mx-auto">
            <div class="vinyl-record row mt-5">
                <div class="d-flex flex-column mr-2 vinyl-img">
                    <img src="{{ asset('Assets/Images/R-17152054-1611868791-8576.jpeg.png') }}" alt="">
                    <span class="text-center h6">When She Calls Club Mix She’s The Only One Damsel (Remix)</span>
                </div>
                <div class="d-flex flex-column vinyl-text">
                    <div class="vinyl-details mb-3 d-flex flex-column">
                        <span>When She Calls 12”</span>
                        <span>Keith Snipe</span>
                        <span>Not On Label, U.S.A. 1993</span>
                        <span>Vg+/Generic</span>
                        <span>€89.00</span>
                    </div>
                    <p>In a much nicer neighbourhood than mine, I often see a woman walking two Puli dogs, the ones that
                        resemble rag mops. The particular way they bounce gives one the sense that they each weigh a lot but
                        do not touch the ground. Their eyes and legs are not visible. Another woman in the same
                        neighbourhood walks a large pig. Children are always running towards it as if it were petting zoo
                        entertainment, which is to be expected. This woman and the one with the Puli pair are visibly
                        impatient, though, irritated by all the attention their animals get. I imagine them, individually,
                        at home, marvelling at the strange qualities that make up these creatures, resentful that a price
                        for owning this opportunity is to take them outside all the time. What non-walking things are being
                        hidden away here, I wonder, these odd pets acting as inadvertent commercials.</p>
                    <div class="actions d-flex flex-column text-center mx-auto">
                        <a href="" class="btn btn-secondary">Add To Cart</a>
                        <a href="" class="btn btn-secondary my-2">Terms & Conditions</a>
                    </div>
                </div>
            </div>
            <div class="recent mt-5">
                @include('includes.related-records')
            </div>
        </div>
    </div>
@endsection
