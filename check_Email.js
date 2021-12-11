

function check_Email_JS() {

	var email = document.getElementsByName("user_email_id")[0];
	
	if(email.value==""){
		alert("이메일을 입력하세요");
		email.focus();
		return false;
	}

	var result = email.value.split("@"); 

	if( result.length !=2 ) {
		alert("올바른 이메일을 입력하세요.");
		return false;
	} else if( result[0].length < 4  ) {
		alert("올바른 이메일을 입력하세요.");
		return false;
	} else if ( result[1].length < 3  ){
		alert("올바른 이메일을 입력하세요.");
		return false;
	} else {
		var result_2 = result[1].split("."); 
	}
	
	if ( result_2.length != 2 ){
		alert("올바른 이메일을 입력하세요.");
		return false;
	} else if ( result_2[1].length < 2 ){
		alert("올바른 이메일을 입력하세요.");
		return false;
	}

	var special = ' ~!#$%^&*()-_=+|₩₩{}[];:"₩"<>,?₩/'; 
	for(var i = 0 ; i < email.value.length; i++){
		var email_check = email.value.charAt(i); 
		
		if(email_check >= "ㅏ" && email_check <= "히" || email_check >="ㄱ" && email_check <="ㅎ"){
			alert("이메일에는 한글이 안됩니다.");
			email.focus();
			return false;
		}
		
		for(var j=0; j<special.length;j++) { 
			if(email_check == special.charAt(j)) { 
				alert("이메일에는 특수 문자가 안됩니다.");
				email.focus();
				return false;
			}
		}
	}
	

	var user_email_id =  document.getElementsByName("user_email_id")[0];
	check_Email_PHP(user_email_id.value);

}


