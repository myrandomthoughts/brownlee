/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
	window.getComputedStyle = function(el, pseudo) {
		this.el = el;
		this.getPropertyValue = function(prop) {
			var re = /(\-([a-z]){1})/g;
			if (prop == 'float') prop = 'styleFloat';
			if (re.test(prop)) {
				prop = prop.replace(re, function () {
					return arguments[2].toUpperCase();
				});
			}
			return el.currentStyle[prop] ? el.currentStyle[prop] : null;
		}
		return this;
	}
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {

	//lawyer search lawyer name
	$('#lawyer-name-search-select').on('change', function() {
		if(this.value !='name'){	
		  	window.location = this.value; // or $(this).val()
		}  	
	});

	$('#lawyer-search-submit').on('click', function(e) {
		e.preventDefault();
		var lname = $('#lawyer-name-search-text').val();
		var location = $('#lawyer-location-search-select').val();
		var pa = $('#lawyer-pa-search-select').val();
		var loc = document.location.origin + '/search-results?lawyer='+ lname +'&location='+ location +'&pa='+pa;
		window.location = loc
	});
	//window.location = url;
	
	/*
	Responsive jQuery is a tricky thing.
	There's a bunch of different ways to handle
	it, so be sure to research and find the one
	that works for you best.
	*/
	
	/* getting viewport width */
	var responsive_viewport = $(window).width();
	
	/* if is below 481px */
	if (responsive_viewport < 481) {
	
	} /* end smallest screen */
	
	/* if is larger than 481px */
	if (responsive_viewport > 481) {
	
	} /* end larger than 481px */
	
	/* if is above or equal to 768px */
	if (responsive_viewport >= 768) {
	
		/* load gravatars */
		$('.comment img[data-gravatar]').each(function(){
			$(this).attr('src',$(this).attr('data-gravatar'));
		});
		
	}
	
	/* off the bat large screen actions */
	if (responsive_viewport > 1030) {
	
	}
	
	
	// add all your scripts here
	
 
}); /* end of as page load scripts */

/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
	var doc = w.document;
	if( !doc.querySelector ){ return; }
	var meta = doc.querySelector( "meta[name=viewport]" ),
		initialContent = meta && meta.getAttribute( "content" ),
		disabledZoom = initialContent + ",maximum-scale=1",
		enabledZoom = initialContent + ",maximum-scale=10",
		enabled = true,
		x, y, z, aig;
	if( !meta ){ return; }
	function restoreZoom(){
		meta.setAttribute( "content", enabledZoom );
		enabled = true; }
	function disableZoom(){
		meta.setAttribute( "content", disabledZoom );
		enabled = false; }
	function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
		if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );

// Front Page Slider

jQuery(document).ready(function(){
  jQuery('.slider1').bxSlider({
    mode: 'fade',
    slideWidth: 936,
    minSlides: 1,
    maxSlides: 1,
    slideMargin: 0,
  	controls: false
  });
});

//Lawyer Bios

jQuery(document).ready(function() {
    //hiding tab content except first one
    jQuery(".tabContent").not(":first").hide(); 
    // adding Active class to first selected tab and show 
    jQuery("ul.tabs li:first").addClass("active").show();  
 
    // Click event on tab
    jQuery("ul.tabs li").click(function() {
        // Removing class of Active tab
        jQuery("ul.tabs li.active").removeClass("active"); 
        // Adding Active class to Clicked tab
        jQuery(this).addClass("active"); 
        // hiding all the tab contents
        jQuery(".tabContent").hide();        
        // showing the clicked tab's content using fading effect
        jQuery(jQuery('a',this).attr("href")).fadeIn('slow'); 
 
        return false;
    });
 
     // Click event on View All
    jQuery("#showall").click(function() {
    	jQuery(".tabContent").css({display: "block"});
    });

});


// Modal

function overlay() {
	el = document.getElementById("modal-form");
	el.style.display = (el.style.display == "block") ? "none" : "block";
}
