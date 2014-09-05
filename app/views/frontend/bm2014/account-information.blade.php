@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')


@include(Template::name('frontend.%s._layout.account-tabs'))


<!---------main content------------>
<div class="accountarea">


<div class="site-content">


<!---------faz shortcode------------>

<div class="row">
    <h2>Account details</h2>
</div>


<!---------account details------------>


<div class="row">
<div id="personal-details" class="three columns acc-detail-block" data-id="">

    <h3>Personal details
        <img class="icon-acc" src="{{ Assets::Path('images/personaldetails.png') }}"/>
    </h3>


    <label>Name</label>
                 <span class="field first-name" data-first-name="">

                     Jonathan

                 </span>

    <label>Surname</label>
                 <span class="field last-name" data-last-name="">

                     Burrows

                 </span>

    <label>Email</label>
                 <span class="field email" data-email="">

                     am@bondedia.co.uk

                 </span>


    <label>Recieve newsletter</label>
                 <span class="field newsletters" data-newsletters="">

                     yes

                 </span>


    <label>mobile</label>
                 <span class="field mobile" data-mobile="">

                     077016615551

                 </span>


    <a class="pull-left clearboth personal-change-password">change your password</a>
    <a class="pull-left clearboth personal-modify">change information</a>


</div>


<div id="payment-method" class="three columns acc-detail-block" data-id="1">
    <h3>Payment method
        <img class="icon-acc" src="{{ Assets::Path('images/paymentmethod.png') }}"/>
    </h3>

    <label>Account holder</label>
                 <span class="field bank-account-holder" data-account-holder="BOND MEDIA">
                     BOND MEDIA
                 </span>
    <label>IBAN (contact bank)</label>
                 <span class="field bank-iban" data-iban="U7CO7SEVO7E7SC7">
                     U7CO7SEVO7E7SC7
                 </span>
    <label>BIC or SWIFT (contact bank)</label>
                 <span class="field bank-swift" data-swift="ch8secs8">
                     ch8secs8
                 </span>
    <a class="pull-left clearboth bank-account-modify">modify</a>
    <a class="pull-left clearboth bank-account-add">add another bank</a>
</div>











<div id="Billing-details" class="three columns acc-detail-block">
    <h3>Billing details
        <img class="icon-acc" src="{{ Assets::Path('images/billingdetails.png') }}"/>
    </h3>


    <label>VAT reg no</label>
                 <span class="field vat-id" data-vat-id="">

                     uwudwdhwhdu

                 </span>


    <label>Company name</label>
                 <span class="field company" data-company="">

                     VIP SPORTS EVENTS LTD

                 </span>

    <label>Address</label>
                 <span class="field street" data-street="">

                     7 yemen road

                 </span>


    <label>Postcode</label>
                 <span class="field postcode" data-postcode="">

                     e6 1eb

                 </span>


    <label>City</label>
                 <span class="field city" data-city="">

                     Wirral

                 </span>


<!--    <label>Country</label>-->
<!--                 <span class="field country" data-country="">-->
<!---->
<!--                     Mersyside-->
<!---->
<!--                 </span>-->


    <label>Country</label>
                 <span class="field country" data-country="">
                 </span>
    <a class="pull-left clearboth modify-billing">modify</a>


</div>


<div id="trust-seller" class="three columns acc-detail-block" data-id="">

    <h3>Trust Seller guarentee
        <img class="icon-acc" src="{{ Assets::Path('images/trust.png') }}"/>
    </h3>


    <label>Account holder</label>
                 <span class="field card-account-holder" data-account-holder="Bond media">
                     Bond media
                 </span>

    <label>card type</label>
                 <span class="field card-type" data-card-type="Mastercard">
                     Mastercard
                 </span>


    <label>Card number</label>
                 <span class="field card-number" data-card-number="XXX XXXX XXXX 0987">
                     XXX XXXX XXXX 0987
                 </span>

    <label>Card Exp</label>
                 <span class="field card-expire" data-card-expire="11/15">
                     11/15
                 </span>


    <a class="pull-left clearboth modify-card">Modify card</a>

</div>


</div>

