@extends('layouts.app')
@section('content')
    <div class="row mx-5">
        <div class="col-md-2">
            @include('includes.recent-adds')
        </div>
        <div class="col-md-10">
            <div class="blog row mt-5">
                <div class="d-flex flex-column col-md-3 mr-2">
                    <img src="{{ asset('Assets/Images/R-2406404-1366293407-8559.jpeg.png') }}" alt="">
                    <span class="text-center h6">Concert Version Club Mix</span>
                </div>
                <div class="d-flex flex-column col-md-9">
                    <div class="vinyl-details mb-3 d-flex flex-column">
                        <span>Bodywave 12”</span>
                        <span>Waves</span>
                        <span>Jazz Dance Records, U.S.A. 1986</span>
                        <span>vg+/EX</span>
                        <span>€139.00</span>
                    </div>
                    <p>In a much nicer neighbourhood than mine, I often see a woman walking two Puli dogs, the ones that resemble rag mops. The particular way they bounce gives one the sense that they each weigh a lot but do not touch the ground. Their eyes and legs are not visible. Another woman in the same neighbourhood walks a large pig. Children are always running towards it as if it were petting zoo entertainment, which is to be expected. This woman and the one with the Puli pair are visibly impatient, though, irritated by all the attention their animals get. I imagine them, individually, at home, marvelling at the strange qualities that make up these creatures, resentful that a price for owning this opportunity is to take them outside all the time. What non-walking things are being hidden away here, I wonder, these odd pets acting as inadvertent commercials.</p>
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
