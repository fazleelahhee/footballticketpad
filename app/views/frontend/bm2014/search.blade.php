@extends(Template::name('frontend.%s._layout.layout'))
@section('content')
<section class="banner-home">

    <h1 class="page-header">
        Search Results
    </h1>


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
         <h2 class="event-cat-header">Categories <span></span></h2>
          <ul class="search-results-list event-category">
          </ul>

         <h2 class="event-list-header" >Events <span></span></h2>
         <ul class="search-results-list event-ticket">

         </ul>
     </div>
</div>
@stop
{{
    Assets::setStyles(
    [
        'loading'         => 'css/ajax-loading.css'
    ], false, true);
}}

{{
    Assets::setScripts(
    [
        'underscore'          => 'js/underscore.min.js',
        'backbone'            => 'js/backbone.min.js'
    ], false, true);
}}


{{ Assets::jsStart() }}
<script type="text/javascript" charset="utf-8">

    (function ($) {
        var ticketContainer =  $('body');

        $(document).ready(function () {
            //category
            $.ajax({
                url: '{{route("ticket.events.search.category")}}?q={{$query_param}}',
                type: 'GET',
                dataType: 'json',
                success: function (response) {
                    var i = 0;
                    _.each(response, function (item) {
                        if(item.name) {
                            var html = '<li> ';
                            html += '<a href="'+item.url+'"><span class="game">'+item.name+'</span></a>';
                            html += '<span class="subtext"><a href="'+item.league.url+'">'+item.league.name+'</a></span>';
                            html += ' <a class="btn greenbtn pull-right" href="'+item.url+'">See tickets</a>';
                            html += '</li>';
                            $('.event-category').append(html);
                            i++;
                        }
                    });

                    if(i === 0) {
                        $('.event-category').append('<li><span class="subtext">No category found</span></li>');
                    } else {
                        $('.event-cat-header span').html('('+i+')');
                    }
                }
            });

            //ticket
            $.ajax({
                //url: '{{$ticketApi}}api/rest/products?order=name{{$query_param}}',
                url: '{{route("ticket.events.search")}}?q={{$query_param}}',
                type: 'GET',
                dataType: 'json',
                beforeSend: function (xhr) {
                    $(".ajax-loading-modal").remove();
                    ticketContainer.append('<div class="ajax-loading-modal"></div>');
                    ticketContainer.addClass("loading");
                },
                success: function (response) {
                    var i = 0;
                    _.each(response, function (item) {
                        if(item.id) {
//                            var html = template({
//                                title: '',
//                                event_date: '04 November 19:00',
//                                short_text: ''
//                            });
                            var html = '<li>';
                            html += '<a href="'+item._url+'"><span class="game">'+item.name+'</span></a>';
                            html += '<span class="date-result">'+item.datetime+'</span>';
                            html += '<span class="subtext"><a href="#">'+item.content+'</a></span>';
                            html += '<a class=" btn pinkbtn pull-right" href="/events/'+item.slug+'">Buy</a></li>';
                            $('.event-ticket').append(html);
                            i++;
                        }
                    });

                    if(i === 0) {
                        $('.event-ticket').append('<li><span class="subtext">No ticket found</span></li>');
                    } else {
                        $('.event-list-header span').html('('+i+')');
                    }

                    ticketContainer.removeClass('loading');
                }
            });
        });
    })(jQuery)
</script>

<script type="text/x-template" id="ticket-element-template">
    <li>

        <a href="#"><span class="game"><%= title %></span></a>
        <span class="date-result"><%= event_date %></span>
        <span class="subtext"><a href="#"><%= short_text %></a></span>
        <a class=" btn pinkbtn pull-right" href="#">Buy</a>
    </li>
</script>

<script type="text/x-template" id="category-element-template">
         <li>

              <a href="#"><span class="game"> Manchester City</span></a>
              <span class="subtext"><a href="#">Premier League</a></span>
             <a class="btn greenbtn pull-right" href="#">See tickets</a>
          </li>
</script>

{{ Assets::jsEnd() }}