<!---------account details------------>


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
        $('document').ready(function () {
            /*Loading Personal information */
            $.ajax({
                url: '/account/account-information/personal',
                dataType: 'json',
                type: 'get',
                beforeSend: function () {

                },
                success: function (response) {
                    if(response.data) {
                        var data = response.data;

                        if(data.firstname) {
                            $('.personal-details').data('id', data.id);

                            $('.first-name').data('first-name', data.firstname);
                            $('.first-name').html(data.firstname);

                            $('.last-name').data('last-name',data.lastname);
                            $('.last-name').html(data.lastname);

                            $('.newsletters').data('newsletters', data.subscribed);
                            data.subscribed === true? $('.newsletters').html('Yes'): $('.newsletters').html('No') ;
                            $('.email').data('email',data.email);
                            $('.email').html(data.email);

                            $('.mobile').data('mobile',data.phone);
                            $('.mobile').html(data.phone);

                        }
                    }
                }
            }).done(function () {

            });
        });


        /* Personal Information open event*/
        $('.personal-modify').click(function (e) {
            e.preventDefault();
            var template = _.template($('#personal-form-template').html());
            $('#personal-form-modal').remove();
            body.append(template({
                id: $('#personal-details').data('id'),
                person_name: $('.first-name').data('first-name'),
                person_surname: $('.last-name').data('last-name'),
                person_email: $('.email').data('email'),
                person_newsletters: $('.newsletters').data('newsletters'),
                person_mobile: $('.mobile').data('mobile')
            }));
            $('#personal-form-modal').foundation('reveal', 'open');
        });

        /* Password modal open event*/
        $('.personal-change-password').click(function (e) {
            e.preventDefault();
            var template = _.template($('#password-form-template').html());
            $('#password-form-modal').remove();
            body.append(template());

            $('#password-form-modal').foundation('reveal', 'open');
        });

        /* Personal information save event */
        body.on('click','.personal-password-save', function (e) {
            e.preventDefault();
            var parent = $(this).closest('div.reveal-modal');
            $.ajax({
                url: '/account/account-information/password',
                data: {
                    _password: $('#password').val(),
                    _confirm_password: $('#confirm_password').val(),
                },
                dataType: 'json',
                type: 'post',
                success: function (response) {
                    console.log(response);
                    var data = response.data;
                }

            }).done(function () {
                parent.find('.close-reveal-modal').trigger('click');
                window.location.href= '/account/account-information';
            });
        });

        /* Personal information save event */
        body.on('click','.personal-information-save', function (e) {
            e.preventDefault();
            var parent = $(this).closest('div.reveal-modal');
            $.ajax({
                url: '/account/account-information/personal',
                data: {
                    id: $('#customer-id').val(),
                    firstname: $('#person-name').val(),
                    lastname: $('#person-surname').val(),
                    phone: $('#person-mobile').val(),
                    subscribed : $('#person-newsletters').val(),
                    email: $('#person-email').val()
                },
                dataType: 'json',
                type: 'post',
                success: function (response) {
                    var data = response.data;
                    console.log(data);
                    if(data.firstname) {
                        $('.personal-details').data('id', data.id);

                        $('.first-name').data('first-name', data.firstname);
                        $('.first-name').html(data.firstname);

                        $('.last-name').data('last-name',data.lastname);
                        $('.last-name').html(data.lastname);

                        $('.newsletters').data('newsletters', data.subscribed);
                        data.subscribed === true? $('.newsletters').html('Yes'): $('.newsletters').html('No') ;
                        $('.email').data('email',data.email);
                        $('.email').html(data.email);

                        $('.mobile').data('mobile',data.phone);
                        $('.mobile').html(data.phone);

                    }
                }

            }).done(function () {
                parent.find('.close-reveal-modal').trigger('click');
            });
        });
    })(jQuery);
</script>

