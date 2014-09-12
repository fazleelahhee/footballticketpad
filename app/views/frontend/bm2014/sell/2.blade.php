@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')

<!-- Todo: need to use partial for this ticket info display -->
<section class="banner-home">


     <span class="page-header buy-detail">

         <span class="gamename"> <strong>Chelsea</strong> vs  <strong>Manchester United</strong> Tickets</span>
         <span class="gamedetail">Saturday, 16th August 2014, 3:00pm. Turf moor - Burnley FC, Burnley, UK</span>

     </span>


    <img class="inner-banner" src="{{ Assets::Path('images/account.jpg') }}" alt="test" />

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
        <div class="row">
            <ul class="step-process">

                <li>
                    <span class="number ">1</span>
                    <span class="selltitle">Your Tickets</span>
                </li>
                <li class="active">
                    <span class="number">2</span>
                    <span class="selltitle">Your Tickets</span>
                </li>
                <li>
                    <span class="number">3</span>
                    <span class="selltitle">Your Tickets</span>
                </li>

            </ul>
        </div>


        <h3 class="sell-divider row">Registered User</h3>


        <div class="row selldivider">




            <div class="label bluelabel inlinefields">Email</div>

            <div class="fields inlinefields">
                <input type="email" name="login[username]" id="login-username" value="" />
            </div>

            <div class="label bluelabel inlinefields">Password</div>

            <div class="fields inlinefields">
                <input type="password" name="login[password]" id="login-password" value="" />
            </div>

            <input type="button" class="btn bluebtn dynamic-login" value="LOGIN">



        </div>



        <h3 class="sell-divider row">Not Registered User</h3>

        <div class="row selldivider">
            <p>Now that we know the ticket details we need your personal information ass soon as your tickets are sold we will send you the delivery address a UPS courier will pick them up</p>
            {{Template::doShortCode('registration-form reload=self', true)}}
        </div>

    </div>
</div>
<!---------main content------------>

@stop

{{ Assets::jsStart() }}
<script type="text/javascript">
    (function ($) {
        var body = $('body');

        $(document).ready(function () {
            $('.dynamic-login').click(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '/customer/account/login',
                    data:{
                        login : {
                            username: $('#login-username').val(),
                            password: $('#login-password').val()
                        }},
                    type: 'POST',
                    dataType: 'json',
                    beforeSend: function () {
                        body.append('<div class="ajax-loading-modal"></div>');
                        body.addClass("loading");
                    },
                    success: function (response) {
                        body.removeClass("loading");
                        window.location.reload();
                    },
                    error: function (response) {
                        body.removeClass("loading");
                        console.log(response);
                    }
                });
            });
        });
    })(jQuery)
</script>
{{ Assets::jsEnd() }}


