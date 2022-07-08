<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! ReCaptcha::htmlScriptTagJsApi() !!}
    <title>AdminLTE 3 | Log in (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="{{ asset('template_admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet"
        href="{{ asset('template_admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template_admin/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="template_admin/index2.html" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                @if($msg = Session::get('error'))
                    <div class="text-center mt-3">
                        <div class="alert bg-danger">
                            <p class="text-light">{{ $msg }}</p>
                        </div>
                    </div>
                @endif
                @if($errors->any())
                    <div class="text-center mt-3">
                        <div class="alert bg-danger">
                            <p class="text-light">{{ $errors->first() }}</p>
                        </div>
                    </div>
                @endif
                <p class="login-box-msg">Silahkan Login Terlebih Dahulu</p>

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        {!! htmlFormSnippet() !!}
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-2">Login</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('template_admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template_admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template_admin/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