<script type="text/javascript" charset="utf-8">
    (function ($) {
        var body = $('body');
        $('document').ready(function () {
            /*Loading Bank information */
            $.ajax({
                url: '/account/account-information/bank',
                dataType: 'json',
                type: 'get',
                beforeSend: function () {

                },
                success: function (response) {
                    if(response.data) {
                        var bank = response.data;
                        if(bank.account_holder) {
                            $('.acc-detail-block').data('id', bank.id);
                            $('.bank-account-holder').data('account-holder', bank.account_holder);
                            $('.bank-account-holder').html(bank.account_holder);
                            $('.bank-iban').data('iban',bank.iban);
                            $('.bank-iban').html(bank.iban);
                            $('.bank-swift').data('swift', bank.bic_swift);
                            $('.bank-swift').html(bank.bic_swift);
                        }
                    }
                }
            }).done(function () {

            });
        });


        /* Bank Account open event*/
        $('.bank-account-modify').click(function (e) {
            e.preventDefault();
            var template = _.template($('#bank-account-form-template').html());
            $('#bank-account-form-modal').remove();
            body.append(template({
                id: $('.acc-detail-block').data('id'),
                account_holder: $('.bank-account-holder').data('account-holder'),
                iban: $('.bank-iban').data('iban'),
                swift: $('.bank-swift').data('swift')
            }));
            $('#bank-account-form-modal').foundation('reveal', 'open');
        });

        /* Bank account save event */
        body.on('click','.bank-account-save', function (e) {
            e.preventDefault();
            var parent = $(this).closest('div.reveal-modal');
            $.ajax({
                url: '/account/account-information/bank',
                data: {
                    id: $('#bank-customer-id').val(),
                    account_holder: $('#account-holder').val(),
                    iban: $('#bank-iban').val(),
                    bic_swift: $('#bank-swift').val()
                },
                dataType: 'json',
                type: 'post',
                success: function (response) {
                    var bank = response.data;
                    if(bank.account_holder) {
                        $('.acc-detail-block').data('id', bank.id);
                        $('.bank-account-holder').data('account-holder', bank.account_holder);
                        $('.bank-account-holder').html(bank.account_holder);
                        $('.bank-iban').data('iban',bank.iban);
                        $('.bank-iban').html(bank.iban);
                        $('.bank-swift').data('swift', bank.bic_swift);
                        $('.bank-swift').html(bank.bic_swift);
                    }
                }

            }).done(function () {
                parent.find('.close-reveal-modal').trigger('click');
            });
        });
    })(jQuery);
</script>

<script type="text/javascript" charset="utf-8">
    (function ($) {
        var body = $('body');

        $('document').ready(function () {
            /*Loading Card info */
            $.ajax({
                url: '/account/account-information/card',
                dataType: 'json',
                type: 'get',
                beforeSend: function () {

                },
                success: function (response) {
                    if(response.data) {
                        var bank = response.data;
                        if(bank.account_holder) {
                            $('.trust-seller').data('id', bank.id);
                            $('.card-account-holder').data('account-holder', bank.account_holder);
                            $('.card-account-holder').html(bank.account_holder);

                            $('.card-type').data('card-type',bank.card_type);
                            $('.card-type').html(bank.card_type);

                            $('.card-number').data('card-number', bank.card_number);
                            $('.card-number').html(bank.card_number);

                            $('.card-expire').data('card-expire', bank.expire_date);
                            $('.card-expire').html(bank.expire_date);
                        }
                    }
                }
            }).done(function () {

            });
        });

        /* Card Account open event*/
        $('.modify-card').click(function (e) {
            e.preventDefault();
            var template = _.template($('#bank-card-form-template').html());
            $('#bank-card-form-modal').remove();
            body.append(template({
                id: $('#trust-seller').data('id'),
                account_holder: $('.card-account-holder').data('account-holder'),
                cardType: $('.card-type').data('card-type'),
                cardNumber: $('.card-number').data('card-number'),
                expireDate: $('.card-expire').data('card-expire')
            }));
            $('#bank-card-form-modal').foundation('reveal', 'open');
        });

        /* Bank card save event */
        body.on('click','.bank-card-save', function (e) {
            e.preventDefault();
            var parent = $(this).closest('div.reveal-modal');
            $.ajax({
                url: '/account/account-information/card',
                data: {
                    id: $('#bank-customer-id').val(),
                    account_holder: $('#account-holder').val(),
                    card_number: $('#card-number').val(),
                    card_type: $('#card-type').val(),
                    expire_date: $('#expire-date').val()
                },
                dataType: 'json',
                type: 'post',
                success: function (response) {
                    var bank = response.data;
                    if(bank.account_holder) {
                        $('.trust-seller').data('id', bank.id);

                        $('.card-account-holder').data('account-holder', bank.account_holder);
                        $('.card-account-holder').html(bank.account_holder);

                        $('.card-type').data('card-type',bank.card_type);
                        $('.card-type').html(bank.card_type);

                        $('.card-number').data('card-number', bank.card_number);
                        $('.card-number').html(bank.card_number);

                        $('.card-expire').data('card-expire', bank.expire_date);
                        $('.card-expire').html(bank.expire_date);
                    }
                }

            }).done(function () {
                parent.find('.close-reveal-modal').trigger('click');
            });


        });
    })(jQuery);
