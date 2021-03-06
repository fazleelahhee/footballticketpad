@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')




<section class="banner-home">


     <span class="page-header buy-detail">

         <span class="gamename"> <strong>Chelsea</strong> vs  <strong>Manchester United</strong> Tickets</span>
         <span class="gamedetail">Saturday, 16th August 2014, 3:00pm. Turf moor - Burnley FC, Burnley, UK</span>



     </span>


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


        <h3 class="sell-divider row">Registered User</h3>


        <div class="row selldivider">




            <div class="label bluelabel inlinefields">Username</div>

            <div class="fields inlinefields">
                <input type="tel">
            </div>




            <div class="label bluelabel inlinefields">Password</div>

            <div class="fields inlinefields">
                <input type="password">
            </div>

            <input type="button" class="btn bluebtn" value="LOGIN">



        </div>



        <h3 class="sell-divider row">Not Registered User</h3>


        <div class="row selldivider">

            <p>Now that we know the ticket details we need your personal information ass soon as your tickets are sold we will send you the delivery address a UPS courier will pick them up</p>


            <div class="label bluelabel">Name</div>

            <div class="fields">
                <input type="text">
            </div>


            <div class="label bluelabel">Surname</div>

            <div class="fields">
                <input type="text">
            </div>


            <div class="label bluelabel">Email</div>

            <div class="fields">
                <input type="text">
            </div>


            <div class="label bluelabel">Confirm Email</div>

            <div class="fields">
                <input type="text">
            </div>



            <div class="label bluelabel">Password</div>

            <div class="fields">
                <input type="password">
            </div>


            <div class="label bluelabel">Confirm password</div>

            <div class="fields">
                <input type="password">
            </div>


            <div class="label bluelabel">Mobile number</div>

            <div class="fields">
                <select class="inlinefields">
                    <option>Select your country</option>
                    <option>1</option>
                    <option>1</option>
                    <option>1</option>
                </select>
                &nbsp;
                <input type="text" class="inlinefields">
                &nbsp;
                <input type="button" class="btn bluebtn" value="REGISTER">

            </div>


        </div>




    </div>
</div>
<!---------main content------------>


@stop


