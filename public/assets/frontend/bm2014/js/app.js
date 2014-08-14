;(function ($, window, undefined) {
  'use strict';

  var $doc = $(document),
      Modernizr = window.Modernizr;

  
  $.fn.foundationAlerts           ? $doc.foundationAlerts() : null;
  $.fn.foundationAccordion        ? $doc.foundationAccordion() : null;
  $.fn.foundationTooltips         ? $doc.foundationTooltips() : null;
  $('input, textarea').placeholder();
  
  
  $.fn.foundationButtons          ? $doc.foundationButtons() : null;
  
  
  $.fn.foundationNavigation       ? $doc.foundationNavigation() : null;
  
  
  $.fn.foundationTopBar           ? $doc.foundationTopBar({breakPoint: 940}) : null;
  
  
  $.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
  
    
    $.fn.foundationTabs             ? $doc.foundationTabs() : null;
    
  
  
    $("#featured").orbit();
  

  // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
  // $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
  // $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
  // $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
  // $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});

  // Hide address bar on mobile devices
  if (Modernizr.touch) {
    $(window).load(function () {
      setTimeout(function () {
        window.scrollTo(0, 1);
      }, 0);
    });
  }
  
  
  
  //menu toggle
  $( ".menubtn" ).click(function() {
	$( ".header_nav" ).slideToggle( "slow", function() {
	// Animation complete.
	});
	$( this ).toggleClass ('active')
  });
  
  
  //accordion for faq page
  $('#accordion').find('.accordion-toggle').click(function(){
	  
	  
	  //Hide the other panels
      $(".accordion-toggle").not($(this).next()).removeClass ('active');
	  
	  //Expand or collapse this panel
      $(this).addClass ('active');
	  	
      //Expand or collapse this panel
      $(this).next().slideToggle('slow');

      //Hide the other panels
      $(".accordion-content").not($(this).next()).slideUp('slow');
	  
	});

  	//fade in animation
    $( ".team-summary" ).delay(1000).fadeIn(2200);
	$( ".fadeIn" ).delay(500).fadeIn(1800);
	
	//odd even
	$ ('.blockrow:even').addClass ('even');
    $ ('.blockrow:odd').addClass ('odd');

})(jQuery, this);