</script>

<script type="text/x-template" id="bank-account-form-template" charset="utf-8">
    <div id="bank-account-form-modal" class="reveal-modal" data-reveal style="display:none">
        <h2>Bank Account</h2>
        <p>
            <label for="account-holder">Account Holder</label>
            <input name="account-holder" id="account-holder" value="<%=account_holder%>" type="text" />
        </p>
        <p>
            <label for="bank-iban">Bank IBAN</label>
            <input name="bank-iban" id="bank-iban" value="<%=iban%>" type="text" />
        </p>

        <p>
            <label for="account-holder">Bank Swift</label>
            <input name="bank-iban" id="bank-swift" value="<%=swift%>" type="text" />
        </p>

        <input name="bank-customer-id" id="bank-customer-id" value="<%=id%>" type="hidden" />

        <p>
            <a href="#" class="button expand bank-account-save">Save</a>
        </p>
        <a class="close-reveal-modal">&#215;</a>
    </div>
</script>

<script type="text/x-template" id="bank-card-form-template" charset="utf-8">
    <div id="bank-card-form-modal" class="reveal-modal" data-reveal style="display:none">
        <h2>Card Details</h2>
        <p>
            <label for="account-holder">Account Holder</label>
            <input name="account-holder" id="account-holder" value="<%=account_holder%>" type="text" />
        </p>
        <p>
            <label for="card-type">Card Type</label>
            <select name="cardType" id="card-type">
                <option <%=(cardType == 'Mastercard')?'selected':''%> value="Mastercard">Mastercard</option>
                <option <%=(cardType == 'Visa')?'selected':''%> value="Visa">Visa</option>
                <option <%=(cardType == 'AmeX')?'selected':''%> value="AmeX">AmeX</option>
            </select>
        </p>

        <p>
            <label for="card-number">Card Number</label>
            <input name="cardNumber" id="card-number" value="<%=cardNumber%>" type="text" />
        </p>

        <p>
            <label for="expire-date">Expire Date</label>
            <input name="expire-date" id="expire-date" value="<%=expireDate%>" type="text" />
        </p>

        <input name="bank-customer-id" id="bank-customer-id" value="<%=id%>" type="hidden" />

        <p>
            <a href="#" class="button expand bank-card-save">Save</a>
        </p>
        <a class="close-reveal-modal">&#215;</a>
    </div>
</script>
<script type="text/x-template" id="password-form-template" charset="utf-8">
    <div id="password-form-modal" class="reveal-modal" data-reveal style="display:none">
        <h2>Password Change</h2>
        <p>
            <label for="password">Password</label>
            <input name="password" id="password" value="" type="password" />
        </p>

        <p>
            <label for="confirm_password">Confirm Password</label>
            <input name="confirm_password" id="confirm_password" value="" type="password" />
        </p>

        <p>
            <a href="#" class="button expand personal-password-save">Save</a>
        </p>
        <a class="close-reveal-modal">&#215;</a>

    </div>
</script>
<script type="text/x-template" id="personal-form-template" charset="utf-8">
    <div id="personal-form-modal" class="reveal-modal" data-reveal style="display:none">
        <h2>Personal Details</h2>
        <p>
            <label for="person-name">Name</label>
            <input name="person-name" id="person-name" value="<%= person_name %>" type="text" />
        </p>
        <p>
            <label for="person-surname">Surname</label>
            <input name="person-surname" id="person-surname" value="<%=person_surname%>" type="text" />
        </p>

        <p>
            <label for="person-email">Email</label>
            <input name="person-email" id="person-email" value="<%=person_email%>" type="text" />
        </p>

        <p>
            <label for="person-mobile">Mobile</label>
            <input name="person-mobile" id="person-mobile" value="<%=person_mobile%>" type="text" />
        </p>

        <p>
            <label for="person-newsletters">Receive Newsletters</label>
            <select name="person-newsletters" id="person-newsletters" >
                <option value="1" <%= person_newsletters === true?'selected': '' %> > Yes </option>
                <option value="0" <%= person_newsletters !== true?'selected': '' %> > No </option>
            </select>

        </p>



        <input name="bank-customer-id" id="customer-id" value="<%=id%>" type="hidden" />

        <p>
            <a href="#" class="button expand personal-save personal-information-save">Save</a>
        </p>
        <a class="close-reveal-modal">&#215;</a>
    </div>
</script>

