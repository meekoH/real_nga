// Functionality

var scrollInit = function() {
    var scrollTop = $(this).scrollTop();

    // Fixing the Navigation
    // var introSection = $('.fix-catch');
    var introPos = $('.fix-catch').offset().top;
    if (scrollTop > introPos) {
    	$('header').addClass('fixed');
    } else {
    	$('header').removeClass('fixed');
    }
}

$('#navBtn').click(function (){
    $('#navIcon').toggleClass('opened');
    $('#resNavIcon').toggleClass('opened');
    $('.responsive-nav').toggleClass('opened');
    $('body').toggleClass('opened');
});
$('#resNavBtn').click(function (){
    $('#resNavIcon').toggleClass('opened');
    $('#navIcon').toggleClass('opened');
    $('.responsive-nav').toggleClass('opened');
    $('body').toggleClass('opened');
});

$(window).scroll(scrollInit);
$(window).resize(scrollInit);
setTimeout(scrollInit, 1000);

// Initiate the Smooth Scroll
smoothScroll.init({
	speed: 500,
	easing: 'easeInOutQuad',
	offset: 0,
	updateURL: false,
	callbackBefore: function ( toggle, anchor ) {},
	callbackAfter: function ( toggle, anchor ) {}
});

$(window).load(function() {
    $('.header-slider').flexslider({
        animation: "fade",
        slideshowSpeed: 5000,
        randomize: true
    });
    $(".home-video").fancybox({
        helpers: {
            overlay: {
                locked: false
            }
        },
        maxWidth    : 800,
        maxHeight   : 600,
        fitToView   : false,
        width       : '100%',
        height      : '100%',
        autoSize    : false,
        closeClick  : false,
        openEffect  : 'none',
        closeEffect : 'none'
    });
});