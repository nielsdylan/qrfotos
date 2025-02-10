<div class="vertical-menu">


    <!-- LOGO -->
    <div class="navbar-brand-box">
       <a href="index.html" class="logo logo-dark">
           <span class="logo-sm">
               <img src{{ asset('assets/images/logo-sm.svg') }}" alt="" height="26">
           </span>
           <span class="logo-lg">
               <img src{{ asset('assets/images/logo-sm.svg') }}" alt="" height="26"> <span class="logo-txt">Vuesy</span>
           </span>
       </a>

       <a href="index.html" class="logo logo-light">
           <span class="logo-sm">
               <img src{{ asset('assets/images/logo-sm.svg') }}" alt="" height="26">
           </span>
           <span class="logo-lg">
               <img src{{ asset('assets/images/logo-sm.svg') }}" alt="" height="26"> <span class="logo-txt">Vuesy</span>
           </span>
       </a>
   </div>

   <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
       <i class="fa fa-fw fa-bars"></i>
   </button>

   <div data-simplebar class="sidebar-menu-scroll">

       <!--- Sidemenu -->
       <div id="sidebar-menu">
           <!-- Left Menu Start -->
           <ul class="metismenu list-unstyled" id="side-menu">
               <li class="menu-title" data-key="t-menu">Menu</li>

               <li>
                   <a href="index.html">
                       <i class="bx bx-home-circle nav-icon"></i>
                       <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                   </a>
               </li>
               <li>
                   <a href="index.html">
                       <i class="bx bx-home-circle nav-icon"></i>
                       <span class="menu-item" data-key="t-dashboard">Home</span>
                   </a>
               </li>

               <li class="menu-title" data-key="t-applications">Applications</li>

               <li>
                   <a href="{{ route('galeria.nuevo') }}">
                       <i class="bx bx-calendar-alt nav-icon"></i>
                       <span class="menu-item" data-key="t-calendar">Nuevo recuerdo</span>
                   </a>
               </li>
               <li>
                <a href="{{ route('galeria.lista') }}">
                    <i class="bx bx-calendar-alt nav-icon"></i>
                    <span class="menu-item" data-key="t-calendar">Galeria</span>
                </a>
            </li>



           </ul>
       </div>
       <!-- Sidebar -->
   </div>
</div>
