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
                @foreach($featureClub as $club)
                <!-- repeater -->
                <a href="/group/club/{{$club->slug}}">
                <span class="blockrow">
                	
                    <span class="date">
                    	<img src="{{ $club->value }}" alt="chelsea FC" />
                    </span>
                    
                    <span class="game">
                    	{{$club->title}}
                    </span>
                    
                    
                </span>
                </a>
                @endforeach
                <!-- repeater -->

          </span>
      	
   </div>
  <!-- ######################## top teams end ######################## -->  
 
   
</aside>