
$(document).ready(function() {
  $('.icon-three').click(function() {
    $('.icon-three').toggleClass('active-three');
  });
})

$(document).ready(function() {
  $('.navbar-nav>li>a.c-link').on('click', function(){
    $('.navbar-collapse').collapse('hide');
  });
  
  $('.navbar-toggler').click(function() {
	  $('body').toggleClass('overflow-hidden');
  });
  
  $('.navbar-nav>li>a.c-link').on('click', function(){
    $('body').removeClass('overflow-hidden');
	 $('.icon-three').removeClass('active-three');
  });
  
  $('.dc-link').on('click', function(){
		$('.navbar-collapse').collapse('hide');
		$('body').removeClass('overflow-hidden');
		$('.icon-three').removeClass('active-three');
	});
  
});

$(document).ready(function() {
  var headerHeight = $('.header').outerHeight(); // get the height of the fixed header
  $('body').css('padding-top', headerHeight); // set the padding-top of the section to the header height
});

$('.header ul li a').click(function(){
	$('.header ul li a').removeClass('active');
	$(this).addClass('active');
})


const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
