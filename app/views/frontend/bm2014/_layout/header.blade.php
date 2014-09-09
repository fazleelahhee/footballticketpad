<!-- ######################## Main Menu ######################## -->


<header>

	<div class="contain">
    
        <a class="logoa" href="/"><img class="logo" src="{{ Assets::Path('images/main_logo.png') }}" alt="Football Ticket Pad" /></a>
        
        
        
        
        
        
        
        
        
        
        <span class="menu-container">
            <span class="menubtn">
              
            </span>
            
            <nav class="header_nav">
                  {{ $menus }}
            </nav>
        </span>

        @if(isset($customer['firstname']))
        <a href="{{url('customer/account/logout')}}"><span class="btn loginbtn">LOGOUT</span></a>
        <a href="{{url('account/listing')}}"><span class="btn myaccount">MY ACCOUNT</span></a>
        @else
        <a href="{{url('login')}}"><span class="btn loginbtn">LOGIN</span></a>
        @endif

        <div class="searcharea">
                <form id="form-home" action="{{url('ticket-search')}}" method="get">
                    <input class="forminput" name="search" >

                    <input class="bigbox-search-button" type="submit" />
                </form>
         </div>
        
               
        
    </div>

</header>