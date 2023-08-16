<header>
    <div class="header-one">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="header-one-left">
                        <a href="#"><i class="fa-solid fa-droplet"></i> <span>BLOOD DOST</span></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-one-right">
                        <ul>

                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            @guest
                                @if (Route::has('login'))
                                    <li><a href="{{ route('login') }}" class="login"><i class="fa-solid fa-user"></i>
                                            Login/Register</a></li>
                                @endif
                            @else
                                <li>
                                    <a class="" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                </li>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-two">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Why Donate blood</a></li>
                <li><a href="#">Donor Details</a></li>
                <li><a href="#">Blood Banks</a></li>
                <li><a href="#">Feedback</a></li>
            </ul>
        </div>
    </div>
</header>
