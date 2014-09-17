<script type="text/javascript" charset="utf-8">
    (function ($) {
        var body = $('body');
        @if(!$allCard)
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
        @endif

        /* Card Account open event*/
        body.on('click', '.modify-card', function (e) {
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
                    @if(!$allCard)
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
                    @else
                    $('.modify-card').closest('span').remove();
                    $('.credit-card-information').remove();
                    $.getAllCards();

                    @endif
                }

            }).done(function () {
                parent.find('.close-reveal-modal').trigger('click');
            });


        });

        var handleResponse = function (data) {
            var credit_card_template =  _.template($('#credit-card-display-template').html());
            $('.ajax-message').remove();
            $('.credit-card-container').append(
                credit_card_template({
                    cards : data
                })
            );
        }
        $.getAllCards = function () {
            $.ajax({
                url: '/account/account-information/card/all',
                dataType: 'json',
                beforeSend: function () {
                    $('.credit-card-container').append('<p class="ajax-message">Please wait ... </p>');
                },
                success: function (response) {
                    if(response.data) {
                        handleResponse(response.data);
                    }
                },

                statusCode: {
                    404: function() {
                        handleResponse('');
                    },
                    400: function () {
                        handleResponse('');
                    },
                    500: function () {
                        handleResponse('');
                    }
                }

            }).done(function () {
                $('.ajax-message').remove();
            }).complete(function (response, status) {
                $.ajax_Complete(response, status);
            })
        }
    })(jQuery);
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

<script type="text/x-template" id="credit-card-display-template">
    <table class="responsive credit-card-information">
        <thead>
            <th>Activate</th>
            <th>Card Holder</th>
            <th>Credit Card</th>
            <th>Credit Number</th>
            <th>Expires</th>
        </thead>
        <% if (_.size(cards) > 0) { %>
        <tbody>
            <% _.each(cards, function (card, key) {
                var checked = card.active == 1? 'checked': '';
            %>
            <tr>
                <td><input type="radio" name="credit_card" id="credit-card-<%=card.id%>" value="<%=card.id%>" <%=checked%> ></td>
                <td><%=card.account_holder%></td>
                <td><%=card.card_type%></td>
                <td><%=card.card_number%></td>
                <td><%=card.expire_date%></td>
            </tr>
            <% }) %>
        </tbody>
        <% } else { %>
        <tbody>
            <tr>
                <td colspan="5">There no credit card found associated with this account. <a href="#" class="modify-card">Click here</a> to add new credit card.</td>
            </tr>
        </tbody>
        <% } %>
    </table>
    <% if (_.size(cards) > 0) { %>
    <span class="pull-right">To add another card <a href="#" class="modify-card">Click here</a></span>
    <% } %>
</script>
