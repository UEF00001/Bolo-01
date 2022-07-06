@extends('layouts.app')
@section('content')
    <div class="m-0 p-0 row w-100">
        <div class="col-md-2" id="side-section">
            @include('includes.recent-adds')
        </div>
        <div class="account-page">
            <div class="post">
                <span class="d-block mb-1 fw-bold">May 31, 2022: Earth Coincidence Control Office</span>
                <img src="{{ asset('Assets/Images/pete.png') }}" alt="">
                <p>The shop has a placeholder instagram and soundcloud account, but email is the primary avenue of contact.
                    Please just email me with questions, concerns, requests and wantlists.</p>
            </div>
            <div class="post">
                <span class="d-block mb-1 fw-bold">May 28, 2022</span>
                <img src="{{ asset('Assets/Images/FTivYCbVsAUxSmY.png') }}" alt="">
                <p>The shop has a placeholder instagram and soundcloud account, but email is the primary avenue of contact.
                    Please just email me with questions, concerns, requests and wantlists.</p>
            </div>
        </div>
    </div>
@endsection
