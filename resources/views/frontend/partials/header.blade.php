<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
   <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
         {{ config('app.name', 'Laravel') }}
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <!-- Left Side Of Navbar -->
         <ul class="navbar-nav ms-auto">
            <li class="nav-item">
               <a class="nav-link" href="{{ route('frontend.home') }}">{{ __('Home') }}</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ route('frontend.about') }}">{{ __('About') }}</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ route('frontend.projects') }}">{{ __('Projects') }}</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ route('frontend.contact') }}">{{ __('Contact') }}</a>
            </li>
            <li class="nav-item"></li>
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
         </ul>

         <!-- Right Side Of Navbar -->
         <!-- <ul class="navbar-nav ms-auto">
            <li class="nav-item">
               <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
         </ul> -->
      </div>
   </div>
</nav>