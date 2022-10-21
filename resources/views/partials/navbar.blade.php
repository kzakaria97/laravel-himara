    <!-- ========== PRELOADER ========== -->
    <div class="loader loader3">
        <div class="loader-inner">
          <div class="spin">
            <span></span>
            <img src="images/logo.svg" alt="Hotel Himara" />
          </div>
        </div>
      </div>
      <!-- ========== MOBILE MENU ========== -->
      <nav id="mobile-menu"></nav>
        <!-- ========== TOP MENU ========== -->
            
        <div class="topbar">
          <div class="container">
            <div class="welcome-mssg">{{$topbar->name}}</div>
            <div class="top-right-menu">
              <ul class="top-menu">
                <li class="d-none d-md-inline">
                  <a href="tel:+18881234567">
                    <i class="fa fa-phone"></i>{{$topbar->phone}}
                  </a>
                </li>
                <li class="d-none d-md-inline">
                  <a href="mailto:contact@hotelhimara.com">
                    <i class="fa fa-envelope-o"></i>{{$topbar->email}}</a
                    >
                  </li>
                  <li class="language-menu">
                    <a href="#" class="active-language"
                    ><img src="images/icons/flags/gb.png" alt="Image" />English</a
                    >
                    <ul class="languages">
                      <li class="language">
                        <a href="#"
                        ><img
                        src="images/icons/flags/it.png"
                        alt="Image"
                        />Italiano</a
                        >
                      </li>
                      <li class="language">
                        <a href="#"
                        ><img
                        src="images/icons/flags/gr.png"
                        alt="Image"
                        />Ελληνικα</a
                        >
                      </li>
                      <li class="language">
                        <a href="#"
                        ><img
                        src="images/icons/flags/al.png"
                        alt="Image"
                        />Shqip</a
                        >
                      </li>
                      <li class="language">
                        <a href="#"
                        ><img
                        src="images/icons/flags/fr.png"
                        alt="Image"
                        />Français</a
                        >
                      </li>
                      <li class="language">
                        <a href="#"
                        ><img
                          src="images/icons/flags/es.png"
                          alt="Image"
                        />Español</a
                      >
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="/{{ $topbar->id}}/editTopBar">Edit</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- ========== HEADER ========== -->
        <header class="horizontal-header sticky-header" data-menutoggle="991">
          <div class="container">
            <!-- BRAND -->
            <div class="brand">
              <div class="logo">
                <a href="{{route('home')}}">
                  <img src="images/logo.svg" alt="Hotel Himara" />
                </a>
              </div>
            </div>
            <!-- MOBILE MENU BUTTON -->
            <div id="toggle-menu-button" class="toggle-menu-button">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </div>
            <!-- MAIN MENU -->
            <nav id="main-menu" class="main-menu">
              <ul class="menu">
                <li class="menu-item {{ request()->is('/') ? 'active' :  ''}} dropdown">
                  <a href="{{route('home')}}">{{$navbar[0]->element}}</a>
                </li>
                <li class="menu-item {{ request()->is('RoomList') ? 'active' :  ''}} dropdown">
                  <a href="{{route('roomList')}}">{{$navbar[1]->element}}</a>
                </li>
                <li class="menu-item {{ request()->is('Team') ? 'active' :  ''}} dropdown">
                  <a href="{{route('team')}}">{{$navbar[2]->element}}</a>
                </li>
                <li class="menu-item {{ request()->is('Gallery') ? 'active' :  ''}} dropdown">
                  <a href="{{route('gallerie')}}">{{$navbar[3]->element}}</a>
                </li>
                <li class="menu-item {{ request()->is('Blog') ? 'active' :  ''}} dropdown">
                  <a href="{{route('blog')}}">{{$navbar[4]->element}}</a>
                </li>
                <li class="menu-item {{ request()->is('Contact') ? 'active' :  ''}} dropdown">
                  <a href="{{route('contact')}}">{{$navbar[5]->element}}</a>
                </li>
                <li class="menu-item menu-btn dropdown">
                  @if (Route::has('login'))
                      @auth
                          <span class="btn">{{ Auth::user()->name }}</span>
                          <ul class="submenu">
                              <li class="menu-item">
                                <a href="style-guide.html">Profile</a>
                              </li>
      
                              <li class="menu-item">
                                <form method="POST" action="{{ route('logout') }}">
                                  @csrf
                                  <a style="cursor: pointer" class="btnlogout-nav" :href="route('logout')"
                                          onclick="event.preventDefault();
                                                      this.closest('form').submit();">
                                      {{ ('Log Out') }}
                                  </a>
                                </form>
                              </li>
                          </ul>
                      @else
                  <a href="{{ route('login') }}" class="btn">
                    <i class="fa fa-user"></i>
                    LOG IN</a>
                  @endauth
                  </div>
                  @endif
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </header>