<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />
    <title>{{ isset($meta_title) ? $meta_title : 'BondCMS' }}</title>
    <meta name="description" content="{{ isset($meta_description) ? $meta_description : ($settings['meta_description']) }}">
    <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : ($settings['meta_keywords']) }}">
    <meta name="author" content="{{ isset($author) ? $author : '' }}">

    {{
        Assets::setStyles(
        [
            'foundation'         => 'css/foundation.min.css',
            'main'               => 'css/main.css',
            'app'                => 'css/app.css'
        ], false, true);
    }}
    <!-- Included CSS Files (Compressed) -->
    {{ Assets::dumpStyles(Config::get('bondcms.assets_debug')) }}

    @yield('style')
    <script src="/assets/frontend/bm2014/js/modernizr.foundation.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body class="{{ $body_class }}">

@include(Template::name('frontend.%s._layout.menu'))
@yield('content')
@include(Template::name('frontend.%s._layout.footer'))
<!-- ######################## Scripts ######################## -->


{{
    Assets::setScripts(
    [
        'jquery'          => 'js/jquery.2.0.3.js',
        'foundation'      => 'js/foundation.min.js',
        'app'             => 'js/app.js'
    ], false, true);
}}

{{ Assets::dumpScripts(Config::get('bondcms.assets_debug')) }}

@yield('script')
<script type="text/javascript">
    //<![CDATA[
    //    $('ul#menu-header').nav-bar();
    //]]>
</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', "{{ $settings['ga_code']  or 'ga_code' }}"]);
    _gaq.push(['_trackPageview']);
    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
</body>
</html>

