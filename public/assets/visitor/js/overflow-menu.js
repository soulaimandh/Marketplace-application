// debulked onresize handler
function on_resize(c,t){onresize=function(){clearTimeout(t);t=setTimeout(c,100)};return c};

/*

Goal: As the viewport width decreases, take any links that don't fit in the horizontal menu bar and move them into a vertical dropdown menu.

This should also run on load, but right now it's only on (throttled) resize...

*/

$('#more').hide();

function overflow_menu(){
  // horizontal room we have to work with (the container)
  // this value doesn't change until we resize again
	var navSpace = $('#links').outerWidth();
  
  // calc the combined width of all links currently in the horizontal menu  
  var linksWidth = 0;
  $('#links > a').each(function() {
    linksWidth += $(this).outerWidth();
  });
  
  // now let's compare them to see if all the links fit in the container...
	if( linksWidth > navSpace ) {
		
    // uh oh, the width of the links is greater than the width of their container...
    
    // keep moving links from the menu to the overflow until the combined width is less than the container...
    while( linksWidth > navSpace ) {

      var lastLink = $('#links > a:last'); // get the last link
      var lastLinkWidth = lastLink.outerWidth(); // get its width...
      $(lastLink).data( 'foo', lastLinkWidth ); // store the width (so that we can see if it fits back in the space available later)
      $('#overflow').prepend(lastLink); // pop the link and push it to the overflow
		  linksWidth = linksWidth - lastLinkWidth; // recalc the linksWidth since we removed one

    }
    
    $('#more').show(); // make sure we can see the overflow menu
    $('#more-label').text( '>' ); // update the hidden link count
		
  } else {
    
    // shazam, the width of the links is less than the width of their container...
    // let's move links from the overflow back into the menu until we run out of room again...
    
    while( linksWidth <= navSpace ) {
    
      var firstOverflowLink = $('#overflow > a:first');
      var firstOverflowLinkWidth = firstOverflowLink.data('foo');
      if( navSpace - linksWidth > firstOverflowLinkWidth ) {
        $('#links').append(firstOverflowLink);
      }
      linksWidth = linksWidth + firstOverflowLinkWidth; // recalc the linksWidth since we added one
      
    }
    
    $('#more-label').text( '>' ); // update the hidden link count
    
    // should we hide the overflow menu?
    if( $('#overflow > a').length == 0 ){
      $('#more').hide();
    }

  } // end else
}
on_resize( function() {
	overflow_menu();
});

overflow_menu();




