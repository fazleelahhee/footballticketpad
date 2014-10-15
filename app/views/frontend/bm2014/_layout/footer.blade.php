<!-- ######################## Section ######################## -->



<!-- ######################## Footer ######################## -->




    <div class="row sidebar-mobile">

    <aside class="sidebar">

    <!-- ######################## hotticket start ######################## -->

    <div class="hottickets block">

          <span class="block-heading">
                <span class="blockicon"></span>
                <H3>HOT TICKETS</H3>
          </span>

          <span class="block-content">


                <!-- repeater -->
                <a href="#">
                <span class="blockrow">

                    <span class="date">
                    	<span class="day">16</span>
                        <span class="month">SEP</span>
                    </span>

                    <span class="game">
                    	Barcelona vs Real Madrid
                    </span>


                </span>
                </a>
                <!-- repeater -->



               <!-- repeater -->
                <a href="#">
                <span class="blockrow">

                    <span class="date">
                    	<span class="day">16</span>
                        <span class="month">SEP</span>
                    </span>

                    <span class="game">
                    	Barcelona vs Real Madrid
                    </span>


                </span>
                </a>
                <!-- repeater -->



               <!-- repeater -->
                <a href="#">
                <span class="blockrow">

                    <span class="date">
                    	<span class="day">16</span>
                        <span class="month">SEP</span>
                    </span>

                    <span class="game">
                    	Barcelona vs Real Madrid
                    </span>


                </span>
                </a>
                <!-- repeater -->



               <!-- repeater -->
                <a href="#">
                <span class="blockrow">

                    <span class="date">
                    	<span class="day">16</span>
                        <span class="month">SEP</span>
                    </span>

                    <span class="game">
                    	Barcelona vs Real Madrid
                    </span>


                </span>
                </a>
                <!-- repeater -->



               <!-- repeater -->
                <a href="#">
                <span class="blockrow">

                    <span class="date">
                    	<span class="day">16</span>
                        <span class="month">SEP</span>
                    </span>

                    <span class="game">
                    	Barcelona vs Real Madrid
                    </span>


                </span>
                </a>
                <!-- repeater -->



               <!-- repeater -->
                <a href="#">
                <span class="blockrow">

                    <span class="date">
                    	<span class="day">16</span>
                        <span class="month">SEP</span>
                    </span>

                    <span class="game">
                    	Barcelona vs Real Madrid
                    </span>


                </span>
                </a>
                <!-- repeater -->



               <!-- repeater -->
                <a href="#">
                <span class="blockrow">

                    <span class="date">
                    	<span class="day">16</span>
                        <span class="month">SEP</span>
                    </span>

                    <span class="game">
                    	Barcelona vs Real Madrid
                    </span>


                </span>
                </a>
                <!-- repeater -->



               <!-- repeater -->
                <a href="#">
                <span class="blockrow">

                    <span class="date">
                    	<span class="day">16</span>
                        <span class="month">SEP</span>
                    </span>

                    <span class="game">
                    	Barcelona vs Real Madrid
                    </span>


                </span>
                </a>
                <!-- repeater -->



               <!-- repeater -->
                <a href="#">
                <span class="blockrow">

                    <span class="date">
                    	<span class="day">16</span>
                        <span class="month">SEP</span>
                    </span>

                    <span class="game">
                    	Barcelona vs Real Madrid
                    </span>


                </span>
                </a>
                <!-- repeater -->












          </span>

    </div>
    <!-- ########################  hotticket end ######################## -->











    <!-- ######################## top teams start ######################## -->

    <div class="topteams block">

          <span class="block-heading">
                <span class="blockicon"></span>
                <H3>TOP TEAMS</H3>
          </span>

          <span class="block-content">


                <!-- repeater -->
                <a href="/chelsea">
                <span class="blockrow">

                    <span class="date">
                    	<img src="{{ Assets::Path('images/clublogo.png') }}" alt="chelsea FC" />
                    </span>

                    <span class="game">
                    	Chelsea FC
                    </span>


                </span>
                </a>
                <!-- repeater -->



                <!-- repeater -->
                <a href="/chelsea">
                <span class="blockrow">

                    <span class="date">
                    	<img src="{{ Assets::Path('images/clublogo.png') }}" alt="chelsea FC" />
                    </span>

                    <span class="game">
                    	Chelsea FC
                    </span>


                </span>
                </a>
                <!-- repeater -->





                <!-- repeater -->
                <a href="/chelsea">
                <span class="blockrow">

                    <span class="date">
                    	<img src="{{ Assets::Path('images/clublogo.png') }}" alt="chelsea FC" />
                    </span>

                    <span class="game">
                    	Chelsea FC
                    </span>


                </span>
                </a>
                <!-- repeater -->



                <!-- repeater -->
                <a href="/chelsea">
                <span class="blockrow">

                    <span class="date">
                    	<img src="{{ Assets::Path('images/clublogo.png') }}" alt="chelsea FC" />
                    </span>

                    <span class="game">
                    	Chelsea FC
                    </span>


                </span>
                </a>
                <!-- repeater -->



                <!-- repeater -->
                <a href="/chelsea">
                <span class="blockrow">

                    <span class="date">
                    	<img src="{{ Assets::Path('images/clublogo.png') }}" alt="chelsea FC" />
                    </span>

                    <span class="game">
                    	Chelsea FC
                    </span>


                </span>
                </a>
                <!-- repeater -->








          </span>

    </div>
    <!-- ######################## top teams end ######################## -->


    </aside>


    </div>





