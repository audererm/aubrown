(function($){
  $(function(){

    $('.button-collapse').sideNav();
	$('.modal').modal();
	$('.carousel').carousel();
	$('.carousel').carousel({full_width: true});
	$('select').material_select();
	$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
	
  }); // end of document ready
})(jQuery); // end of jQuery name space

