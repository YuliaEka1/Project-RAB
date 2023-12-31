<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forgot Password</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css')}}/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('Admin/plugins/icheck-bootstrap')}}/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('Admin/dist/css')}}/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Forgot </b>Password</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Anda lupa kata sandi Anda? Di sini Anda dapat membuat kata sandi baru.</p>

      <form action="/recover-password" method="post">
      
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Meminta Password Baru</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
      <a href="/login" class="text-center">Login</a>
      </p>
      <p class="mb-0">
        <a href="/register" class="text-center">Daftar</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('Admin/plugins/jquery')}}/pagesjquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('Admin/plugins/bootstrap/js')}}/pagesbootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin/dist/js')}}/pagesadminlte.min.js"></script>
</body>
</html>