<footer>

	
    <span class="ftp-line">
    	<span class="greenline"></span>
        <span class="yellowline"></span>
        <span class="pinkline"></span>
        <span class="blueline"></span>
    </span>	
    
    
    
    
    
    <div class="full lightgrey">
        <div class="row ">
            
            
            <div class="contain">
            
                <span class="footerblock newsletterplane"></span>
                <span class="footerblock  support-text">NEVER MISS OUT</span>
                <span class="footerblock">
                    <form id="form-subscribe" action="{{route('email.subscribe')}}" method="post">
                          <input class="formfooter" type="email" placeholder="Enter email address" name="subscriber_email">
                          <input class="gobtn" type="button" value="GO" />
                    </form>
                </span>
                <span class=" footerblock support-text">SUBSCRIBE NOW</span>
                
            </div>


        
        </div>
	</div>



    {{ Assets::jsStart() }}
    <script>
        (function ($) {
            $('.gobtn').click(function () {
                var email = $('input[name=subscriber_email]').val();
                if(email != '') {
                    $.ajax({
                        url: $('#form-subscribe').attr('action'),
                        type: 'post',
                        data: {email: email},
                        success: function (response) {
                            alert('Thank you very much for subscribe with us.');
                            $('input[name=subscriber_email]').val('');
                        },
                        error: function (response) {
                            console.log(response.responseText);
                        }
                    })
                }
            });
        })(jQuery)
    </script>
    {{ Assets::jsEnd() }}






	<section class="section_main" style=" background:url({{ Assets::Path('images/footergreyscale.jpg') }}) no-repeat left bottom #171616">

    
        <div class="row">
    
    
    		<!--blcok1--->
            <article class="three columns">
                <div class="panel">
                    
                    <span class="smallfooter-text">
                        Worldwide Delivery. <span style="color:#fed265">Fast &amp; secure.</span>
                    </span>
                    
                    <img src="{{ Assets::Path('images/footerdelivery.png') }}" alt="Delivery" />
                    
                </div>
            </article>
    		<!--blcok1--->
            
            
            <!--blcok1--->
            <article class="three columns">
            {{Template::doShortCode('latest-news' , true) }}
            </article>
    		<!--blcok1--->
            
            
            <!--blcok1--->
            <article class="three columns">
                <div class="panel">
                    


                    <a class="twitter-timeline" data-chrome=" transparent" data-tweet-limit="1" style="height:290px" data-theme="dark"  data-dnt="true" href="https://twitter.com/Ticket_Pad" data-widget-id="512613651862142976">Tweets by @Ticket_Pad</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>




                </div>
            </article>
    		<!--blcok1--->
            
            
            <!--blcok1--->
            <article class="three columns">
                <div class="panel">

                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=154572168240&version=v2.0";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>


                    <span class="smallfooter-text">
                        Like us on Facebook
                    </span>

                    <div class="fb-like-box" data-href="https://www.facebook.com/footballticketpad?ref=bookmarks" data-width="280" data-height="290" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>


                </div>
            </article>
    		<!--blcok1--->
    
          
    
        </div>


	</section>




    <div class="row">

        <div class="twelve columns footer">
        
        	<span class="copyright columns four">&copy; Football Ticket Pad |  <a href="/terms-conditions"> Terms &amp; conditions </a> |   <a href="/privacy-policy"> Privacy policy </a> </span>
            
            <img class="columns four accepted-cards" src="{{ Assets::Path('images/cards.png') }}" alt="Credit Cards" />
            
            
            <div class="social columns four">


                <a href="https://plus.google.com/u/0/b/115746344173960062774/115746344173960062774/about/p/pub" target="_blank" class="googleplus">
                    <span class="icon"></span>
                </a>

                <a href="#" target="_blank"  class="youtube">
                    <span class="icon"></span>
                </a>


                <a href="https://www.facebook.com/footballticketpad?ref=bookmarks" target="_blank" class="facebook">
                    <span class="icon"></span>
                </a>


                <a href="https://twitter.com/Ticket_Pad" target="_blank" class="twitter">
                	<span class="icon"></span>
                </a>



                
            </div>
            
        
        </div>

    </div>

</footer>

