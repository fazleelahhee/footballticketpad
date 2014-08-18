<!DOCTYPE html>
<html>
<head>
    <title>{{ $settings['site_title'] or "title" }}</title>
	<meta name="description" content="{{ isset($meta_description) ? $meta_description : ($settings['meta_description']) }}">
	<meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : ($settings['meta_keywords']) }}">
	<meta name="author" content="Fazle Elahee">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{
        Assets::setStyles(
        [
            'bootstrap'         => 'css/bootstrap.css',
            'style'             => 'css/style.css',
        ], false, true);
    }}

    {{ Assets::dumpStyles(Config::get('bondcms.assets_debug')) }}

    @yield('style')
</head>

<body>
@include(Template::name('frontend.%s._layout.menu'))
@yield('content')
@include(Template::name('frontend.%s._layout.footer'))

{{
    Assets::setScripts(
    [
        'jquery'         => 'js/jquery.2.0.3.js',
        'bootstrap'      => 'js/bootstrap.min.js',
        'holder'         => 'js/holder.js'
    ], false, true);
}}

{{ Assets::dumpScripts(Config::get('bondcms.assets_debug')) }}



@yield('script')
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
