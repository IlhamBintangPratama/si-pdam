<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('SBAdmin')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('SBAdmin')}}/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
    .bg-login {
        background: url("{{asset('SBAdmin')}}/img/login.png");
        background-size: cover;
}
</style>
<body class="bg-login">

    <div class="container">

        <!-- Outer Row -->
        @if ($message = Session::get('error'))
        <div class="alert alert-error ml-4 mr-4" role="alert">
            {{$message}}
        </div>
        @endif
        <div class="row justify-content-center">
            
            <div class="col-xl-7 col-lg-8 col-md-9">
                {{-- <div  style="width: 70%; margin-left: 10em"> --}}
                <div class="card o-hidden border-0 shadow-lg" style="margin-top: 10em">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            {{-- <div class="col-lg-6 d-none d-lg-block"></div> --}}
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Sign In</h1>
                                    </div>
                                    <form class="user" action="session/login" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user @error('username')
                                                is-invalid @enderror" value="{{old('username')}}"
                                                id="username" name="username"
                                                placeholder="Masukan username anda ...">
                                        </div>
                                        @error('username')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user @error('password')
                                                is-invalid @enderror" name="password" value="{{old('password')}}"
                                                id="password" placeholder="Masukan password anda ...">
                                        </div>
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                        {{-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> --}}
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="#">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="#">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('SBAdmin')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('SBAdmin')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('SBAdmin')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('SBAdmin')}}/js/sb-admin-2.min.js"></script>

</body>

</html>