/*!
 * Start Bootstrap - Creative Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    })

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Fit Text Plugin for Main Header
    $("h1").fitText(
        1.2, {
            minFontSize: '35px',
            maxFontSize: '65px'
        }
    );

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    // Initialize WOW.js Scrolling Animations
    new WOW().init();

})(jQuery); // End of use strict

// add fields js
$('.multi-field-wrapper').each(function() {
    var $wrapper = $('.multi-fields', this);
    $(".add-field", $(this)).click(function(e) {
		if ($('.multi-field', $wrapper).length > 4) {
			alert("You can only add 5 classes at a time!");
		} else {
			$('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
		}
    });
    $('.multi-field .remove-field', $wrapper).click(function() {
        if ($('.multi-field', $wrapper).length > 1) {
            $(this).parent('.multi-field').remove();
		}
    });
});


// search.php search bar stuff
$(function() {
	/**
	* the element
	*/
	var $ui 		= $('#ui_element');

	/**
	* on focus and on click display the dropdown, 
	* and change the arrow image
	*/
	$('#start-textbox').hide();
	$('#end-textbox').hide();

	$ui.find('.sb_input').bind('focus click',function(){
		$ui.find('.sb_down')
		   .addClass('sb_up')
		   .removeClass('sb_down')
		   .andSelf()
		   .find('.sb_dropdown')
		   .show();
	});

	/**
	* on mouse leave hide the dropdown, 
	* and change the arrow image
	*/
	/*$ui.bind('mouseleave',function(){
		$ui.find('.sb_up')
		   .addClass('sb_down')
		   .removeClass('sb_up')
		   .andSelf()
		   .find('.sb_dropdown')
		   .hide();
	});*/

	$('#course-crn-checkbox').change(function() {
		if ($(this).is(':checked')) {
			$('#course-crn-textbox').show();
		} else {
			$('#course-crn-textbox').hide();
		}
	});

	$('#subject-checkbox').change(function() {
		if ($(this).is(':checked')) {
			$('#subject-textbox').show();
		} else {
			$('#subject-textbox').hide();
		}
	});

	$('#title-checkbox').change(function() {
		if ($(this).is(':checked')) {
			$('#title-textbox').show();
		} else {
			$('#title-textbox').hide();
		}
	});

	$('#day-checkbox').change(function() {
		if ($(this).is(':checked')) {
			$('#dayBox').show();
		} else {
			$('#dayBox').hide();
		}
	});

	$('#start-checkbox').change(function() {
		if ($(this).is(':checked')) {
			$('#start-textbox').show();
		} else {
			$('#start-textbox').hide();
		}
	});

	$('#end-checkbox').change(function() {
		if ($(this).is(':checked')) {
			$('#end-textbox').show();
		} else {
			$('#end-textbox').hide();
		}
	});

	$('#instructor-checkbox').change(function() {
		if ($(this).is(':checked')) {
			$('#instructor-textbox').show();
		} else {
			$('#instructor-textbox').hide();
		}
	});

	$('#location-checkbox').change(function() {
		if ($(this).is(':checked')) {
			$('#location-textbox').show();
		} else {
			$('#location-textbox').hide();
		}
	});
});