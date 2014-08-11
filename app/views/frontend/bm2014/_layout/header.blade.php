<!-- ######################## Main Menu ######################## -->


<header>

	<div class="contain">
    
        <a href="/"><img class="logo" src="{{ Assets::Path('images/main_logo.png') }}" alt="Football Ticket Pad" /></a>
        
        
        
        <span class="menubtn">
        	<img class="logo" src="{{ Assets::Path('images/menubtn.png') }}" alt="Menu" />
        </span>
        
        <nav style="display:none">
            <div class="twelve columns header_nav">
                <div class="row">
                    {{ $menus }}
                </div>
            </div>
        
        </nav>
        

        <a href="/"><span class="btn loginbtn">LOGIN</span></a>
        
       
        <a href="/"><span class="btn myaccount">MY ACCOUNT</span></a>        
        
    </div>

</header>