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

    <h1 class="page-header">
        @if($node instanceof Pages)
        {{ e($node->title) }}
        @endif
    </h1>

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


        <h3 class="sell-divider">Registered User</h3>


        <div class="row selldivider">




            <div class="label bluelabel">Username</div>

            <div class="fields inlinefields">
                <input type="tel">
            </div>




            <div class="label bluelabel">Password</div>

            <div class="fields inlinefields">
                <input type="password">
            </div>

            <input type="button" class="btn bluebtn" value="LOGIN">



        </div>



        <h3 class="sell-divider">Not Registered User</h3>


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
                <select>
                    <option>Select your country</option>
                    <option>1</option>
                    <option>1</option>
                    <option>1</option>
                </select>
                &nbsp;
                <input type="text">
                &nbsp;
                <input type="button" class="btn bluebtn" value="REGISTER">

            </div>


        </div>




    </div>
</div>
<!---------main content------------>


@stop


