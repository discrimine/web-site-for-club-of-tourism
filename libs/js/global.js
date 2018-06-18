function stopScroll(){
	if ($(".more_info").is(":visible")){
		document.onmousewheel = function(e) {
			return true;
		}
	}if (!$(".more_info").is(":visible")){
		document.onmousewheel = function(e) {
			e.preventDefault();
		}
	}	
}	
$(document).ready(function(){
	var place_number, event_name;
	$(".bus td").click(function(){
		if ($(this).hasClass("free")){
			$("body").addClass("fixed");
			stopScroll();
			$(".more_info, .mask").show();
			place_number = $(this).text();
			event_name = $("#event_title").text();
			$(".event_title").text(event_name + ", " + place_number+" місце");
			return place_number, event_name;
		}
	});
	$(".mask, .more_info__close").click(function(){
		stopScroll();
		$(".more_info, .mask").hide();
		$("body").removeClass("fixed");
	});
	$("input[name='bus_submit']").click(function(){
		var tour_id = window.location.toString().substr(36,36).split("#")[0];
		$(".bus_valid").text("");
		$(".bus_valid").css("color","red");
		if($("input[name='client_surname']").val() == "" ){
			$(".bus_valid").text("Будь ласка, введіть прізвище");
		}else if($("input[name='client_name']").val() == "" ){
			$(".bus_valid").text("Будь ласка, введіть ім'я");	
		}else if($("input[name='client_tel']").val() == "" ){
			$(".bus_valid").text("Будь ласка, введіть номер телефону");
		}else if(!$("input[name='client_checkbox']").is(":checked")){
			$(".bus_valid").text("Заповніть обов'язкові поля");
		}else{
			var client_name, client_birth, client_passport, client_tel, client_mail;
			client_name = $("input[name='client_name']").val();
			client_surname = $("input[name='client_surname']").val();
			client_birth = $("input[name='client_birth']").val();
			client_passport = $("input[name='client_passport']").val();
			client_tel = $("input[name='client_tel']").val();
			client_mail = $("input[name='client_mail']").val();
			db_name = $("input[name='db_name']").val();
			$.post("backend/bus_callback.php?id=", {tour_id:tour_id,db_name:db_name,event_name:event_name,bus_place:place_number,client_surname:client_surname,client_name:client_name, client_birth: client_birth, client_passport: client_passport, client_tel:client_tel, client_mail:client_mail })
			.done(function(){
				$(".bus_valid").css("color","green");
				$(".bus_valid").text("успішно заброньовано");
				$(".bus td").each(function(){
					if ($(this).text() == place_number){
						$(this).addClass("td_service");	
					}
				});
			});
		}
	})

	$(".bus td").click(function(e){
		
	});
	$('#nav-icon4').click(function(){
		$(this).toggleClass('open');
		$(".menu_mobile_container").toggle();
	});
	$(".t686__link").css("text-decoration","none");
	$(".single_image").fancybox({
		closeClickOutside : true,
	});
	/* plan block anim */
});