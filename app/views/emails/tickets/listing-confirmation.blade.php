<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Ticket Listing Confirmation</h2>
<div>
    <p>Hi <b>{{$seller_name}}</b></p>
    <p>Thank you very much for you lisiting.</p>
    <p>Commission breakdown:</p>
    <p>Number of Ticket Sold: {{$number_of_ticket}}</p>
    <p>Selling Price (Per Ticket): {{$selling_price}}</p>
    <p>Total Selling Price: {{$total_selling}}</p>
    <p>Selling Fees ({{$selling_fees}}): {{$selling_fees_amount}}</p>
    <p></p>
    <p>Net Payment: {{$net_payment}}</p>
</div>
</body>
</html>
