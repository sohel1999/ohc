 <header>
     <div class="header-area ">
         <div id="sticky-header" class="main-header-area">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-xl-1 col-lg-1">
                         <div class="logo-img">
                             <a href="{{ route('home') }}" style="color: white; font-weight: 900 ; font-size: 29; letter-spacing: 5px;">
                                {{config('app.name')}}
                             </a>
                         </div>
                     </div>
                     <div class="col-xl-11 col-lg-11">
                         <div class="menu_wrap d-none d-lg-block">
                             <div class="menu_wrap_inner d-flex align-items-center justify-content-end">
                                 <div class="main-menu">
                                     <nav>
                                         <ul id="navigation">
                                             <li><a href="{{ route('home') }}">home</a></li>
                                             <li><a href="#">About</a></li>
                                             <li><a href="{{route('frontend.hospital')}}">Hospital</a></li>
                                             <li><a href="#">Pharmacy</a></li>
                                             <li><a href="{{route('frontend.healthTip')}}">Health Tips</a>
                                             </li>
                                             @auth
                                                 <a class="text-white mr-5"
                                                     href="{{ route('admin.logout') }}">Logout</a>
                                             @endauth
                                             @guest
                                                 <li>
                                                     <a class="popup-with-form" href="#registaiton">Register</a>
                                                 </li>
                                                 <li>
                                                     <a class="popup-with-form" href="#login">Login</a>
                                                 </li>
                                             @endguest
                                         </ul>
                                     </nav>
                                 </div>
                                 <div class="book_room">
                                     <div class="book_btn">
                                         <a class="popup-with-form" href="#booking">Book Appointment</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-12">
                         <div class="mobile_menu d-block d-lg-none"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
