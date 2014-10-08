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
    <img class="inner-banner" src="{{ Assets::Path('images/account.jpg') }}" alt="test"/>
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
                            @for($i=1; $i<=$ticket->ticket->ticketInformation->number_of_ticket; $i++)
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
                        <select name="country_id" id="country">
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
                <input type="submit" value="SUBMIT ORDER" class="btn pinkbtn pull-right">
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
    Assets::setScripts(
    [
        'jquery-form'            => 'js/jquery-form.min.js',
        'underscore'             => 'js/underscore.min.js'
    ], false, true);
}}

{{ Assets::jsStart() }}
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
        });

        $('.ajax-login').click(function (e) {
            e.preventDefault();
            var template = _.template($('#login-form-template').html());
            $('.login-container').html(template());
        })

        //ajax submit

        // wait for the DOM to be loaded
        $(document).ready(function() {
            // bind 'myForm' and provide a simple callback function
            $('#ticket-checkout-form').ajaxForm(function() {
                alert("Ticket has been been purchased.");
                window.location = '/';
            });
        });

    })(jQuery)
</script>
<!-- template -->
<script type="text/x-template" id="login-form-template" charset="utf-8">
    <div id="ajax-login-container">
            <h2 class="login-icon">Login</h2>
            <form  action="#">
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
