<!-- ######################## Main Menu ######################## -->


<header>

	<div class="contain">
    
        <a href="/"><img class="logo" src="{{ Assets::Path('images/main_logo.png') }}" alt="Football Ticket Pad" /></a>
        
        
        
        
        
        
        
        
        
        
        <span class="menu-container">
            <span class="menubtn">
              
            </span>
            
            <nav class="header_nav">
                  {{ $menus }}
            </nav>
        </span>
    
        
         
        
        
        
        

        <a href="/login"><span class="btn loginbtn">LOGIN</span></a>
        
       
        <a href="/my-account"><span class="btn myaccount">MY ACCOUNT</span></a>
        
        
        
        <div class="searcharea">
                <form id="form-home" action="/ticket-search" method="get">
                    <input class="forminput" name="search" >

                    <input class="bigbox-search-button" type="submit" />
                </form>
         </div>
        
               
        
    </div>

</header>