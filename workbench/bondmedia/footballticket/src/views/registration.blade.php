{{ Form::open(array('url' => $url, 'method' => 'post', 'id'=>'registration-form')) }}
    <div class="row">
        <div class="large-8 columns group-header">
            Personal Details
        </div>
    </div>
    <div class="row">
        <div class="large-4 columns">
            <label>
                {{ Form::text('first_name', '', ['class'=>'input first-name', 'placeholder' => 'First Name' ]) }}
            </label>
        </div>
        <div class="large-4 columns">
            <label>
                {{ Form::text('last_name', '', ['class'=>'input last-name', 'placeholder' => 'Last Name' ]) }}
            </label>
        </div>
    </div>

    <div class="row">
        <div class="large-8 columns group-header">
            Email Address & Contact Info
        </div>
    </div>

    <div class="row">
        <div class="large-4 columns">
            <label>
                {{ Form::email('email', '', ['class'=>'input email', 'placeholder' => 'email' ]) }}
            </label>
        </div>
        <div class="large-4 columns">
            <label>
                {{ Form::email('email_confirmation', '', ['class'=>'input confirmEmail', 'placeholder' => 'Confirm Email' ]) }}
            </label>
        </div>
    </div>

    <div class="row">
        <div class="large-4 columns">
            <label>
                {{ Form::select('country_code', ['0044' => 'GB(+44)', '0088' => 'BD(+88)'], '0044', ['class'=>'input country-code', 'placeholder' => 'Country Code' ] ) }}
            </label>
        </div>
        <div class="large-4 columns">
            <label>
                {{ Form::text('contact_no', '', ['class'=>'input contact-no', 'placeholder' => 'Mobile Number' ]) }}
            </label>
        </div>
    </div>

    <div class="row">
        <div class="large-4 columns">
            <label>
                {{ Form::checkbox('newsletters', '1') }}
                Subscribe to newsletter offering promotions and discount codes
            </label>
        </div>
    </div>

    <div class="row">
        <div class="large-8 columns group-header">
            Security
        </div>
    </div>

    <div class="row">
        <div class="large-4 columns">
            <label>
                Password
                {{ Form::password('password', '') }}
            </label>
        </div>
        <div class="large-4 columns">
            <label>
                Confirm Password
                {{ Form::password('password_confirmation', '') }}
            </label>
        </div>
    </div>

    <div class="row">
        <div class="large-4 columns">

        </div>
        <div class="large-4 columns">
            <div class="row">
                <div class="large-2 columns">
                    <label>
                        {{ Form::checkbox('terms_n_conditions', '1') }}
                        I agree to terms & conditions
                    </label>
                </div>
                <div class="large-2 columns">
                    {{ Form::submit('Register', ['class' => 'button [radius round secondary alert]']) }}
                </div>
            </div>
        </div>
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
        'password-strongify'     => 'js/password-strongify.js'
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
            Ajas form submission
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
                    //TODO: when user registered ... redirect to user control panel
                },
                error: function ($response) {
                    body.removeClass("loading");
                    $('.ajax-loading-modal').remove();
                    //TODO: display exceptions
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
{{ Assets::jsEnd() }}