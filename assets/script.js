var navDisplacement = $(".navDisplacement");

$(document).ready(function() 
{
	// scrolling from arrow
	navDisplacement.on("click", function(e) {
		scrollToContents(e);
	});

	// slider
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var sliderUlWidth = slideCount * slideWidth;
	var sliderStatus = $("#slider #status");
	var delay = 10000;

	animateStatus(delay);

    var interval = setInterval(function () {
    	animateStatus(delay);
        moveRight();
    }, delay);

	$('#slider').css({ width: slideWidth });
	
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

	$('#slider ul li').css({ width: slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 1000, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 1000, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function animateStatus( delay ) {
    	sliderStatus.stop();
    	sliderStatus.css({width : '0'});
        sliderStatus.animate({
        	width: '100%'
        }, delay, 'linear');
    }

    function clearStatus() {
    	clearInterval(interval);
        sliderStatus.stop();
        sliderStatus.css({display : 'none'});
    }

    $('#slider .control-prev').click(function ( e ) {
        e.preventDefault();
        clearStatus();
        moveLeft();
    });

    $('#slider .control-next').click(function ( e ) {
    	e.preventDefault();
        clearStatus();
        moveRight();
    });
});

	function scrollToContents(e) {
		e.preventDefault();
		$("body, html").animate({ 
	        scrollTop: navDisplacement.offset().top 
	    }, 1000);
	}