<script type="text/javascript" charset="utf-8">
    (function ($) {
        var body = $('body');
        var countries = {

            'US': 'United State of America',
            'BD': 'Bangladesh',
            'GB': 'United Kingdom'
        };
        $('document').ready(function () {
            /*Loading Card info */
            $.ajax({
                url: '/account/account-information/billing',
                dataType: 'json',
                type: 'get',
                beforeSend: function () {

                },
                success: function (response) {
                    if(response.data) {
                        var data = response.data;
                        if(data.vat_id) {

                            $('.vat-id').data('vat-id', data.vat_id);
                            $('.vat-id').html(data.vat_id);

                            $('.company').data('company',data.company);
                            $('.company').html(data.company?data.company : 'Not set');

                            $('.street').data('street', data.street);
                            $('.street').html(data.street);

                            $('.postcode').data('postcode', data.postcode);
                            $('.postcode').html(data.postcode);

                            $('.city').data('city', data.city);
                            $('.city').html(data.city);

                            $('.country').data('country', data.country_id);
                            $('.country').html(countries[data.country_id]);

                        }
                    }
                }
            }).done(function () {

            });
        });

        /* Billing Address modal open event*/
        $('.modify-billing').click(function (e) {
            e.preventDefault();
            var template = _.template($('#billing-form-template').html());
            $('#billing-form-modal').remove();
            body.append(template({
                vat_id: $('.vat-id').data('vat-id'),
                company: $('.company').data('company'),
                street: $('.street').data('street'),
                country_id: $('.country').data('country'),
                postcode: $('.postcode').data('postcode'),
                city: $('.city').data('city'),
                countries: countries
            }));
            $('#billing-form-modal').foundation('reveal', 'open');
        });

        /* Bank card save event */
        body.on('click','.billing-save', function (e) {
            e.preventDefault();
            var parent = $(this).closest('div.reveal-modal');
            $.ajax({
                url: '/account/account-information/billing',
                data: {
                    vat_id: $('#vat-id').val(),
                    company: $('#company').val(),
                    street: $('#street').val(),
                    country_id: $('#country').val(),
                    postcode: $('#postcode').val(),
                    city: $('#city').val()
                },
                dataType: 'json',
                type: 'post',
                success: function (response) {
                    if(response.data) {
                        var data = response.data;
                        if(data.vat_id) {

                            $('.vat-id').data('vat-id', data.vat_id);
                            $('.vat-id').html(data.vat_id);

                            $('.company').data('company',data.company);
                            $('.company').html(data.company?data.company : 'Not set');

                            $('.street').data('street', data.street);
                            $('.street').html(data.street);

                            $('.postcode').data('postcode', data.postcode);
                            $('.postcode').html(data.postcode);

                            $('.city').data('city', data.city);
                            $('.city').html(data.city);

                            $('.country').data('country', data.country_id);
                            $('.country').html(countries[data.country_id]);

                        }
                    }
                }

            }).done(function () {
                parent.find('.close-reveal-modal').trigger('click');
            });


        });
    })(jQuery);
</script>

<script type="text/x-template" id="billing-form-template" charset="utf-8">
    <div id="billing-form-modal" class="reveal-modal" data-reveal style="display:none">
        <h2>Billingh Address</h2>
        <p>
            <label for="vat-id">VAT reg no.</label>
            <input name="vat-id" id="vat-id" value="<%=vat_id%>" type="text" />
        </p>
        <p>
            <label for="company">Company Name</label>
            <input name="company" id="company" value="<%=company%>" type="text" />
        </p>

        <p>
            <label for="street">Address</label>
            <input name="street" id="street" value="<%=street%>" type="text" />
        </p>

        <p>
            <label for="postcode">Postcode</label>
            <input name="postcode" id="postcode" value="<%=postcode%>" type="text" />
        </p>

        <p>
            <label for="city">City</label>
            <input name="city" id="city" value="<%=city%>" type="text" />
        </p>
        <p>
            <label for="country">Country</label>
            <select name="country" id="country">
                <% _.each(countries, function (val, key) { %>
                    <option value="<%=key%>" <%= key==country_id? 'selected': ''%> > <%=val%></option>
                <% }) %>
            </select>
        </p>

        <p>
            <a href="#" class="button expand billing-save">Save</a>
        </p>
        <a class="close-reveal-modal">&#215;</a>
    </div>
</script>

{{ Assets::jsEnd() }}
