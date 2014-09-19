@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')

<!---------sidebar------------>
<section class="main">

    <div class="row">
        @include(Template::name('frontend.%s.sidebars.side1'))
    </div>
</section>
<!---------sidebar------------>


<section class="banner-home">


    <h1 class="page-header">{{ e($node->title) }}</h1>

    <img class="inner-banner" src="{{ Assets::Path('images/bannersize.jpg') }}" alt="test"/>
    
    <span class="ftp-line">
    	<span class="greenline"></span>
        <span class="yellowline"></span>
        <span class="pinkline"></span>
        <span class="blueline"></span>
    </span>


</section>


<!---------main content------------>
<div class="row">


    <div class="site-content">


        <div class="columns six nopadding">

            <h2 class="register-icon">Register</h2>

            <p><strong>Not a member yet?</strong> <br/>
                Join thousands of others who are already members of Football
                Ticket Pad. It's freeYou can buy and sell the best tickets all around
                the world. </p>


            <a href="/registration" class="btn greenbtn pull-right">REGISTER</a>

        </div>


        <div class="columns six login-container">

            <h2 class="login-icon">Login</h2>

            <form class="enquiryform" action="#">
                <div class="row">
                    <input type="text" name="username" id="username" placeholder="EMAIL"/>
                </div>

                <div class="row">
                    <input type="password" name="password" id="password" placeholder="PASSWORD"/>
                </div>
                <div class="row">
                    <a href="/forgot-password" class="pull-left forgottenpassword">I forgot my password</a>
                    <input type="button" class="btn pinkbtn pull-right login-btn" value="LOGIN">
                </div>
            </form>

        </div>


    </div>
</div>
<!---------main content------------>
@stop

{{
    Assets::setScripts(
    [
        'underscore'             => 'js/underscore.min.js'
    ], false, true);
}}

{{ Assets::jsStart() }}
<script type="text/javascript" charset="utf-8">
    (function ($) {
        $('.login-btn').click(function () {
            var template = _.template($('#warning-message-template').html());
            var data = {
                    login: {
                        username: $('#username').val(),
                        password: $('#password').val()
                    }
            }
            $.ajax({
                /*url: '{{$ticketApi}}customer/index/login', */
                url: '/customer/account/login',
                type: 'post',
                dataType: 'json',
                data: data,
                beforeSend: function () {

                },
                success: function (reponse) {
                    var data = reponse.data;
                    if(data.message && data.message == 'success') {
                        window.location.href = '/';
                    } else {
                        var html = template({message: 'Unknown error'});
                        $('.login-message').remove();
                        $('.login-container').find('h2').append(html);
                    }
                },
                error: function (reponse) {
                    var respObj = $.parseJSON(reponse.responseText);
                    if(respObj.error) {
                        var html = template({message: respObj.error});
                        $('.login-message').remove();
                        $('.login-container').find('h2').append(html);
                    }
                }
            });
            return false;
        });

        $('input').on('keyup', function(e) {
            if (e.which == 13) {
                e.preventDefault();
                $('.login-btn').click();
            }
        });

    })(jQuery);
</script>

<script type="text/x-template" id="warning-message-template">
    <div data-alert class="alert-box alert radius login-message">
        <%=message%>
        <a href="#" class="close">&times;</a>
    </div>
</script>
{{ Assets::jsEnd() }}