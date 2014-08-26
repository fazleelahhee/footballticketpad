@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')




<section class="banner-home">


    <img class="inner-banner" src="{{ Assets::Path('images/account.jpg') }}" alt="test" />

    <span class="ftp-line">
    	<span class="greenline"></span>
        <span class="yellowline"></span>
        <span class="pinkline"></span>
        <span class="blueline"></span>
    </span>


</section>




<!---------main content------------>
<div class="row">

    <span class="page-header buy-detail">

         <span class="gamename"> <strong>Chelsea</strong> vs  <strong>Manchester United</strong> Tickets</span>
         <span class="gamedetail">Saturday, 16th August 2014, 3:00pm. Turf moor - Burnley FC, Burnley, UK</span>



     </span>

    <div class="site-content">
        @if($node instanceof Pages)
        {{ Template::doShortCode($node->content ) }}
        @endif



        <div class="row">
            <ul class="step-process">

                <li>
                    <span class="number ">1</span>
                    <span class="selltitle">Your Tickets</span>
                </li>

                <li>
                    <span class="number">2</span>
                    <span class="selltitle">Your Tickets</span>
                </li>


                <li class="active">
                    <span class="number">3</span>
                    <span class="selltitle">Your Tickets</span>
                </li>

            </ul>
        </div>


        <h3 class="sell-divider">Guarentee </h3>

<span class="bluehighlight">

    <span class="guarenteeicon"></span>
    We protect you so that the transactions are <span class="blackhighlight">100% secure</span>

</span>


        <div class="row selldivider">

            <p>Why do we need you credit card data?
                <span data-tooltip aria-haspopup="true" class="has-tip whatsisthis" title="?????">?</span>
            </p>


            <table class="responsive">
                <thead>
                <th>Activate</th>
                <th>Card Holder</th>
                <th>Credit Card</th>
                <th>Credit Number</th>
                <th>Expires</th>

                </thead>

                <tbody>
                <tr>
                    <td><input type="radio"></td>
                    <td>James Bond</td>
                    <td>Mastercard</td>
                    <td>XXXX XXXX XXXX 2358</td>
                    <td>11/5</td>
                </tr>
                </tbody>

            </table>


        </div>




        <div class="row selldivider">


            <p>
                <strong>Are the tickets ready to be sent?</strong>
                <br/>
                If you already have the tickets, you will increase your chances of sellig them by checking the "yes i have them" this will make your listing stand out from the rest.

            </p>


            <input type="radio" class="inline-radio">
            <label class="inline-label">Yes, i have them (if selected you will have 3 working days to send them)</label>


            <input type="radio" class="inline-radio">
            <label class="inline-label">No, i dont have them</label>


        </div>




        <div class="row selldivider">

            <input type="checkbox" class="inline-radio">
            <label class="inline-label">I want to subscribe to football ticket pads newsletter</label>


            <input type="checkbox" class="inline-radio">
            <label class="inline-label">I accept <a href="#" data-reveal-id="myModal">terms and condition</a> and privacy policy
                <h1>CHECK MODAL BOX CODE</h1>
            </label>






        </div>


        <input type="button" class="btn bluebtn pull-right" value="PUBLISH">
        <a href="#"><span class="btn greybtn pull-right">BACK</span></a>



    </div>
</div>
<!---------main content------------>






<div id="myModal" class="reveal-modal" data-reveal>
    <a class="close-reveal-modal">&#215;</a>


    <h2>Terms &amp; Conditions</h2>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

</div>



@stop


