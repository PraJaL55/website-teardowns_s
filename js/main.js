// When the DOM is ready, run this function
$(document).ready(function() {
    "use strict"; // Start of use strict

	
    new WOW().init();

	
$('.quote-carousel').slick({
  centerMode: true,
  slidesToShow: 3,
  dots:false,
  arrows:false,
  responsive: [
    {
		
      breakpoint: 992,
      settings: {
	   centerMode: false,
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
		centerMode: false,
        slidesToShow: 1
      }
    }
  ]
});

$(".score-item1").click(function(){
    $(".score-body").removeClass("active");
    $(".score-item1-info").addClass("active");
});

$(".score-item2").click(function(){
    $(".score-body").removeClass("active");
    $(".score-item2-info").addClass("active");
});

$(".score-item3").click(function(){
    $(".score-body").removeClass("active");
    $(".score-item3-info").addClass("active");
});

$(".score-item4").click(function(){
    $(".score-body").removeClass("active");
    $(".score-item4-info").addClass("active");
});

$(".score-item5").click(function(){
    $(".score-body").removeClass("active");
    $(".score-item5-info").addClass("active");
});

$(".score-item6").click(function(){
    $(".score-body").removeClass("active");
    $(".score-item6-info").addClass("active");
});

$(".score-item7").click(function(){
    $(".score-body").removeClass("active");
    $(".score-item7-info").addClass("active");
});

$(".score-item8").click(function(){
    $(".score-body").removeClass("active");
    $(".score-item8-info").addClass("active");
});

$(".score-item9").click(function(){
    $(".score-body").removeClass("active");
    $(".score-item9-info").addClass("active");
});

$(".score-item10").click(function(){
    $(".score-body").removeClass("active");
    $(".score-item10-info").addClass("active");
});

$('.side-nav').hover(
       function(){ $(this).addClass('active') },
       function(){ $(this).removeClass('active') }
)


	
$(".image-nav").click(function(){
    $(".project-single-frame > div").removeClass("active");
    $(".frame-image").addClass("active");
});

$(".video-nav").click(function(){
    $(".project-single-frame > div").removeClass("active");
    $(".frame-video").addClass("active");
});

$(".ss-nav").click(function(){
    $(".project-single-frame > div").removeClass("active");
    $(".frame-slideshare").addClass("active");
});
	
// Fixed Header
$(window).scroll(function() {
    var value = $(this).scrollTop();
    if (value > 80)
        $(".home .navbar-scroll").css("top", "0px");
    else
        $(".home .navbar-scroll").css("top", "-150px");
});
	
		
});


    $('.progress-percentage').bind('inview', function(event, visible) {
      if (visible) {
        $(this).removeClass("load");
      }
    });

	if (!window.matchMedia || (window.matchMedia("(min-width: 1051px)").matches)) {

    // Anchor Smooth Scroll
    $('body').on('click', '.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 100)
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
	
	
}


if (!window.matchMedia || (window.matchMedia("(max-width: 1050px)").matches)) {

    // Anchor Smooth Scroll
    $('body').on('click', '.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 180)
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

    $('[data-toggle="tooltip"]').tooltip(); 
	
	
}
