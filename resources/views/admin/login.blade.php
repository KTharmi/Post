<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('admin/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ URL::asset('admin/css/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('admin/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Login Here</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      @include('include.message')
      <form action="{{route('admin.login')}}" method="post">
      {{csrf_field()}}
        <div class="input-group mb-3">
          <input type="email" class="form-control" name ="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ URL::asset('admin/js/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('admin/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('admin/js/adminlte.min.js')}}"></script>
<script src="{{ URL::asset('admin/js/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ URL::asset('admin/js/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('admin/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ URL::asset('admin/js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ URL::asset('admin/js/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ URL::asset('admin/js/jquery.vmap.min.js')}}"></script>
<script src="{{ URL::asset('admin/js/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ URL::asset('admin/js/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ URL::asset('admin/js/moment.min.js')}}"></script>
<script src="{{ URL::asset('admin/js/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ URL::asset('admin/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ URL::asset('admin/js/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ URL::asset('admin/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('admin/js/adminlte.js')}}"></script>
<script src="{{ URL::asset('admin/js/all.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('admin/js/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('admin/js/demo.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{ URL::asset('admin/js/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('admin/js/adminlte.min.js')}}"></script>
</body>
</html>
