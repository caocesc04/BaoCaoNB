<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Danh Mục Kỳ Báo Cáo</title>

    <link href=" {{ asset ('inspinia/css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset ('inspinia/font-awesome/css/font-awesome.css ') }} " rel="stylesheet">
    <link href="{{ asset ('inspinia/css/plugins/iCheck/custom.css ') }} " rel="stylesheet">
    <link href="{{ asset ('inspinia/css/plugins/steps/jquery.steps.css ') }} " rel="stylesheet">
    <link href="{{ asset ('inspinia/css/animate.css ') }} " rel="stylesheet">
    <link href="{{ asset ('inspinia/css/style.css ') }} " rel="stylesheet">
    <link href="{{ asset ('inspinia/css/plugins/jQueryUI/jquery-ui-1.10.4.custom.min.css ') }} " rel="stylesheet">
    <link href="{{ asset ('inspinia/css/plugins/jqGrid/ui.jqgrid.css ') }} " rel="stylesheet">
    <link href="{{ asset ('inspinia/css/plugins/datapicker/datepicker3.css ') }} " rel="stylesheet">
    <link href="{{ asset ('inspinia/css/plugins/daterangepicker/daterangepicker-bs3.css ') }} " rel="stylesheet">
    <meta name="_token" content="{{ csrf_token() }}">
</head>

<body  >

    <div id="wrapper">
        @include('layouts.DMKy_Bao_Cao.admin_siderbar')

        <div id="page-wrapper" class="gray-bg">
            @include('layouts.DMKy_Bao_Cao.admin_header')
            @yield('content')
            @include('layouts.DMKy_Bao_Cao.admin_footer')
        </div> 
    </div>


    <!-- Mainly scripts -->
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

   <script src="inspinia/js/plugins/datapicker/bootstrap-datepicker.js"></script>
    <script src="inspinia/js/plugins/daterangepicker/daterangepicker.js"></script>


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
            $('#thoigianbatdau').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                format:"dd-mm-yyyy",
                setDate: new Date(),
            }).datepicker("setDate", new Date());
            $('#thoigianketthuc').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                format:"dd-mm-yyyy",
                setDate: new Date(),
            }).datepicker("setDate", new Date());
            $('#thoigianbd').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                format:"dd-mm-yyyy",
                setDate: new Date(),
            }).datepicker("setDate", new Date());
            $('#thoigiankt').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                format:"dd-mm-yyyy",
                setDate: new Date(),
            }).datepicker("setDate", new Date());

       });
    </script>
</html>