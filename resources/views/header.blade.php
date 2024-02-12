<nav class="navbar navbar-expand-lg px-3 container-fluid ">
        <a class="navbar-brand" href="@auth{{route('profile')}}@else {{route('homepage')}} @endauth">
            <img class="logo" src="./assets/agclogo.png" style="width:120px;">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          @auth
            <li class="nav-item">
              <a class="nav-link {{ (\Request::route()->getName() == 'bill') ? 'active' : '' }}" href="{{route('bill')}}">Bill</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Movies</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link {{ (\Request::route()->getName() == 'internetplans') ? 'active' : '' }}" href="{{route('internetplans')}}">Internet</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ (\Request::route()->getName() == 'internetpromos') ? 'active' : '' }}" href="{{route('internetpromos')}}">Promos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ (\Request::route()->getName() == 'contactus') ? 'active' : '' }}" href="{{route('contactus')}}">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ (\Request::route()->getName() == 'applynow') ? 'active' : '' }}" href="{{route('applynow')}}">Apply Now!</a>
            </li>
          @endauth
        </ul>
        <div class="userArea d-flex flex-column">
          @auth
            <span>{{auth()->user()->name}} {{auth()->user()->lastname}}</span>
            <span class="text-end"><a href="{{route('logout')}}">Logout</a></span>
          @else
            <a class="login text-center {{ (\Request::route()->getName() == 'login') ? 'active' : '' }}" href="{{route('login')}}"><i class="fa-solid fa-user"></i>Login</a>
          @endauth
        </div>
      </div>
  </nav>
