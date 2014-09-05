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
            <h2>Addresses</h2>

             <span class="ftp-line">
                <span class="greenline"></span>
                <span class="yellowline"></span>
                <span class="pinkline"></span>
                <span class="blueline"></span>
             </span>

         </div>


         <!---------adresss----------->




         <div class="row">

             <h3>Main collection and delivery address</h3>
             <span class="address_label">Your shipping address and main collection point</span>

             <table class="responsivetable addresstable">

                 <tr>
                     <td><strong>Name</strong></td>
                     <td>Stephen</td>
                 </tr>
                 <tr>
                     <td><strong>Surname</strong></td>
                     <td>King</td>
                 </tr>
                 <tr>
                     <td><strong>Address</strong></td>
                     <td>8 lovely drive</td>
                 </tr>
                 <tr>
                     <td><strong>Postcode</strong></td>
                     <td>e6 1eb</td>
                 </tr>
                 <tr>
                     <td><strong>City</strong></td>
                     <td>Virral</td>
                 </tr>
                 <tr>
                     <td><strong>County</strong></td>
                     <td>Mersydie</td>
                 </tr>
                 <tr>
                     <td><strong>Country</strong></td>
                     <td>United kingdom</td>
                 </tr>
                 <tr>
                     <td><strong>Mobile</strong></td>
                     <td>07706155515</td>
                 </tr>
             </table>

             <a href="#" class="pull-left clearboth">change address</a>

             <a href="#" class="pull-left clearboth">Add another address</a>


         </div>


         <!---------adresss----------->




         <!---------faz shortcode------------>

                            
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