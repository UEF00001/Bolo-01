<div id="side-menu">
    <h6>RECENT ADDS</h6>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link p-0" href="#">Boogie</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-0" href="#">Esoteric</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-0" href="#">House</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-0" href="#">Pop Music</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-0" href="#">Tropical</a>
        </li>
        <br>
        <li class="nav-item">
            <a class="nav-link p-0 @if(url()->current() == url('about')) active @endif" href="{{ url('about') }}">Information</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-0" href="{{ url('account') }}">Account</a>
        </li>
        <li class="nav-item">
            <a class="nav-link p-0 @if(url()->current() == url('blog')) active @endif" href="{{ url('blog') }}">Blog</a>
        </li>
    </ul>
</div>
