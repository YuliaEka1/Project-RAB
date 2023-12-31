
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('Admin/plugins')}}/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('Admin/plugins')}}/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('Admin/dist/css')}}/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{ url('dashboard') }}" class="h1"><b>Log </b>in</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silahkan Masukkan </p>

      <form action="{{ route('login') }}" method="post">
    @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
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
                Ingat Saya
              </label>
            </div>
          </div>
          <!-- /.col -->         
            <button type="submit" class="btn btn-primary btn-block">Sign In</button> 
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
      <a href="{{ url('forgot-password') }}">Lupa Password?</a>
      </p>
      <p class="mb-0">
      <p>Belum punya akun? <a href="/register" class="text-center">Daftar</a></p>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('Admin/plugins')}}/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('Admin/plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin/dist/js')}}/adminlte.min.js"></script>
</body>
</html>
