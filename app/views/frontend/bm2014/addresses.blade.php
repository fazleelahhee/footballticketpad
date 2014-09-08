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
                     <td class="firstname" data-firstname="">Stephen</td>
                 </tr>
                 <tr>
                     <td><strong>Surname</strong></td>
                     <td class="lastname" data-lastname="">King</td>
                 </tr>
                 <tr>
                     <td><strong>Address</strong></td>
                     <td class="street" data-street="">8 lovely drive</td>
                 </tr>
                 <tr>
                     <td><strong>Postcode</strong></td>
                     <td class="postcode" data-postcode="">e6 1eb</td>
                 </tr>
                 <tr>
                     <td><strong>City</strong></td>
                     <td class="city" data-city="">Virral</td>
                 </tr>
<!--                 <tr>-->
<!--                     <td><strong>County</strong></td>-->
<!--                     <td class="" >Mersydie</td>-->
<!--                 </tr>-->
                 <tr>
                     <td><strong>Country</strong></td>
                     <td class="country-id" data-country-id="">United kingdom</td>
                 </tr>
                 <tr>
                     <td><strong>Mobile</strong></td>
                     <td class="mobile" data-mobile="">07706155515</td>
                 </tr>
             </table>

             <a href="#" class="pull-left clearboth change-address">change address</a>

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
                url: '/account/account-information/shipping',
                dataType: 'json',
                type: 'get',
                beforeSend: function () {

                },
                success: function (response) {
                    if(response.data) {
                        var data = response.data;
                        if(data.firstname) {

                            $('.firstname').data('firstname', data.firstname);
                            $('.firstname').html(data.firstname);

                            $('.lastname').data('lastname',data.lastname);
                            $('.lastname').html(data.lastname?data.lastname : 'Not set');

                            $('.street').data('street', data.street);
                            $('.street').html(data.street);

                            $('.postcode').data('postcode', data.postcode);
                            $('.postcode').html(data.postcode);

                            $('.city').data('city', data.city);
                            $('.city').html(data.city);

                            $('.country').data('country', data.country_id);
                            $('.country').html(countries[data.country_id]);

                            $('.mobile').data('mobile', data.phone);
                            $('.mobile').html(data.phone);
                        }
                    }
                }
            }).done(function () {

            });
        });

        /* Billing Address modal open event*/
        $('.change-address').click(function (e) {
            e.preventDefault();
            var template = _.template($('#address-form-template').html());
            $('#address-form-modal').remove();
            body.append(template({
                firstname: $('.firstname').data('firstname'),
                lastname: $('.lastname').data('lastname'),
                street: $('.street').data('street'),
                country_id: $('.country').data('country'),
                postcode: $('.postcode').data('postcode'),
                city: $('.city').data('city'),
                mobile: $('.mobile').data('mobile'),
                countries: countries
            }));
            $('#address-form-modal').foundation('reveal', 'open');
        });

        /* Bank card save event */
        body.on('click','.billing-save', function (e) {
            e.preventDefault();
            var parent = $(this).closest('div.reveal-modal');
            $.ajax({
                url: '/account/account-information/shipping',
                data: {
                    firstname: $('#firstname').val(),
                    lastname: $('#lastname').val(),
                    street: $('#street').val(),
                    country_id: $('#country').val(),
                    postcode: $('#postcode').val(),
                    city: $('#city').val(),
                    phone: $('#mobile').val()
                },
                dataType: 'json',
                type: 'post',
                success: function (response) {
                    if(response.data) {
                        var data = response.data;
                        if(data.firstname) {

                            $('.firstname').data('firstname', data.firstname);
                            $('.firstname').html(data.firstname);

                            $('.lastname').data('lastname',data.lastname);
                            $('.lastname').html(data.lastname?data.lastname : 'Not set');

                            $('.street').data('street', data.street);
                            $('.street').html(data.street);

                            $('.postcode').data('postcode', data.postcode);
                            $('.postcode').html(data.postcode);

                            $('.city').data('city', data.city);
                            $('.city').html(data.city);

                            $('.country').data('country', data.country_id);
                            $('.country').html(countries[data.country_id]);

                            $('.mobile').data('mobile', data.phone);
                            $('.mobile').html(data.phone);
                        }
                    }
                }

            }).done(function () {
                parent.find('.close-reveal-modal').trigger('click');
            });


        });
    })(jQuery);
</script>

<script type="text/x-template" id="address-form-template" charset="utf-8">
    <div id="address-form-modal" class="reveal-modal" data-reveal style="display:none">
        <h2>Shipping Address</h2>
        <p>
            <label for="firstname">First Name</label>
            <input name="firstname" id="firstname" value="<%=firstname%>" type="text" />
        </p>
        <p>
            <label for="lastname">Last Name</label>
            <input name="lastname" id="lastname" value="<%=lastname%>" type="text" />
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
            <label for="mobile">Mobile</label>
            <input name="mobile" id="mobile" value="<%=mobile%>" type="text" />
        </p>
        <p>
            <a href="#" class="button expand billing-save">Save</a>
        </p>
        <a class="close-reveal-modal">&#215;</a>
    </div>
</script>
{{ Assets::jsEnd() }}