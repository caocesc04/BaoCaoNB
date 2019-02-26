<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Kodinger">
        <title>Doanh Nghiệp</title>
        <link rel="stylesheet" type="text/css" href="{{ asset ('loginadmin/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset ('loginadmin/css/my-login.css') }}">
    </head>
    <body class="my-login-page">



        <section class="h-100">
            <div class="container h-100">
                <div class="row justify-content-md-center h-100">
                    <div class="card-wrapper">
                        <div class="brand">
                            <img src="{{ asset('loginadmin/img/logo.jpg') }}">
                        </div>
                        <div class="card fat">
                            <div class="card-body">
                                <h4 class="card-title">Đăng Nhập</h4>
                                <form method="POST" action="{{url('/')}}" >{{ csrf_field() }}
                                 
                                    <div class="form-group">
                                        <label for="email">Tài Khoản :</label>

                                        <input id="username" type="username" class="form-control" name="username" value="" required autofocus>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Mật Khẩu :
                                            <a href="forgot.html" class="float-right">
                                                Forgot Password?
                                            </a>
                                        </label>
                                        <input id="password" type="password" class="form-control" name="password" required data-eye>
                                    </div>

                                    <div>
                                        @if(Session::has('flash_message_error'))
                 
                                          
                                            <strong style="color: red;">{!! session('flash_message_error') !!}</strong>
                                        @endif

                                        @if(Session::has('flash_message_success'))
                                            <strong>{!! session('flash_message_success') !!}</strong>
                                        
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                   
                                    <div class="form-group no-margin" style="width: 100px;float: right;">
                                        <input type="submit" class="btn btn-primary btn-block" value="Đăng Nhập">
                                         
                                    </div>
                                    <div class="form-group no-margin" style="width: 100px;float: left;">
                                        <input type="submit" class="btn btn-primary btn-block" value="Đăng Ký">
                                         <a title="Đăng Nhập" class="ngl btn-floating btn-large waves-effect waves-light red" href="{{url('/login-register')}}"><i class="material-icons">input</i></a>
                                    </div>
                                    
                                </form>

                            </div>
                        </div>
                        <div class="footer">
                            Copyright &copy; <a href="http://vslvn.com.vn/">vslvn.com.vn</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="{{ asset('loginadmin/js/jquery.min.js') }}"></script>
        <script src="{{ asset('loginadmin/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('loginadmin/js/my-login.js') }}"></script>
    </body>
</html>