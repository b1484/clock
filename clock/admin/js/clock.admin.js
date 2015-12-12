$("#red").click(function(){
	var user_id = $(this).attr('rel');
	diafan_ajax.init({
		data:{
			action: "red",
			module: "clock",
			user_id: user_id
		},
		
	});alert ("выбран красный цвет, обновите страницу на сайте");
});
$("#green").click(function(){
	var user_id = $(this).attr('rel');
	diafan_ajax.init({
		data:{
			action: "green",
			module: "clock",
			user_id: user_id
		},
		
	});alert ("выбран зеленый цвет, обновите страницу на сайте");
});
$("#blue").click(function(){
	var user_id = $(this).attr('rel');
	diafan_ajax.init({
		data:{
			action: "blue",
			module: "clock",
			user_id: user_id
		},
		
	});alert ("выбран синий цвет, обновите страницу на сайте");
});