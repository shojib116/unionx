$(document).ready(function() {
	var modal = $('#id01');
	$(window).click(function(event) {
			if(event.target==modal) {
				modal.style.display = "none";
			}
	});

	var signupmodal = $('#id02');
	$(window).click(function() {
		if(event.target==signupmodal) {
			signupmodal.style.display = "none";
		}
	});

	var dropdown = $('#myDropdown');
	$(window).click(function() {
		if(event.target.matches("#myDropdown")) {
			dropdown.style.display = "none";
		}
	});

	var enrollmodal = $('#subscriptionChoice')[0];
	$(window).click(function() {
		if(event.target==enrollmodal) {
			enrollmodal.style.display = "none";
		}
	});
});

$(document).ready(function() {
	$("#dropbtn").on('click', function() {
		$("#myDropdown").toggle();
	});
});

$(document).ready(function() {
	$(".slider").slick({
		centerMode: false,
		dots: false,
		infinite: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true
	});
});

$(document).ready(function() {
		$(".weeks-contents-extras a").click(function(e) {
			e.preventDefault();
		});
		var hideAllExcept = function(id) {
			$('li').filter(function() {
    		return this.id.match(/^week.$/);
  		}).removeClass("active");
			$('li').filter(function() {
    		return this.id.match(/^week.$/);
  		}).css("padding-left", "30px");
			$('div').filter(function() {
    		return this.id != id && this.id.match(/^week.-contents$/);
  		}).slideUp();
		}
		$('li').filter(function() {
			return this.id.match(/^week.$/);
		}).click(function() {
			var tempId = this.id+"-contents";
			hideAllExcept(tempId);
			$("#"+this.id).addClass("active");
			$("#"+this.id).css("padding-left", "25px");
			if($("#"+tempId).css("display") == "block") {
				$("#"+this.id).removeClass("active");
				$("#"+this.id).css("padding-left", "30px");
			}
			$("#"+tempId).slideToggle();
		});

		var sideNav = $(".sidenav").width();
		$('#toggler-btn').click(function() {
			if($(".sidenav").width() != 0) {
				$(".sidenav").animate({width: 0}, 500);
				$(".sidenav").children().fadeOut("fast");
			} else {
				$(".sidenav").animate({width: sideNav}, 500);
				$(".sidenav").children().fadeIn(1000);
			}
		});
});

$(document).ready(function() {
	$("#enrollbtn").on('click', function() {
		var id = Number($('#unionxid').val());
		if(isNaN(id)) {
			$("#id01").css("display", "block");
			$("#errorText").text("Login first");
		} else {
			$("#subscriptionChoice").css("display", "block");
		}
	});

	$("#enrollbtnTop").on('click', function() {
		var id = Number($('#unionxid').val());
		if(isNaN(id)) {
			$("#id01").css("display", "block");
			$("#errorText").text("Login first");
		} else {
			$("#subscriptionChoice").css("display", "block");
			alert("clicked");
		}
	});
	$("#closeEnrollModal").on('click', function() {
		$("#subscriptionChoice").css("display", "none");
	});

	$(".enroll-options-form").submit(function(event) {
		event.preventDefault();
		var serializedData = $("form").serialize();
		var submit = $(".submit-enroll-choice").val();

		if (serializedData == "enroll-option=freeEnroll") {
			var userId = Number($('#unionxid').val());
			var courseId = Number($('#courseid').val());
			$.post("includes/courseEnrollment.inc.php", {
				userid: userId,
				courseid: courseId,
				submit: submit
			}, function(data, status) {
				location.reload();
			});
		} else {
			location.href= "subscription.php";
		}
	});
});
