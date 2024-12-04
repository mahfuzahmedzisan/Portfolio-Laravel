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
               <a href="{{route('backend.dashboard')}}">
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
            <!-- <li class="nav-item">
               <a href="{{route('projects.index')}}">
                  <i class="fas fa-project-diagram"></i>
                  <p>{{__('Project Management')}}</p>
               </a>
            </li> -->
            <li class="nav-item">
               <a data-bs-toggle="collapse" href="#sidebarLayouts">
                  <i class="fas fa-th-list"></i>
                  <p>{{__('Product Management')}}</p>
                  <span class="caret"></span>
               </a>
               <div class="collapse" id="sidebarLayouts">
                  <ul class="nav nav-collapse">
                     <li>
                        <a href="{{route('projects.index')}}">
                           <span class="sub-item">{{__('Projets List')}}</span></span>
                        </a>
                     </li>
                     <li>
                        <a href="{{route('projects.create')}}">
                           <span class="sub-item">{{__('Add Project')}}</span>
                        </a>
                     </li>
                  </ul>
               </div>
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