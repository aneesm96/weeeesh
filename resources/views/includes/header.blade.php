
<div id="app">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                  
      <a class="navbar-brand" href="{{route('home')}}">Weesh</a>
    
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    

                    {{ Form::open(['method'=>'GET','url'=>'user_profiles','class'=>'navbar-form navbar-left','role'=>'search'])  }}

                     <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" name="search" placeholder="Search...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>
      </div>
                  

                        {{ Form::close() }}

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li><a href="{{ url('/home') }}">@lang('Home')</a></li> -->

                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">@lang("Login")</a></li>
                            <li><a href="{{ route('register') }}">@lang("Register")</a></li>
                        @else
                                
                                <li><a href="{{ url('/friendships') }}">{{ __('My Friends') }}</a></li>

                            <li class="dropdown">
                                
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    <img src="{{ asset($user->profile->avatar) }}" width="30px"  height="30px" style="border-radius: 50%" >
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                      <a href="{{route('user.profile')}}">profile</a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>