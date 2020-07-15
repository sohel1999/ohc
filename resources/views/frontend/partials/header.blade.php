 <header>
     <div class="header-area ">
         <div id="sticky-header" class="main-header-area">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-xl-3 col-lg-3">
                         <div class="logo-img">
                             <a href="{{ route('home') }}">
                                 <img src="{{ asset('frontend') }}/img/logo.png" alt="">
                             </a>
                         </div>
                     </div>
                     <div class="col-xl-9 col-lg-9">
                         <div class="menu_wrap d-none d-lg-block">
                             <div class="menu_wrap_inner d-flex align-items-center justify-content-end">
                                 <div class="main-menu">
                                     <nav>
                                         <ul id="navigation">
                                             <li><a href="{{ route('home') }}">home</a></li>
                                             <li><a href="about.html">About</a></li>
                                             <li><a href="about.html">Hospital</a></li>
                                             <li><a href="about.html">Pharmacy</a></li>
                                             <li><a href="#">Health Tips</a>
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
