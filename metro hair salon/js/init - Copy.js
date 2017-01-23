(function($){
  $(function(){

    $('.button-collapse').sideNav();
	$('.modal').modal();
	$('.carousel').carousel();
	$('.carousel').carousel({full_width: true});
	$('select').material_select();
	
  }); // end of document ready
})(jQuery); // end of jQuery name space


// Appointment Drawer //
$(document).ready(function(){
    $(".appointment-button").click(function(){
        $(".appointment-drawer").slideToggle(300);
		$(".appointment-dimmer").toggle();
		$(".contact-drawer").slideUp(300);
		$(".contact-dimmer").hide();
		$("#first_name").focus();
    });
});

$(document).ready(function(){
    $(".appointment-dimmer").click(function(){
        $(".appointment-drawer").slideToggle(300);
		$(".appointment-dimmer").toggle();
		$(".contact-drawer").slideUp(300);
		$(".contact-dimmer").hide();
    });
});

// Contact Drawer //
$(document).ready(function(){
    $(".contact-button").click(function(){
        $(".contact-drawer").slideToggle(300);
		$(".contact-dimmer").toggle();
		$(".appointment-drawer").slideUp(300);
		$(".appointment-dimmer").hide();
    });
});

$(document).ready(function(){
    $(".contact-dimmer").click(function(){
        $(".contact-drawer").slideToggle(300);
		$(".contact-dimmer").toggle();
		$(".appointment-drawer").slideUp(300);
		$(".appointment-dimmer").hide();
    });
});

