$(function() {

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });


	//Change nav-btn-menu
	$(".nav-btn").on("click", function(){
		var hasHidden = $(".nav-menu").hasClass("hidden");

		if (hasHidden) {
			$(".nav-menu").fadeIn();
			$(".nav-menu").removeClass("hidden");
			$(".nav-btn>i").removeClass("fa-bars");
			$(".nav-btn>i").addClass("fa-times");
		}

		else if (!hasHidden) {
			$(".nav-menu").fadeOut("slow", function () {
				$(".nav-btn>i").removeClass("fa-times");
				$(".nav-btn>i").addClass("fa-bars");
				$(".nav-menu").addClass("hidden");
			});
		}

		$(".nav-menu").find("a").click(function(){
			$(".nav-btn>i").removeClass("fa-times");
			$(".nav-btn>i").addClass("fa-bars");
			$(".nav-menu").addClass("hidden");
		});
	});
});
