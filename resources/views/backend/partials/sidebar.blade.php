<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
   <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
         <a href="#" class="logo">
            <img
               src="{{asset('Backend/assets/img/kaiadmin/logo_light.svg')}}"
               alt="navbar brand"
               class="navbar-brand"
               height="20" />
         </a>
         <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
               <i class="gg-menu-right"></i>
            </button>
            <button class="btn btn-toggle sidenav-toggler">
               <i class="gg-menu-left"></i>
            </button>
         </div>
         <button class="topbar-toggler more">
            <i class="gg-more-vertical-alt"></i>
         </button>
      </div>
      <!-- End Logo Header -->
   </div>
   <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
         <ul class="nav nav-secondary">

            <li class="nav-item {{--{{$page_slug == 'dashboard' ? ' active' : ''	}}--}} ">
               <a href="#">
                  <i class="icon-home"></i>
                  <p>{{__('Dashboard')}}</p>
               </a>
            </li>
            <!-- <li class="nav-item {{--{{$page_slug == 'admin' ? ' active' : ''	}}--}}">
               <a href="#">
                  <i class="icon-home"></i>
                  <p>{{__('Admin Management')}}</p>
               </a>
            </li> -->
            <li class="nav-item">
               <a href="#">
                  <i class="fas fa-project-diagram"></i>
                  <p>{{__('Project Management')}}</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#">
                  <i class="icon-layers"></i>
                  <p>{{__('Service Management')}}</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#">
                  <i class="fas fa-users-cog"></i>
                  <p>{{__('Testimonial Management')}}</p>
               </a>
            </li>


         </ul>
      </div>
   </div>
</div>