<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Báo Cáo NB</title>

    <link href=" {{ asset ('inspinia/css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset ('inspinia/font-awesome/css/font-awesome.css ') }} " rel="stylesheet">
    <link href="{{ asset ('inspinia/css/plugins/iCheck/custom.css ') }} " rel="stylesheet">
    <link href="{{ asset ('inspinia/css/plugins/steps/jquery.steps.css ') }} " rel="stylesheet">
    <link href="{{ asset ('inspinia/css/animate.css ') }} " rel="stylesheet">
    <link href="{{ asset ('inspinia/css/style.css ') }} " rel="stylesheet">
    <link href="{{ asset ('inspinia/css/plugins/jQueryUI/jquery-ui-1.10.4.custom.min.css ') }} " rel="stylesheet">
    <link href="{{ asset ('inspinia/css/plugins/jqGrid/ui.jqgrid.css ') }} " rel="stylesheet">
    <link href="{{ asset ('inspinia/css/plugins/datapicker/datepicker3.css ') }} " rel="stylesheet">
    <meta name="_token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> 
                            <span>
                                <img alt="image" class="img-circle" src=" {{ asset('img/profile_small.jpg') }} " />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Quản lý báo cáo</strong>
                                 </span> <span class="text-muted text-xs block"> Admin <b class="caret"></b></span> </span> </a>
                                <!-- <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                    <li><a href="mailbox.html">Mailbox</a></li>
                                    <li class="divider"></li>
                                    <li><a href="login.html">Logout</a></li>
                                </ul>-->                   
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-navicon"></i> <span class="nav-label">Danh Mục</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li ><a href="/doanhnghiep" >Danh Mục Doanh Nghiệp</a></li>
                            <li><a href="/kybaocao">Danh Mục Kỳ Báo Cáo</a></li>
                            <li><a href="/danhmucnhomthuoctinh">Danh Mục Nhóm Thuộc Tính</a></li>
                            <li><a href="/danhmucphuluc01">Danh Mục Phụ Lục 01</a></li>
                            <li><a href="#">Danh Mục Phụ Lục 04</a></li> 
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Nhập báo cáo</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li ><a href="/home" style="color: #fff;">Báo Cáo Phụ Lục 01</a></li>
                            <li ><a href="/baocaophuluc04">Báo Cáo Phụ Lục 04</a></li> 
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
 
    

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                            <form role="search" class="navbar-form-custom" action="search_results.html">
                                <div class="form-group">
                                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                                </div>
                            </form>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <!-- Authentication Links -->
                        <h2>SAA</h2>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->username }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                </nav>
            </div>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
</body>
    <script src=" {{ asset('inspinia/js/jquery-3.1.1.min.js ') }}   "></script>
    <script src=" {{ asset('inspinia/js/bootstrap.min.js ') }} "></script>
    <script src=" {{ asset('inspinia/js/plugins/metisMenu/jquery.metisMenu.js ') }}  "></script>
    <script src=" {{ asset('inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js ') }} "></script>

    <!-- Custom and plugin javascript -->
    <script src=" {{ asset('inspinia/js/inspinia.js ') }} "></script>
    <script src=" {{ asset('inspinia/js/plugins/pace/pace.min.js ') }} "></script>

    <script src=" {{ asset('inspinia/js/plugins/jqGrid/i18n/grid.locale-en.js') }} "></script>
    <script src=" {{ asset('inspinia/js/plugins/jqGrid/jquery.jqGrid.min.js ') }} "></script>

    <!-- Steps -->
    <script src=" {{ asset('inspinia/js/plugins/steps/jquery.steps.min.js ') }} "></script>

    <!-- Jquery Validate -->
    <script src=" {{ asset('inspinia/js/plugins/validate/jquery.validate.min.js') }}  "></script>
    <script src=" {{ asset('inspinia/js/plugins/jquery-ui/jquery-ui.min.js ') }}  "></script>

   <script src=" {{ asset(' inspinia/js/plugins/datapicker/bootstrap-datepicker.js ') }}  "></script>


    <script>
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }
                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
            $('#datestart .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                format:"dd-mm-yyyy"
            });
            $('#dateend .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                format:"dd-mm-yyyy"
            });
       });
    </script>
</html>
