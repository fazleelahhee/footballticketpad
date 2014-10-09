@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')


<!-- Todo: need to use partial for this ticket info display -->
@include(Template::name('frontend.%s.sell.partials.banner'))

<!---------main content------------>
<div class="row">



    <div class="site-content">




        <div class="row">
            <ul class="step-process">

                <li>
                    <span class="number ">1</span>
                    <span class="selltitle">Your Tickets</span>
                </li>

                <li>
                    <span class="number">2</span>
                    <span class="selltitle">Your Tickets</span>
                </li>


                <li class="active">
                    <span class="number">3</span>
                    <span class="selltitle">Your Tickets</span>
                </li>

            </ul>
        </div>


        <h3 class="sell-divider row">Guarantee </h3>

        <span class="bluehighlight row">
            <span class="guarenteeicon"></span>
            We protect you so that the transactions are <span class="blackhighlight">100% secure</span>

        </span>

        <form name="ticket_guarantee" id="ticket-guarantee" action="" method="post">
        <div class="row selldivider credit-card-container">

            <p>Why do we need you credit card data?
                <span data-tooltip aria-haspopup="true" class="has-tip whatsisthis round" title="?????">?</span>
            </p>

        </div>




        <div class="row selldivider">

            <br/>
            <p>
                <strong>Are the tickets ready to be sent?</strong>
                <br/>
                If you already have the tickets, you will increase your chances of sellig them by checking the "yes i have them" this will make your listing stand out from the rest.

            </p>


            <input type="radio" class="inline-radio" name="ticket_ready" value="1" checked>
            <label class="inline-label">Yes, i have them (if selected you will have 3 working days to send them)</label>

            <br/><br/>

            <input type="radio" class="inline-radio" name="ticket_ready" value="0">
            <label class="inline-label">No, i dont have them</label>
            <br/><br/>

        </div>

        <div class="row selldivider">
<!--            <br/><br/>-->
<!--            <input type="checkbox" class="inline-radio" >-->
<!--            <label class="inline-label">I want to subscribe to football ticket pads newsletter</label>-->
            <br/><br/>
            <input type="checkbox" class="inline-radio" name="term_and_conditions" value="1">
            <label class="inline-label">I accept <a href="#" data-reveal-id="Terms">terms and condition</a> and <a href="#" data-reveal-id="Privacy">privacy policy</a>
            </label>
        </div>

        </form>
        <input type="button" class="btn bluebtn pull-right" value="PUBLISH">
        <a href="#"><span class="btn greybtn pull-right">BACK</span></a>
    </div>
</div>
<!---------main content------------>
<div id="Terms" class="reveal-modal" data-reveal>
    <a class="close-reveal-modal">&#215;</a>
    <h2>Terms &amp; Conditions</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

</div>
<div id="Privacy" class="reveal-modal" data-reveal>
    <a class="close-reveal-modal">&#215;</a>
    <h2>Privacy policy</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>
@stop

{{
Assets::setStyles(
[
'loading'         => 'css/ajax-loading.css'
], false, true);
}}

{{
    Assets::setScripts(
    [
        'jquery-form'            => 'js/jquery-form.min.js',
        'underscore'             => 'js/underscore.min.js'
    ], false, true);
}}

{{ Assets::jsStart() }}
@include(Template::name('frontend.%s.sell.partials.customer-card'))

<script type="text/javascript" charset="utf-8">
    (function ($) {
        var body = $('body');

        /* close modal */
        body.on('click','.close-reveal-modal', function (e) {
            e.preventDefault();
            var ElemId = $(this).closest('div.reveal-modal').attr('id');
            $('#'+ElemId).foundation('reveal', 'close');
            $('#'+ElemId).fadeOut('slow', function () {
                $('#'+ElemId).remove();
                $('.reveal-modal-bg').remove();
            });
        });

        body.on('click','.reveal-modal-bg', function (e) {
            e.preventDefault();
            var ElemId = body.find('div.reveal-modal').attr('id');
            $('#'+ElemId).foundation('reveal', 'close');
            $('#'+ElemId).fadeOut('slow', function () {
                $('#'+ElemId).remove();
                $('.reveal-modal-bg').remove();
            });
        })

    })(jQuery);
</script>

<script>
    (function ($) {
        $(document).ready(function () {
            $.getAllCards();
        });

        $(document).ready(function () {

            $('input[value=PUBLISH]').click(function (e) {
                var submit = true;
                e.preventDefault();
                if( $('.credit-card-container').find('input[type=radio]:checked').length < 1 ) {
                    submit = false;
                    alert('No credit card added!!!');
                }

                if(!$('input[name=term_and_conditions]').prop('checked')) {
                    submit = false;
                    alert("If you don't accept terms and conditions you can not sell ticket in here!!!");
                }

                if (submit) {
                    $('form[name=ticket_guarantee]').submit();
                }

            });
        });
    })(jQuery)
</script>

<script>
    (function ($) {
       // wait for the DOM to be loaded
        $(document).ready(function() {
            var ticketContainer =  $('body');
            // bind 'myForm' and provide a simple callback function
            $('#ticket-guarantee').ajaxForm({

                beforeSubmit: function(arr, $form, options) {
                    $(".ajax-loading-modal").remove();
                    ticketContainer.append('<div class="ajax-loading-modal"></div>');
                    ticketContainer.addClass("loading");
                },
                success: function() {
                    ticketContainer.removeClass('loading');
                    alert("Ticket has been added to selling list");
                    window.location = '/';
                }

            });
        });
    })(jQuery)
</script>

{{ Assets::jsEnd() }}