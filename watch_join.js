
	
function join_form_check(){
	var click_email_check_true = document.getElementById("css_email_cf_true");
	var click_email_check_false = document.getElementById("css_email_cf_false");

	if(click_email_check_false != null){
		alert("이미 사용중인 이메일 입니다.");
		document.getElementsByName("user_email_id")[0].focus();
		return false;
	} else if(click_email_check_true == null){
		alert("이메일 중복검사를 해주세요.");
		document.getElementsByName("user_email_id")[0].focus();
		return false;
	}

	var passwd = document.getElementsByName("user_passwd")[0];
	var passwd2 = document.getElementsByName("user_passwd2")[0];
	var check_passwd = /[a-zA-Z][1-9]|[1-9][a-zA-Z]/;

	var check_space = passwd.value.match(' ');
	if (check_space != null){
		alert("비밀번호에 빈칸(스페이스)는 사용할 수 없습니다.");
		passwd.focus();
		return false;
	}
	
	if(passwd.value==""){
		alert("비밀번호를 입력하세요");
		passwd.focus();
		return false;
	} else if( passwd.value.length > 14 || passwd.value.length < 8 ) {
		alert("비밀번호는 8~14자 입니다.");	
		passwd.focus();
		return false;
	} else if(passwd2.value==""){
		alert("비밀번호를 입력하세요");
		passwd2.focus();
		return false;
	} else if(passwd.value != passwd2.value) { 
		alert("비밀번호가 일치하지 않습니다.");
		passwd2.focus();
		return false;
	} else {
		var result_passwd = check_passwd.test(passwd.value); 
	}

	if (!result_passwd){
		alert("최소 한자이상의 영문자와 숫자를 입력해주세요.");
		passwd.focus();
		return false;
	} 
    

	var name = document.getElementsByName("user_name")[0];
	var check_name = /^[가-힣]{2,10}$/;

	if(name.value==""){
		alert("이름을 입력하세요");
		name.focus();
		return false;
	}
	
	var result = check_name.test(name.value);
	if(!result){
		alert("이름은 한글로 정확히 써주세요.");
		name.value="";
		name.focus();
		return false;
	}
	
	var phone= document.getElementsByName("user_phone")[0];

	if(phone.value==""){
		alert("핸드폰 번호를 입력하세요");
		phone.focus();
		return false;
	}

	var check_phone_sp = phone.value.match('-');
	if (check_phone_sp != null){
		alert("핸드폰번호는 - 없이 입력해 주세요.");
		phone.focus();
		return false;
	}
	
	if(phone.value.length != 11 ){ 
		alert("핸드폰번호를 정확히 입력해주세요.");
		phone.focus();
		return false;
	}

	var result_phone = phone.value.match(/[0-9]+/);
	if (phone.value != result_phone){
		alert("핸드폰번호는 숫자만 입력해주세요.");
		phone.focus();
		return false;
	}

	var term = document.getElementsByName("terms")[0];
	if (!term.checked){
		alert("약관동의를 하셔야 가입 가능합니다.");
		term.focus();
		return false;
	}

	alert("가입에 성공 하셨습니다.");
}

