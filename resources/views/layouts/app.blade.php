<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FS-Gudang | @yield("tittle")</title>


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="{{ asset('adminlte3/plugins/fontawesome-free/css/all.min.css') }}">

  <link rel="stylesheet" href="{{ asset('adminlte3/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  @include('layouts.navbar')
  @include('layouts.sidebar')
   @yield('content')


  <!-- Content Wrapper. Contains page content -->


  <footer class="main-footer">
      Copyright &copy; 2025 FS-Gudang
  </footer>


</div>
<!-- ./wrapper -->


<script src="{{ asset ('adminlte3/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset ('adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset ('adminlte3/dist/js/adminlte.min.js') }}"></script>

</body>
</html>
