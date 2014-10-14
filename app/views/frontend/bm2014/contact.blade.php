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

    @if(isset($feature_image) && $feature_image != '')
    <img class="inner-banner" src="{{ $feature_image }}" alt="{{$node->title}}"/>
    @else
    <img class="inner-banner" src="{{ Assets::Path('images/default.jpg') }}" alt="{{$node->title}}"/>
    @endif
    
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


            {{ $node->content }}


            <ul class="contact-display">
                <li class="phone-icon"><a href="mailto:info@footballticketpad.com">info@footballticketpad.com</a></li>
                <li class="msg-icon">0800 300 6000</li>
            </ul>

        </div>


        <div class="columns six contact-form">

            <form class="enquiryform" action="{{route('dashboard.contact')}}" method="post">

                <div class="row">


                    <input type="text" placeholder="YOUR NAME" name="sender_name_surname" required/>

                </div>

                <div class="row">


                    <input type="email" placeholder="YOUR EMAIL" name="sender_email" required />

                </div>

                <div class="row">
                    <input type="text" placeholder="TEL OR MOBILE" name="sender_phone_number" required />

                </div>
                <div class="row">
                    <textarea placeholder="MESSAGE" name="message" required></textarea>
                </div>
                <div class="row">
                    <input type="submit" class="btn pinkbtn pull-right contact-submit" value="SUBMIT">
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
        'underscore'             => 'js/underscore.min.js',
        'jquery-validator'       => 'js/jquery-validator/jquery.validate.min.js',
        'jquery-form'            => 'js/jquery-form.min.js'

    ], false, true);
}}

{{ Assets::jsStart() }}
<script>
    $('.contact-submit').click(function (e) {
        e.preventDefault();
        var validator = $(".enquiryform").validate();
        if (validator.form()) {
            var form = $("form.enquiryform");
            var serialiseData = form.serialize();
            var action = form.attr('action');

            $.ajax({
                url: action,
                type: 'post',
                dataType: 'json',
                data: serialiseData,
                success: function (reponse) {
                    $('.contact-form').html('<p>Thank you very much for your message.</p>');
                },
                error: function (reponse) {

                }
            })
        }
    })

</script>

{{ Assets::jsEnd() }}