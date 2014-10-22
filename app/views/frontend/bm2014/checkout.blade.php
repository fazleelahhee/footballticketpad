@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')
<form action="{{route('ticket.checkout.order', array('id'=>$productId))}}" method="post" id="ticket-checkout-form">
<section class="banner-home">
    <h1 class="page-header">
        {{ e($node->title) }}
    </h1>
    @if(isset($feature_image) && $feature_image != '')
    <img class="inner-banner" src="{{ $feature_image }}" alt="{{$node->title}}" />
    @else
    <img class="inner-banner" src="{{ Assets::Path('images/default.jpg') }}" alt="{{$node->title}}" />
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
        <div class="columns seven">
            <div class="checkoutarea">
                <!---------descriptoin------------>

                <h3 class="buy-divider row">Description of tickets</h3>
                <div class="row buydivider">
                    <div class="label pinklabel">Event</div>
                    <div class="fields columns seven pull-right">
                        <strong>{{$ticket->title}}</strong> <br><br>
                        {{date('l, d F Y, h:ia', strtotime($ticket->datetime))}}, {{$ticket->event_location}}
                    </div>
                </div>

                <div class="row buydivider">
                    <div class="label pinklabel">Ticket Type</div>
                    <div class="fields columns seven pull-right">
                        <strong>{{$ticket->ticketType['title']}}</strong>

                    </div>
                </div>


                <div class="row buydivider">
                    <div class="label pinklabel">Number of tickets</div>
                    <div class="fields columns seven pull-right">
                        <select name="number_of_ticket">
                            @for($i=1; $i<=$ticket->available_qty; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div>

                <div class="row buydivider">
                    <div class="label pinklabel">Shipping</div>
                    <div class="fields columns seven pull-right">
                        <strong>Delivery of tickets is guaranteed before the event</strong>

                    </div>
                </div>

                <!---------descriptoin------------>
            </div>
            <div class="checkoutarea">
                <!---------buyer details------------>
                <h3 class="buy-divider row">Buyer details</h3>
<!--                <label class="radio">-->
<!--                    <input type="radio" name="delivery_country" value="uk" checked>-->
<!--                    United Kingdom --->
<!--                    <span>&pound;0.00</span>-->
<!--                </label>-->
<!--                <hr>-->
<!--                <label class="radio">-->
<!--                    <input type="radio" autocomplete="off" name="delivery_country" value="others">-->
<!--                    Other countries-->
<!--                </label>-->

                <select class="countrieslist" name="other_country">
                    <option value="-1">Select Country</option>
                    <option value="uk">UK - Monday to Friday Special Delivery &pound;7</option>
                    <option value="uk1">UK - Saturday Guarantee (pre 1pm) &pound;12 </option>
                    <option value="uk2">UK - Hotel Delivery &pound;10 </option>
                    <option value="internationl">International Delivery &pound;50</option>
                </select>
                <hr>
                @if (!empty($customer))
                <span class="label-seperator">Personal details</span>
                <div class="registration-form">
                    <div class="columns six">
                        <label>
                            {{ $customer['firstname'] }}  {{$customer['lastname']}}
                        </label>
                    </div>

                    <div class="columns six">
                        <label>

                        </label>
                    </div>
                    <div style="clear: both">
                    </div>

                    @if(!isset($shipping['entity_id']))
                    <span class="label-seperator">Address</span>
                        <input type="hidden" value='shipping' name="new_shipping_address" >
                        <div class="columns six">
                            <label>
                                {{ Form::text('street', '', ['class'=>'input street', 'placeholder' => 'Address' ]) }}
                            </label>
                        </div>

                        <div class="columns six">
                            <label>
                                {{ Form::text('postcode', '', ['class'=>'input postcode', 'placeholder' => 'Post Code' ]) }}
                            </label>
                        </div>

                        <div class="columns six">
                            <label>
                                {{ Form::text('city', '', ['class'=>'input city', 'placeholder' => 'City' ]) }}
                            </label>
                        </div>

                        <div class="columns six">
                            <select name="country_id" id="country">
                                <option value="GB"> United Kingdom </option>
                            </select>
                        </div>

                        <div class="columns six">
                            <label>
                                {{ Form::select('country_code', ['0044' => 'GB(+44)', '0088' => 'BD(+88)'], '0044', ['class'=>'input country-code', 'placeholder' => 'Country Code' ] ) }}
                            </label>

                        </div>

                        <div class="columns six">
                            <label>
                                {{ Form::text('contact_no', '', ['class'=>'input contact-no', 'placeholder' => 'Mobile Number' ]) }}
                            </label>
                        </div>
                        <div style="clear: both">
                        </div>
                    @else
                        <span class="label-seperator">Address</span>
                        <div class="columns six">
                            <label>
                                {{ $shipping['street'] }} <br />
                                {{ $shipping['city'] }} <br />
                                {{ $shipping['postcode'] }} <br />
                                {{ $shipping['country_id'] }} <br />

                            </label>
                        </div>

                        <div class="columns six">
                            <label>

                            </label>
                        </div>
                        <div style="clear: both">
                        </div>


                    @endif
                </div>
                @else
                <div class="login-container">If you already registered please <a href="#" class="ajax-login">click here</a> to login.</div>

                <br />
                <span class="label-seperator">Personal details</span>
                <div class="registration-form">

                    <div class="columns six">
                        <label>
                            {{ Form::text('first_name', '', ['class'=>'input first-name', 'placeholder' => 'First Name' ]) }}
                        </label>
                    </div>

                    <div class="columns six">
                        <label>
                            {{ Form::text('last_name', '', ['class'=>'input last-name', 'placeholder' => 'Last Name' ]) }}
                        </label>
                    </div>

                    <span class="label-seperator">Email address  &amp; contact info</span>
                    <div class="columns six">
                        <label>
                            {{ Form::email('email', '', ['class'=>'input email', 'placeholder' => 'email' ]) }}
                        </label>
                    </div>

                    <div class="columns six">
                        <label>
                            {{ Form::email('email_confirmation', '', ['class'=>'input confirmEmail', 'placeholder' => 'Confirm Email' ]) }}
                        </label>
                    </div>


                    <div class="columns six">
                        <label>
                            {{ Form::select('country_code', ['0044' => 'GB(+44)', '0088' => 'BD(+88)'], '0044', ['class'=>'input country-code', 'placeholder' => 'Country Code' ] ) }}
                        </label>

                    </div>

                    <div class="columns six">
                        <label>
                            {{ Form::text('contact_no', '', ['class'=>'input contact-no', 'placeholder' => 'Mobile Number' ]) }}
                        </label>
                    </div>

                    <div class="columns six">
                        <label>
                            {{ Form::checkbox('newsletters', '1') }}
                            Subscribe to newsletter offering promotions and discount codes
                        </label>

                    </div>

                    <div class="columns six">

                    </div>



                    <span class="label-seperator">Security</span>

                    <div class="columns six">
                        <label>
                            <span class="mbtm"> Password</span>
                            {{ Form::password('password', '') }}
                        </label>

                    </div>

                    <div class="columns six">
                        <label>
                            <span class="mbtm">Confirm Password</span>
                            {{ Form::password('password_confirmation', '') }}
                        </label>
                    </div>

                    <span class="label-seperator">Address</span>

                    <div class="columns six">
                        <label>
                            {{ Form::text('street', '', ['class'=>'input street', 'placeholder' => 'Address' ]) }}
                        </label>
                    </div>

                    <div class="columns six">
                        <label>
                            {{ Form::text('postcode', '', ['class'=>'input postcode', 'placeholder' => 'Post Code' ]) }}
                        </label>
                    </div>

                    <div class="columns six">
                        <label>
                            {{ Form::text('city', '', ['class'=>'input city', 'placeholder' => 'City' ]) }}
                        </label>
                    </div>

                    <div class="columns six">
                        <select class="input" name="country_id" id="country">
                           <option value="GB"> United Kingdom </option>
                        </select>
                    </div>

                </div>
                @endif

                <!---------buyer details------------>
            </div>
            <div class="checkoutarea">
                <label>
                    <input type="checkbox" value="1" name="terms_n_conditions">
                    I agree to <a href="/terms-conditions" target="_blank">terms &amp; conditions </a>
                </label>
                <br/><br/>
                <input type="submit" value="SUBMIT ORDER" class="btn pinkbtn pull-right submit-order">
            </div>
        </div>
        <!---------main cart------------>
        <div class="columns four cart-summary cart-right">

            <h2>Order Summary</h2>

                         <span class="ftp-line">
                            <span class="greenline"></span>
                            <span class="yellowline"></span>
                            <span class="pinkline"></span>
                            <span class="blueline"></span>
                        </span>
            <input name="qty" class="qty" value="1" type="hidden" />
            <table>
                <tr>
                    <td><span class="ticket-qty">1</span> ticket(s) x &pound;<span class="single-ticket-price">{{number_format($ticket->ticket->ticketInformation->price, 2)}}</span></td>

                    <td class="rightAlign"> &pound;<span class="ticket-line-price">{{number_format($ticket->ticket->ticketInformation->price, 2)}}</span></td>
                </tr>
                <tr>
                    <td>Delivery fee</td>
                    <td class="rightAlign"> &pound;<span class="delivery-fee">0.00</span></td>
                </tr>

            </table>

            <hr>

            <span class="finalprice">FINAL PRICE*</span>
            <span class="pull-right bigprice"> &pound;<span class="ticket-total-price">{{number_format($ticket->ticket->ticketInformation->price, 2)}}</span></span>
            <span class="priceHelp">*Final price with handling fee already included</span>
            <hr>
            <p class="guarenteetxt">Guarentee text to be placed here. FTP to provide</p>
        </div>
        <!---------main cart------------>
    </div>
</div>
<!---------main content------------>
</form>
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
{{
Assets::setScripts(
[
'serializejson'          => 'js/jquery.serializejson.min.js',

'jquery-validator'       => 'js/jquery-validator/jquery.validate.min.js',
'validator-add-method'   => 'js/jquery-validator/additional-methods.min.js',
'password-strongify'     => 'js/password-strongify.js',

], false, true);
}}

{{ Assets::jsStart() }}
<script type="text/javascript" charset="utf-8">
    ;(function ($) {
        var loginURL = "{{route('customer.account.checkout.login')}}";
        var ticketContainer =  $('body');
        $(document).ready(function () {
            $('body').on('click', '.login-btn', function (e) {
                var ticketContainer =  $('body');
                e.preventDefault();

                var data = {
                    login: {
                        username: $('#username').val(),
                        password: $('#password').val()
                    }
                }
                $.ajax({

                    url: loginURL,
                    type: 'post',
                    dataType: 'json',
                    data: data,
                    beforeSend: function () {
                        $(".ajax-loading-modal").remove();
                        ticketContainer.append('<div class="ajax-loading-modal"></div>');
                        ticketContainer.addClass("loading");
                    },
                    success: function (reponse) {

                        var data = reponse.data;
                        if(data.message && data.message == 'success') {
                            window.location.href = '{{Request::url()}}';
                        } else {
                            ticketContainer.removeClass('loading');
                        }
                    },
                    error: function (reponse) {
                        var respObj = $.parseJSON(reponse.responseText);
                        ticketContainer.removeClass('loading');
                        if(respObj.error) {
                            var html = template({message: respObj.error});
                            alert(html);
                        }
                    }
                });
            });
        });

    })(jQuery);
</script>

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

<script type="text/javascript" charset="utf-8">
    (function ($) {
        var body = $('body');
        $.validator.setDefaults({
            success: "valid"
        });

        $(document).ready(function () {
            $('select[name=number_of_ticket]').change(function (e) {
                var qty = $(this).val();
                var ticketPrice = parseFloat($('.single-ticket-price').html());
                var ticketLinePrice = qty * ticketPrice;
                var deliveryFee = parseFloat($('.delivery-fee').html());
                $('.ticket-line-price').html(ticketLinePrice.toFixed(2));
                var totalAmount = ticketLinePrice+deliveryFee;
                $('.ticket-total-price').html(totalAmount.toFixed(2));
                $('.qty').val(qty);
            });

            $('select[name=other_country]').change(function (e) {
                //todo: set ups price from magento right now added static price
                var deliveryFee = 30.50;
                if($(this).val() != '-1') {
                    $('.delivery-fee').html(deliveryFee.toFixed(2));
                    var totalAmount = parseFloat($('.ticket-line-price').html())+deliveryFee;
                    $('.ticket-total-price').html(totalAmount.toFixed(2));
                }
            });

            $('input[name=delivery_country]').click(function (e) {
                var deliveryFee = 0.00;
                if($(this).val() == 'uk') {
                    $('.delivery-fee').html(deliveryFee.toFixed(2));
                    var totalAmount = parseFloat($('.ticket-line-price').html())+deliveryFee;
                    $('.ticket-total-price').html(totalAmount.toFixed(2));

                    $('select[name=other_country]').val('-1');
                }
            });
//
//            $('.submit-order').click(function () {
//                 $(".ajax-loading-modal").remove();
//                 body.append('<div class="ajax-loading-modal"></div>');
//                 body.addClass("loading");
//            });
        });

        $('.ajax-login').click(function (e) {
            e.preventDefault();
            var template = _.template($('#login-form-template').html());
            $('.login-container').html(template());
        })

        //ajax submit

        // wait for the DOM to be loaded
        var form = $('#ticket-checkout-form');
        $(document).ready(function() {
            var ticketContainer =  $('body');
            form.ajaxForm({

                beforeSubmit: function(arr, $form, options) {
                    $(".ajax-loading-modal").remove();

                    if(form.valid()) {
                        ticketContainer.append('<div class="ajax-loading-modal"></div>');
                        ticketContainer.addClass("loading");
                        return true;
                    } else {
                        return false;
                    }
                },
                success: function(response) {

                    console.log(response);
                    //alert("Ticket has been been purchased.");
                    //window.location = '/';
                    @if (empty($customer))
                    $.ajax({
                        url: '/customer/account/login',
                        data:{
                            login : {
                                username: $('input[name=email]').val(),
                                password: $('input[name=password]').val()
                            }},
                        type: 'POST',
                        dataType: 'json',
                        success: function (response) {
                            ticketContainer.removeClass('loading');
                            alert('ticket has been purchased!');
                            @if(isset($reload) && trim($reload) == 'self')
                                window.location.reload();
                            @else
                            window.location.href = '/account/listing';
                            @endif

                        },
                        error: function (response) {
                            body.removeClass("loading");
                            console.log(response);
                        }
                    });
                    @else
                        alert('ticket has been purchased!');
                        window.location.href = '/account/listing';
                    @endif
                },

                error: function (response) {
                    ticketContainer.removeClass('loading');
                    alert(response.responseText);
                }

            });

            $('input[name="password"]').passStrengthify({
                minimum: 8,
                labels: {
                    tooShort: '',
                    passwordStrength: ''
                }
            });


            form.validate({
                rules: {
                    first_name: {
                        required: true,
                        minlength: 2,
                        maxlength:60
                    },
                    last_name: {
                        required: true,
                        minlength: 2,
                        maxlength:60
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    email_confirmation: {
                        equalTo: '[name="email"]'
                    },
                    password: {
                        required: true
                    },
                    password_confirmation: {
                        equalTo: '[name="password"]'
                    },
                    terms_n_conditions: {
                        required: true
                    },
                    contact_no: {
                        digits: true,
                        minlength: 8,
                        maxlength: 20
                    }
                },
                messages: {
                    first_name: {
                        required: "Please enter First Name",
                        minlength: $.validator.format("Please, at least {0} characters are necessary")
                    },
                    last_name: {
                        required: "Please enter Last Name",
                        minlength: $.validator.format("Please, at least {0} characters are necessary")
                    },
                    email: {
                        required: "Please enter email address"
                    },
                    email_confirmation: {
                        equalTo: "Email does not match."
                    },
                    password: {
                        required: "Please enter password"
                    },
                    password_confirmation: {
                        equalTo: "Password does not match."
                    },
                    terms_n_conditions: {
                        required: "Please accept terms and conditions."
                    },
                    contact_no: {
                        digits: "Accept only digits"
                    }
                }
            });

        });

    })(jQuery)
</script>
<!-- template -->
<script type="text/x-template" id="login-form-template" charset="utf-8">
    <div id="ajax-login-container">
            <h2 class="login-icon">Login</h2>
            <form  action="{{route('customer.account.checkout.login')}}" method="post">
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
</script>


{{ Assets::jsEnd() }}
