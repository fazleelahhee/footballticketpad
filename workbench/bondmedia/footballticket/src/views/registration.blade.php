<div class="columns twelve message" style="display:none">
</div>

{{ Form::open(array('url' => $url, 'method' => 'post', 'id'=>'registration-form')) }}
    <span class="label-seperator">Personal details</span>
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



    <div class="columns six">
        <label>
            {{ Form::checkbox('terms_n_conditions', '1') }}
            I agree to <a href="/terms-conditions" target="_blank"> terms & conditions</a>
        </label>

    </div>

    <div class="columns six">
        {{ Form::submit('Register', ['class' => 'btn pinkbtn pull-right clearboth']) }}
    </div>




{{ Form::close() }}

{{
    Assets::setStyles(
    [
        'loading'         => 'css/ajax-loading.css'
    ], false, true);
}}

{{
    Assets::setScripts(
    [
        'serializejson'          => 'js/jquery.serializejson.min.js',
        'jquery-form'            => 'js/jquery-form.min.js',
        'jquery-validator'       => 'js/jquery-validator/jquery.validate.min.js',
        'validator-add-method'   => 'js/jquery-validator/additional-methods.min.js',
        'password-strongify'     => 'js/password-strongify.js',
        'underscore'             => 'js/underscore.min.js'
    ], false, true);
}}
{{ Assets::jsStart() }}
<script>
    (function ($) {
        $.validator.setDefaults({
            success: "valid"
        });
        var form = $('#registration-form');
        var body = $("body");
        $(document).ready(function () {
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

            /*
            Ajax form submission
             */
            form.ajaxForm({
                dataType:  'json',
                beforeSubmit: function (arr, $form, options) {
                    if(form.valid()) {
                        body.append('<div class="ajax-loading-modal"></div>');
                        body.addClass("loading");
                        return true;
                    } else {
                        return false;
                    }
                },
                success:   function ($response) {
                    body.removeClass("loading");
                    $('.ajax-loading-modal').remove();
                    //redirect to account page
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
                            body.removeClass("loading");
                            @if(isset($reload) && trim($reload) == 'self')
                                window.location.reload();
                            @else
                                    window.location.href = '/account-information';
                            @endif

                        },
                        error: function (response) {
                            body.removeClass("loading");
                            console.log(response);
                        }
                    });


                },
                error: function ($response) {
                    body.removeClass("loading");
                    $('.ajax-loading-modal').remove();
                    $('.message').css({display: "block"});
                    var template = _.template($('#error-message-template').html());
                    var message = jQuery.parseJSON($response.responseText);
                    $('.message').html(template({message: message.error }));
                }
            });

            $('input[name="password"]').passStrengthify({
                minimum: 8,
                labels: {
                    tooShort: '',
                    passwordStrength: ''
                }
            });
        });
    })(jQuery)
</script>

<script type="text/x-template" id="error-message-template">
    <div data-alert class="alert-box alert radius">
        <%= message %>
        <a href="#" class="close">&times;</a>
    </div>
</script>
{{ Assets::jsEnd() }}