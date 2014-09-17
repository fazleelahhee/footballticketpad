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
        @if (empty($customer))
        <h3 class="sell-divider row">Registered User</h3>
        <div class="row selldivider">
            <div class="label bluelabel inlinefields">Email</div>
            <div class="fields inlinefields">
                <input type="email" name="login[username]" id="login-username" value=""/>
            </div>
            <div class="label bluelabel inlinefields">Password</div>
            <div class="fields inlinefields">
                <input type="password" name="login[password]" id="login-password" value=""/>
            </div>
            <input type="button" class="btn bluebtn dynamic-login" value="LOGIN">
        </div>
        <h3 class="sell-divider row">Not Registered User</h3>
        <div class="row selldivider">
            <p>Now that we know the ticket details we need your personal information ass soon as your tickets are sold
                we will send you the delivery address a UPS courier will pick them up</p>
            {{Template::doShortCode('registration-form reload=self', true)}}
        </div>
        @else
        <h3 class="sell-divider row">Method Of Collection</h3>
        <p>Indicate the desired method you want to receive your payment, once you have sold your tickets.</p>
        <div class="row selldivider">
            <div class="label bluelabel inlinefields"> <input type="radio" name="payment_option" value="paypal"/>Paypal</div>
            <div class="fields inlinefields">
                <label>Email</label>
                <input type="text" name="paypal_email" id="paypal_email" value=""/>
            </div>
        </div>

        <div class="row selldivider">

            <div class="label bluelabel inlinefields">
                <input type="radio" name="payment_option" class="bank-option" value="bank"/>Bank</div>
            <div class="fields inlinefields bank-account" data-id="">
                <label>Account Holder</label>
                <input type="text" name="account_holder" id="account_holder" value=""/>
            </div>

            <div class="fields inlinefields">
                <label>IBAN (Contact your bank)</label>
                <input type="text" name="iban" id="iban" value=""/>
            </div>

            <div class="fields inlinefields">
                <label>BIC or Swift (Contact your bank)</label>
                <input type="text" name="bic_swift" id="bic-swift" value=""/>
            </div>
        </div>

        <input name="submit" type="submit" class="btn blubtn pull-right" value="CONTINUE">
        @endif
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
                    data: {
                        login: {
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

@if (!empty($customer))
<script type="text/javascript" charset="utf-8">
    (function ($) {
        var body = $('body');
        $('document').ready(function () {
            /*Loading Bank information */
            $.ajax({
                url: '/account/account-information/bank',
                dataType: 'json',
                type: 'get',
                beforeSend: function () {},
                success: function (response) {
                    if(response.data) {
                        var bank = response.data;
                        if(bank.account_holder) {
                            $('.bank-account').data('id', bank.id);
                            $('#account_holder').val(bank.account_holder);
                            $('#account_holder').data('account-holder',bank.account_holder);
                            $('#iban').val(bank.iban);
                            $('#iban').data('iban',bank.iban);
                            $('#bic-swift').val(bank.bic_swift);
                            $('#bic-swift').data('bic-swift',bank.bic_swift);

                            $('#paypal_email').val(bank.paypal_email);
                            $('#paypal_email').data('paypal_email',bank.paypal_email);

                            $('.bank-option').prop('checked', true);
                        } else {
                            $('.bank-account').data('id', '');
                            $('#account_holder').data('account-holder','');
                            $('#iban').data('iban','');
                            $('#bic-swift').data('bic-swift', '');
                            $('#paypal_email').data('paypal_email','');
                        }
                    }
                }
            }).done(function (response) {

            });

            $('input[type=submit]').click(function (e) {
                e.preventDefault();
                var is_edited = false;
                if ($('#account_holder').val() !== $('#account_holder').data('account-holder') ||
                    $('#iban').val() !== $('#iban').data('iban') ||
                    $('#bic-swift').val() !== $('#bic-swift').data('bic-swift') ||
                    $('#paypal_email').val() !== $('#paypal_email').data('paypal_email')
                    ) {
                        is_edited = true;
                }
                if(is_edited) {
                    $.ajax({
                        url: '/account/account-information/bank',
                        data: {
                            id: $('.bank-account').data('id'),
                            account_holder: $('#account_holder').val(),
                            iban: $('#iban').val(),
                            bic_swift: $('#bic-swift').val(),
                            paypal_email: $('#paypal_email').val()
                        },
                        dataType: 'json',
                        type: 'post',
                        success: function (response) {
                            var bank = response.data;
                            if(bank.account_holder) {

                            }
                        }
                    }).done(function ()
                    {});
                }
            });
        });
    })(jQuery);
</script>
@endif
{{ Assets::jsEnd() }}


