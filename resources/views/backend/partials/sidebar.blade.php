 <div class="main-sidebar">
     <aside id="sidebar-wrapper">
         <div class="sidebar-brand">
             <a href="{{ route('admin.dashboard') }}">Online Health</a>
         </div>
         <div class="sidebar-brand sidebar-brand-sm">
             <a href="{{ route('admin.dashboard') }}">OHC</a>
         </div>
         <ul class="sidebar-menu">
             <li class="menu-header active text-white font-weight-bolder bg-primary">Dashboard</li>
             <li class="menu-header">Starter</li>
             <li class="nav-item dropdown">
                 <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                     <i class="fas fa-user">
                     </i> <span>User Management</span></a>
                 <ul class="dropdown-menu">
                     <li class="active">
                         <a class="nav-link" href="{{ route('user.admin') }}">Admin</a>
                     </li>
                     <li><a class="nav-link" href="{{route('doctors.index')}}">Doctors</a></li>
                     <li><a class="nav-link" href="{{ route('patiens.index')}}">Patient</a></li>
                 </ul>
             </li>
             <li class="">
                 <a class="nav-link" href=" {{ route('hospitals.index') }}">
                     <i class="fas fa-hospital"></i>
                     <span>Hospital</span>
                 </a>
             </li>
              <li class="">
                 <a class="nav-link" href="{{ route('categories.index')}}">
                     <i class="fas fa-calendar"></i>
                     <span>Doctor Category</span>
                 </a>
             </li>
             <li class="">
                 <a class="nav-link" href="{{route('farmacy.index')}}">
                     <i class="fas fa-tag"></i>
                     <span>Pharmacy</span>
                 </a>
             </li>
             <li class="">
                 <a class="nav-link" href="{{ route('booking.index')}}">
                     <i class="fas fa-calendar-check"></i>
                     <span>Appointment</span>
                 </a>
             </li>
             <li class="">
                 <a class="nav-link" href="{{ route('healthTip.index') }}">
                     <i class="far fa-sticky-note"></i>
                     <span>Health Tips</span>
                 </a>
             </li>
         </ul>
     </aside>
 </div>
