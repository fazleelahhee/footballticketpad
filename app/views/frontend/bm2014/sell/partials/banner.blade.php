<section class="banner-home">
    <span class="page-header buy-detail">
         <span class="gamename"> <strong>{{$node->title}}</strong> Tickets</span>
         <span class="gamedetail">{{ date('l, d F Y, h:ia ',strtotime($node->datetime)) }} {{$node->event_location}}</span>
     </span>
    <img class="inner-banner" src="{{ Assets::Path('images/account.jpg') }}" alt="test" />
    <span class="ftp-line">
    	<span class="greenline"></span>
        <span class="yellowline"></span>
        <span class="pinkline"></span>
        <span class="blueline"></span>
    </span>
</section>