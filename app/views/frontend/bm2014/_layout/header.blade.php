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
    
        
         <div class="searcharea innersearch">
                <form id="form-home">
                    <input class="forminput" placeholder="eg. Champions League Final" >
                    <input class="bigbox-search-button" type="button"></button>
                </form>
         </div>
        
        
        
        

        <a href="/"><span class="btn loginbtn">LOGIN</span></a>
        
       
        <a href="/"><span class="btn myaccount">MY ACCOUNT</span></a>        
        
    </div>

</header>