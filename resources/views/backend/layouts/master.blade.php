<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'Laravel') }}</title>

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.bunny.net">
   <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">



   <link
      rel="icon"
      href="{{asset('Backend/assets/img/kaiadmin/favicon.ico')}}"
      type="image/x-icon" />

   <!-- Fonts and icons -->
   <script src="{{asset('Backend/assets/js/plugin/webfont/webfont.min.js')}}"></script>
   <script>
      WebFont.load({
         google: {
            families: ["Public Sans:300,400,500,600,700"]
         },
         custom: {
            families: [
               "Font Awesome 5 Solid",
               "Font Awesome 5 Regular",
               "Font Awesome 5 Brands",
               "simple-line-icons",
            ],
            urls: ["{{asset('Backend/assets/css/fonts.min.css')}}"],
         },
         active: function() {
            sessionStorage.fonts = true;
         },
      });
   </script>

   <!-- CSS Files -->
   <link rel="stylesheet" href="{{asset('Backend/assets/css/plugins.min.css')}}" />
   <link rel="stylesheet" href="{{asset('Backend/assets/css/kaiadmin.min.css')}}" />

   <!-- Scripts -->
   @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
   <div class="wrapper">
      <!-- Sidebar -->

      @include('backend.partials.sidebar')
      <!-- End Sidebar -->

      <div class="main-panel">

         @include('backend.partials.header')

         <div class="container">
            <div class="page-inner">
               <div class="page-header">
                  <h4 class="page-title">Dashboard</h4>
                  <ul class="breadcrumbs">
                     <li class="nav-home">
                        <a href="#">
                           <i class="icon-home"></i>
                        </a>
                     </li>
                     <li class="separator">
                        <i class="icon-arrow-right"></i>
                     </li>
                     <li class="nav-item">
                        <a href="#">Pages</a>
                     </li>
                     <li class="separator">
                        <i class="icon-arrow-right"></i>
                     </li>
                     <li class="nav-item">
                        <a href="#">Starter Page</a>
                     </li>
                  </ul>
               </div>
               <div class="page-category">Inner page content goes here</div>
            </div>
         </div>

         @include('backend.partials.footer')
      </div>
   </div>


   <!--   Core JS Files   -->
   <script src="{{asset('Backend/assets/js/core/jquery-3.7.1.min.js')}}"></script>
   <!-- <script src="{{asset('Backend/assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('Backend/assets/js/core/bootstrap.min.js')}}"></script> -->

   <!-- jQuery Scrollbar -->
   <script src="{{asset('Backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

   <!-- Bootstrap Notify -->
   <!-- <script src="{{asset('Backend/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script> -->

   <!-- Kaiadmin JS -->
   <script src="{{asset('Backend/assets/js/kaiadmin.min.js')}}"></script>
</body>

</html>