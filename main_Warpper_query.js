

$(document).ready(function(){
	var str = ["a[name='menu1']","a[name='menu2']","a[name='menu3']","a[name='menu4']","a[name='menu5']","a[name='menu6']"];
	
	
	function reset_menu() {
		for(var i =0; i< str.length; i++ ){
			$(str[i]).css('color','white','font-size','14px');
		}
	}
	

	reset_menu();
	$("a[name='menu1']").css('color','black','font-size','15px');



	$("a[name='menu1']").click(function(){
		reset_menu();
		$(this).css('color','black','font-size','15px');
	});

	$("a[name='menu2']").click(function(){
		reset_menu();
		$(this).css('color','black','font-size','15px');
	});

	$("a[name='menu3']").click(function(){
		reset_menu();
		$(this).css('color','black','font-size','15px');
	});

	$("a[name='menu4']").click(function(){
		reset_menu();
		$(this).css('color','black','font-size','15px');
	});

	$("a[name='menu5']").click(function(){
		reset_menu();
		$(this).css('color','black','font-size','15px');
	});

	$("a[name='menu6']").click(function(){
		reset_menu();
		$(this).css('color','black','font-size','15px');
	});

});