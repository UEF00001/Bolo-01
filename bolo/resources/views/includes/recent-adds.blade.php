<div id="side-menu">
    <h6>RECENT ADDS</h6>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="#">Boogie</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Esoteric</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">House</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pop Music</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Tropical</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(url()->current() == url('about')) active @endif" href="{{ url('about') }}">Information</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('account') }}">Account</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(url()->current() == url('blog')) active @endif" href="{{ url('blog') }}">Blog</a>
        </li>
    </ul>
</div>
