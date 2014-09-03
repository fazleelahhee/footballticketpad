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
<div id="personal-details" class="three columns acc-detail-block">

    <h3>Personal details
        <img class="icon-acc" src="{{ Assets::Path('images/personaldetails.png') }}"/>
    </h3>


    <label>Name</label>
                 <span class="field">

                     Jonathan

                 </span>

    <label>Surname</label>
                 <span class="field">

                     Burrows

                 </span>

    <label>Email</label>
                 <span class="field">

                     am@bondedia.co.uk

                 </span>


    <label>Recieve newsletter</label>
                 <span class="field">

                     yes

                 </span>


    <label>mobile</label>
                 <span class="field">

                     077016615551

                 </span>


    <a class="pull-left clearboth">change your password</a>
    <a class="pull-left clearboth">change information</a>


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
                 <span class="field">

                     uwudwdhwhdu

                 </span>


    <label>Company name</label>
                 <span class="field">

                     VIP SPORTS EVENTS LTD

                 </span>

    <label>Address</label>
                 <span class="field">

                     7 yemen road

                 </span>


    <label>Postcode</label>
                 <span class="field">

                     e6 1eb

                 </span>


    <label>City</label>
                 <span class="field">

                     Wirral

                 </span>


    <label>Country</label>
                 <span class="field">

                     Mersyside

                 </span>


    <label>Country</label>
                 <span class="field">

                     United Kingdom

                 </span>


    <a class="pull-left clearboth">modify</a>


</div>


<div id="trust-seller" class="three columns acc-detail-block">

    <h3>Trust Seller guarentee
        <img class="icon-acc" src="{{ Assets::Path('images/trust.png') }}"/>
    </h3>


    <label>Account holder</label>
                 <span class="field">

                     Bond media

                 </span>

    <label>card type</label>
                 <span class="field">

                     Mastercard

                 </span>


    <label>Card number</label>
                 <span class="field">

                     XXX XXXX XXXX 0987

                 </span>

    <label>Card number</label>
                 <span class="field">

                     11/15

                 </span>


    <a class="pull-left clearboth">add another card</a>

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
{{ Assets::jsEnd() }}
