$(document).ready(function() {
	$('img.achievements_button').hover(function() {
		$(this).attr("src", "../assets/hall-of-fame/achievements_txt_btn_hover.png");
	}, function() {
		$(this).attr("src", "../assets/hall-of-fame/achievements_txt_btn.png");
	});
	$('img.achievements_button').mousedown(function() {
		$(this).attr("src", "../assets/hall-of-fame/achievements_txt_btn_down.png");
	});

	$('img.individuals_button').hover(function() {
		$(this).attr("src", "../assets/hall-of-fame/individuals_txt_btn_hover.png");
	}, function() {
		$(this).attr("src", "../assets/hall-of-fame/individuals_txt_btn.png");
	});
	$('img.individuals_button').mousedown(function() {
		$(this).attr("src", "../assets/hall-of-fame/individuals_txt_btn_down.png");
	});
});