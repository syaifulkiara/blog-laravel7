<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>TAHUBLOG | LARAVEL 6</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('public/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/assets/modules/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/assets/modules/select2/dist/css/select2.min.css')}}">
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('public/assets/modules/summernote/summernote-bs4.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('public/assets/css/components.css')}}">
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      <!-- Navbar -->
      @include('layouts.includes._navbar')

      <!-- Sidebar -->
      @include('layouts.includes._sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('sub-judul')</h1>
          </div>

          @yield('content')

          <div class="section-body">
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020
        </div>
        <div class="footer-right">

        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('public/assets/modules/jquery.min.js')}}"></script>
  <script src="{{asset('public/assets/modules/popper.js')}}"></script>
  <script src="{{asset('public/assets/modules/tooltip.js')}}"></script>
  <script src="{{asset('public/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('public/assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('public/assets/js/stisla.js')}}"></script>
  <script src="{{asset('public/assets/modules/select2/dist/js/select2.full.min.js')}}"></script>
  
  <!-- JS Libraies -->
  <script src="{{asset('public/assets/modules/sweetalert/sweetalert.min.js')}}"></script>
  <script src="{{asset('public/assets/modules/summernote/summernote-bs4.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('public/assets/js/page/modules-sweetalert.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('public/assets/js/scripts.js')}}"></script>
  <script src="{{asset('public/assets/js/custom.js')}}"></script>
</body>
</html>