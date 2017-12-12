
var ww = document.body.clientWidth;

$(document).ready(function() {
	$(".nav li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
	
	$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".nav").toggle();
	});
	adjustMenu();
	
	
	$(".nav li a").on("click", null, null, function (e) {
		//e.preventDefault();
		var ww = document.body.clientWidth;
	    var mRef = $(this).attr("href");
	
        console.log(mRef);
        if (mRef=="http://www.boulder-project.de/#news"){
        window.location.href = mRef;
         }
         
		if (ww < 800) {
		$(".nav").toggle();
		  }
		//resetActiveClass();		
		//$(this).toggleClass("current");
	});
	
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var resetActiveClass = 	function(){
		$(".nav li a").each(function() {
			$(this).removeClass("current");
		})
	}

var adjustMenu = function() {
	if (ww < 800) {
		$(".toggleMenu").css("display", "inline-block");
		if (!$(".toggleMenu").hasClass("active")) {
			$(".nav").hide();
		} else {
			$(".nav").show();
		}
		$(".nav li").unbind('mouseenter mouseleave');
		$(".nav li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww >= 800) {
		$(".toggleMenu").css("display", "none");
		$(".nav").show();
		$(".nav li").removeClass("hover");
		$(".nav li a").unbind('click');
		$(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		});
	}
}

