@extends('layouts.app')
@section('content')
    <div class="row mx-5">
        <div class="col-md-2">
            @include('includes.recent-adds')
        </div>
        <div class="col-md-10">
            <div class="blog">
                <span class="d-block">Last Updated: 09/11/21</span>
                <div class="text-center">
                    <img src="{{ asset('Assets/Images/gettyimages-156478811-2048x2048.png') }}" alt="">
                </div>
                <div class="blog-content mt-2">
                    <p>
                        But by 1995, Robert Rubin, President Bill Clinton’s then-Treasury secretary, declared that a strong
                        dollar was in the national interest, and the currency soared during the dot-com boom. Maintaining
                        that strength remained the goal of the heads of the Treasury, which is in charge of currency policy,
                        although the greenback dropped through most of the first decade of the new century, bottoming in
                        2008 as the global financial crisis deepened.
                    </p>
                    <p>
                        But this year, the current Treasury chief, Janet Yellen, voiced opposition to weakening the dollar
                        to gain competitiveness. (She is also against other countries’ cheapening their currencies to do the
                        same.)
                    </p>
                </div>
            </div>
            <div class="blog row mt-5">
                <div class="d-flex flex-column col-md-3">
                    <img style="max-width:17rem" src="{{ asset('Assets/Images/R-2406404-1366293407-8559.jpeg.png') }}" alt="">
                    {{-- <span class="text-center">Raw</span>
                    <span class="text-center">Land</span> --}}
                </div>
                <div class="d-flex flex-column col-md-9">
                    <div class="vinyl-details mb-3 d-flex flex-column">
                        <span>Land 12”</span>
                        <span>Raw</span>
                        <span>Trollo, Greece 1984</span>
                        <span>VG+/VG</span>
                        <span>€119.00</span>
                    </div>
                    <p>
                        In a much nicer neighbourhood than mine, I often see a woman walking two Puli dogs, the ones that
                        resemble rag mops. The particular way they bounce gives one the sense that they each weigh a lot but
                        do not touch the ground. Their eyes and legs are not visible. Another woman in the same
                        neighbourhood walks a large pig. Children are always running towards it as if it were petting zoo
                        entertainment, which is to be expected. This woman and the one with the Puli pair are visibly
                        impatient, though, irritated by all the attention their animals get. I imagine them, individually,
                        at home, marvelling at the strange qualities that make up these creatures, resentful that a price
                        for owning this opportunity is to take them outside all the time. What non-walking things are being
                        hidden away here, I wonder, these odd pets acting as inadvertent commercials.
                    </p>
                    <div class="actions d-flex flex-column text-center mx-auto">
                        <a href="{{ url('raw-land') }}" class="btn btn-secondary">View Record</a>
                        <a href="" class="btn btn-secondary my-2">View Recent Adds</a>
                        <a href="" class="btn btn-secondary">View Boogie</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
