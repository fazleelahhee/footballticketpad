<!DOCTYPE html>
<html lang="en-us" id="extr-page">
<head>
    <meta charset="utf-8">
    <title> Bond CMS</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- #CSS Links -->
    <!-- Basic Styles -->

    {{ Assets::dumpStyles(Config::get('bondcms.assets_debug')) }}

    <!-- SmartAdmin RTL Support is under construction
         This RTL CSS will be released in version 1.5
    <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css"> -->

    <!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->


    <!-- #FAVICONS -->
    <link rel="shortcut icon" href="{{ Assets::Path('img/favicon/favicon.ico', true) }}" type="image/x-icon">
    <link rel="icon" href="{{ Assets::Path('img/favicon/favicon.ico', true) }}" type="image/x-icon">

    <!-- #GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <!-- #APP SCREEN / ICONS -->
    <!-- Specifying a Webpage Icon for Web Clip
         Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="{{ Assets::Path('img/splash/sptouch-icon-iphone.png', true) }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ Assets::Path('img/splash/touch-icon-ipad.png', true) }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ Assets::Path('img/splash/touch-icon-iphone-retina.png', true) }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ Assets::Path('img/splash/touch-icon-ipad-retina.png', true) }}">

    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Startup image for web apps -->
    <link rel="apple-touch-startup-image" href="{{ Assets::Path('img/splash/ipad-landscape.png', true) }}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" href="{{ Assets::Path('img/splash/ipad-portrait.png', true) }}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="{{ Assets::Path('img/splash/iphone.png', true) }}" media="screen and (max-device-width: 320px)">

</head>

<body class="animated fadeInDown">

<header id="header">

    <div id="logo-group">
        <span id="logo"> <img src="{{ Assets::Path('img/logo.png', true) }}" alt="SmartAdmin"> </span>
    </div>

    <span id="extr-page-header-space"> <span class="hidden-mobile">Need an account?</span> <a href="register.html" class="btn btn-danger">Create account</a> </span>

</header>

<div id="main" role="main">

    <!-- MAIN CONTENT -->
    <div id="content" class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">

                <div class="hero">



                    <img src="{{ Assets::Path('img/demo/client.png', true) }}" alt="" style="width:642px">

                </div>



            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                <div class="well no-padding">
                    {{ Form::open(array('class' => 'smart-form client-form', 'id' => 'login-form')) }}
                        <header>
                            Sign In
                        </header>

                        <fieldset>

                            @if ($errors->has('login'))
                            <section>
                                <div class="alert alert-danger">
                                    <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>{{ $errors->first('login', ':message') }}
                                </div>
                            </section>
                            @endif
                            <section>
                                <label class="label">E-mail</label>
                                <label class="input"> <i class="icon-append fa fa-user"></i>
                                    {{ Form::email('email', null,array('class' => 'form-control', 'placeholder'=>'Email', 'autofocus'=>'')) }}
                                    <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>
                            </section>

                            <section>
                                <label class="label">Password</label>
                                <label class="input"> <i class="icon-append fa fa-lock"></i>
                                    {{ Form::password('password', array('class' => 'form-control','placeholder'=>'Password')) }}
                                    <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
                                <div class="note">
                                    {{ HTML::link('/admin/forgot-password','Forgot password?', array('class' => '')) }}
                                </div>
                            </section>

                            <section>
                                <label class="checkbox">
                                    {{ Form::checkbox('rememberMe', 'rememberMe') }}
                                    <i></i>Stay signed in</label>
                            </section>
                        </fieldset>
                        <footer>
                            <button type="submit" class="btn btn-primary">
                                Sign in
                            </button>
                        </footer>
                    {{ Form::close() }}

                </div>



            </div>
        </div>
    </div>

</div>

<!--================================================== -->
{{     Assets::setScripts([
'bondcms'              => "js/bondcms.js" ], true) }}
{{ Assets::dumpScripts(Config::get('bondcms.assets_debug')) }}

<!--[if IE 8]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<script type="text/javascript">
    runAllForms();

    $(function() {
        // Validation
        $("#login-form").validate({
            // Rules for form validation
            rules : {
                email : {
                    required : true,
                    email : true
                },
                password : {
                    required : true,
                    minlength : 3,
                    maxlength : 20
                }
            },

            // Messages for form validation
            messages : {
                email : {
                    required : 'Please enter your email address',
                    email : 'Please enter a VALID email address'
                },
                password : {
                    required : 'Please enter your password'
                }
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });
    });
</script>

</body>
</html>