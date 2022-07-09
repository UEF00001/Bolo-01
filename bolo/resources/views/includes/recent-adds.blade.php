<div id="side-menu">
    <h6 class="standard-font">RECENT ADDS</h6>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link p-0" href="javascript:void(0)">Boogie</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-0" href="javascript:void(0)">Esoteric</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-0" href="javascript:void(0)">House</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-0" href="javascript:void(0)">Pop Music</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-0" href="javascript:void(0)">Tropical</a>
        </li>
        <br>
        <li class="nav-item">
            <a class="nav-link p-0 @if(url()->current() == url('about')) active @endif" href="{{ url('about') }}">Information</a>
        </li>
        <li class="nav-item about-sub-links">
            <a class="nav-link p-0" href="@if(url()->current() != url('about')) {{url('about')}}@endif#about">About</a>
        </li>
        <li class="nav-item about-sub-links">
            <a class="nav-link p-0" href="@if(url()->current() != url('about')) {{url('about')}}@endif#contact">Contact</a>
        </li>
        <li class="nav-item about-sub-links">
            <a class="nav-link p-0" href="@if(url()->current() != url('about')) {{url('about')}}@endif#shipping">Shipping</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-0 @if(url()->current() == url('account')) active @endif" href="{{ url('account') }}">Account</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-0 @if(url()->current() == url('blog')) active @endif" href="{{ url('blog') }}">Blog</a>
        </li>
    </ul>
</div>
