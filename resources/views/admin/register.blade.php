

<!DOCTYPE html>
 
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login 2</title>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="{{asset('login_css/css/style.css')}}">
 
          <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

 
  
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
 


 
</head>

<body >
          <!-- LOGIN MODULE -->
        <div class="login">
            <div class="wrap">
                <!-- TOGGLE -->
                <div id="toggle-wrap">
                    <div id="toggle-terms">
                        <div id="cross">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                 @if(Session::has('flash_message_error'))
                
                    <div class="alert alert-error alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{!! session('flash_message_error') !!}</strong>
                    </div>
                @endif
                  {{-- Hiển thị thông tin trạng thái tạo bài viết --}}
    @if (session('status'))
        <div class="alert alert-info">{{session('status')}}</div>
    @endif

                @if(Session::has('flash_message_success'))
                
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{!! session('flash_message_success') !!}</strong>
                    </div>
                @endif

                <!-- RECOVERY -->
                <div class="recovery">
                    <h2>Password Recovery</h2>
                    <p>Enter either the <strong>email address</strong> or <strong>username</strong> on the account and <strong>click Submit</strong></p>
                    <p>We'll email instructions on how to reset your password.</p>
                    <form class="recovery-form" action="" method="post">
                        <input type="text" class="input" id="user_recover" placeholder="Enter Email or Username Here">
                        <input type="submit" class="button" value="Submit">
                    </form>
                    <p class="mssg">An email has been sent to you with further instructions.</p>
                </div>

                <!-- SLIDER -->
                <div class="content">
                    <!-- LOGO -->
                    <div class="logo">
                        <a href="#"><img src="http://res.cloudinary.com/dpcloudinary/image/upload/v1506186248/logo.png" alt=""></a>
                    </div>
                    <!-- SLIDESHOW -->
                    <div id="slideshow">
                        <div class="one">
                            <h2><span>UGF</span></h2>
                            <p>Chào Mừng Bạn Tới UGF Ship</p>
                        </div>
                        <div class="two">
                            <h2><span>LEARNING</span></h2>
                            <p>Thousands of instant online classes/tutorials included</p>
                        </div>
                        <div class="three">
                            <h2><span>GROUPS</span></h2>
                            <p>Create your own groups and connect with others that share your interests</p>
                        </div>
                        <div class="four">
                            <h2><span>SHARING</span></h2>
                            <p>Share your works and knowledge with the community on the public showcase section</p>
                        </div>
                    </div>
                </div>
                <!-- LOGIN FORM -->
                <div class="user">
                    <!-- ACTIONS
                    <div class="actions">
                        <a class="help" href="#signup-tab-content">Sign Up</a><a class="faq" href="#login-tab-content">Login</a>
                    </div>
                    -->
                    <div class="form-wrap">
                        <!-- TABS -->
                        <div class="tabs">
                            <h2 class="login-tab"style="margin-bottom: 20px;"><a class="log-in active" href="#login-tab-content"><span>Đăng Nhập<span></a></h2>
                             
                        </div>
                        <!-- TABS CONTENT -->
                        <div class="tabs-content">
                            <!-- TABS CONTENT LOGIN -->
                            <div id="login-tab-content" class="active">
                                <form class="login-form" method="POST" id="contact_form" action="{{url('/user-login')}}" >{{ csrf_field() }}
                                    <fieldset>
                                        <div class="  form-group">
                                            <label  style="color: #fff;">Email : </label> 
                                            <input type="email" class="input" id="user_login" autocomplete="off" name="email" placeholder="Email Của Bạn" style="text-align: center;" >
                                        </div>
                                        <div class="  form-group">
                                            <label  style="color: #fff;">Mật Khẩu : </label> 
                                            <input type="password" class="input"  name="password" id="user_pass" autocomplete="off" placeholder="Mật Khẩu" style="text-align: center;">
                                        </div>
                                        <input type="checkbox" class="checkbox" checked id="remember_me">
                                        <label for="remember_me"  style="color: #fff;">Remember me</label>

                                        <div>
                                            <a   href="{{ url('/dang-ky-tai-khoan ')}}"    class="lienket" style="float: left;color: black;">Đăng Ký</a>
                                            
                                            <input type="submit" class="button" value="Đăng Nhập" style="float: right;">
                                        </div>
                                    
                                    </fieldset>
                                </form>

                                
                            </div>
                            <!-- TABS CONTENT SIGNUP -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
 

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
<link href="{{asset('login_css/css/bootstrap.min.css')}}" rel="stylesheet">
  

    <script  src="{{asset('login_css/js/index.js')}}"></script>
 <script>
       $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
             
            email: {
                validators: {
                    notEmpty: {
                        message: ' Hãy cung cấp email của bạn'
                    },
                    emailAddress: {
                        message: 'Hãy cung cấp một địa chỉ email hợp lệ'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: ' Hãy cung cấp mật khẩu  của bạn'
                    },
                    passwordAddress: {
                        message: 'Hãy cung cấp một địa chỉ password hợp lệ'
                    }
                }
            },
             
 
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});


 </script>

      
</body>
 

</html>

