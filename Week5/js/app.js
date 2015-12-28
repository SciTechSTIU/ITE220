$(function(){
	var app = {
		init: function() {
			app.init_effect();
			app.init_event();
		},

		init_effect: function() {
			$("#head_tagline").height(200);
			$("#head_tagline>h1").hide().fadeIn(700);
			$("#head_tagline>p:first").hide().delay(700).fadeIn(700);
			$("#head_tagline>p:last").hide();
			$("#head_tagline>a").hide().delay(1400).fadeIn(700);
		},

		init_event: function() {
			$("#head_tagline>a:first").on("click", function() {
				$("#head_tagline>p:last").fadeIn(700);
				$("#head_tagline").height(320);
			});

			$("#head_tagline>a:last").on("click", function() {
				$("#head_tagline>p:last").hide();
				$("#head_tagline").height(200);
			});

			$(".error").hide();

			$("#form-submit").on("click", function() {
				var name = $("#form-name").val();
				if (!$.isNumeric(name)) {
					$(".error:eq(0)").show();
				} else {
					$(".error:eq(0)").hide();
				}
				var num = $("#form-number").val();
				if (!$.isNumeric(num)) {
					$(".error:eq(1)").show();
				} else {
					$(".error:eq(1)").hide();
				}
				var msg = $("#form-message").val();
				if (!$.isNumeric(msg)) {
					$(".error:eq(2)").show();
				} else {
					$(".error:eq(2)").hide();
				}
			});

			$(".image-flip").flip({
			axis: 'y',
			trigger: 'hover'
			});

		}
	};
	app.init();
});
