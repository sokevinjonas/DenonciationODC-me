<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / Accordion - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/admin/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/admin/img/apple-touch-icon.png ') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/admin/vendor/quill/quill.snow.css ') }}" rel="stylesheet">
  <link href="{{ asset('assets/admin/vendor/quill/quill.bubble.css ') }}" rel="stylesheet">
  <link href="{{ asset('assets/admin/vendor/remixicon/remixicon.css ') }}" rel="stylesheet">
  <link href="{{ asset('assets/admin/vendor/simple-datatables/style.css ') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">

  @yield('css')

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
    @include('layouts.admin.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
    @include('layouts.admin.sidebar')
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blank Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Blank</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    @yield('content')

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.admin.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/admin/vendor/apexcharts/apexcharts.min.js ') }}"></script>
  <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js ') }}"></script>
  <script src="{{ asset('assets/admin/vendor/chart.js/chart.umd.js ') }}"></script>
  <script src="{{ asset('assets/admin/vendor/echarts/echarts.min.js ') }}"></script>
  <script src="{{ asset('assets/admin/vendor/quill/quill.js ') }}"></script>
  <script src="{{ asset('assets/admin/vendor/simple-datatables/simple-datatables.js ') }}"></script>
  <script src="{{ asset('assets/admin/vendor/tinymce/tinymce.min.js ') }}"></script>
  <script src="{{ asset('assets/admin/vendor/php-email-form/validate.js ') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/admin/js/main.js ') }}"></script>

  @yield('js')

</body>

</html>
