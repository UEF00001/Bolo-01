@extends('layouts.app')
@section('top-title','Heaven’s Gate Records')

@section('content')
    <div class="m-0 p-0 row w-100">
        <div class="col-md-2" id="side-section">
            @include('includes.recent-adds')
        </div>
        <div class="genre-container">
            <div class="genre row">
                <div class="col-md-4 genre-items col-sm-6 d-flex flex-column">
                    <img class="mb-3" src="{{ asset('Assets/Images/R-7696672-1447303028-4579.jpeg.png') }}" alt="">
                    <span class="vinyl-name">Touche-Moi 12” Not 2 Bad Feat.</span>
                    <span class="author">Camile</span>
                </div>
                <div class="col-md-4 genre-items col-sm-6 d-flex flex-column">
                    <img class="mb-3" src="{{ asset('Assets/Images/R-2406404-1366293407-8559.jpeg.png') }}" alt="">
                    <span class="vinyl-name">When She Calls 12”</span>
                    <span class="author">Keith Snipe</span>
                </div>
                <div class="col-md-4 genre-items col-sm-6 d-flex flex-column">
                    <img class="mb-3" src="{{ asset('Assets/Images/R-17152054-1611868791-8576.jpeg.png') }}" alt="">
                    <span class="vinyl-name">Make A Show 12”</span>
                    <span class="author">Daina Sutherland</span>
                </div>
                <div class="col-md-4 genre-items col-sm-6 d-flex flex-column">
                    <img class="mb-3" src="{{ asset('Assets/Images/R-54556-1566399194-5959.png') }}" alt="">
                    <span class="vinyl-name">Touche-Moi 12” Not 2 Bad Feat.</span>
                    <span class="author">Camile</span>
                </div>
                <div class="col-md-4 genre-items col-sm-6 d-flex flex-column">
                    <img class="mb-3" src="{{ asset('Assets/Images/R-3637867-1338368710-6956.png') }}" alt="">
                    <span class="vinyl-name">When She Calls 12”</span>
                    <span class="author">Keith Snipe</span>
                </div>
                <div class="col-md-4 genre-items col-sm-6 d-flex flex-column">
                    <img class="mb-3" src="{{ asset('Assets/Images/R-15524077-1603203295-7405.jpeg.png') }}" alt="">
                    <span class="vinyl-name">Make A Show 12”</span>
                    <span class="author">Daina Sutherland</span>
                </div>
            </div>
        </div>
    </div>
@endsection
