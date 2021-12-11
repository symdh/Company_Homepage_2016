<!DOCTYPE html>

<head>
	<?php	
		session_start();
		if(isset($_SESSION['name'])) {	
			echo "<script>alert('이미 로그인 되어 있습니다.');</script>";
			echo "<script> parent.document.location.reload(); </script>";
		}

	?>
	<meta charset="utf-8">
	<title>회원가입</title>

	<link rel="stylesheet" type="text/css" href="stylesheet.css" />
	<script type="text/javascript" src="ajax_Email.js"></script>
	<script type="text/javascript" src="watch_join.js"></script>
	<script type="text/javascript" src="check_Email.js"></script>
	

</head>

<body>
	<div id="main"> 
		<div id="wrapper">
			
			<div id="base">
				<form name="join" method="post" onSubmit="return join_form_check()" action='insert_member.php'>
					<h1>회원가입 (input your information)</h1>

					<table cellpadding='4px'>
						<tr>
							<td>
								이메일
								<p></p>
							
							</td>
							<td>
								<input type="text" size="40" name="user_email_id" placeholder="이메일을 입력해주세요" onkeydown = 'reset_checked()'> 
								<!-- 이메일 검사후 이메일 변경을 방지 -->
								<script>
									function reset_checked(){
										 document.getElementsByName("show_checked")[0].innerHTML ="<br>";
									}
								</script>
								<span name="show_checked"><br></span>
								
							</td>
						</tr>
						<tr>
							<td>비밀번호<p></p></td>
							<td>
								<input type="password" size="40" name="user_passwd" placeholder="비밀번호 (8자이상 14자이하)">
								<br><span id = "css_passwd_cf">영문자, 숫자 포함 8자 - 14자 사이 (특수문자 가능)</span>
									
							</td>
							
						</tr>
					
						<tr>
							<td>비밀번호 확인<p></p></td>
							<td>
								<input type="password" size="40" name="user_passwd2" placeholder="비밀번호 확인">
								<br><span id = "css_passwd_cf">비밀번호를 한번 더 입력해주세요. </span>
							</td>
						</tr>
						
						
						<tr>
							<td>이름</td>
							<td><input type="text" size="40" maxlength="13" name="user_name" placeholder="이름 (한글로만 입력)"></td>
							



						</tr>
						<tr>
							<td>핸드폰번호</td>
							<td>
								<input type="text" size="40" maxlength="13" name="user_phone" placeholder="- 없이 입력해주세요.">
							</td>
						</tr>
						
						<tr>
							<td>약관 동의</td>
							<td>
								<div id = "for_left">
									<input type='checkbox' id ="css_check" name='terms'>
								</div>

								<div id = "for_vertical">
									<span id="for_deco">이용약관</span>에 동의 합니다.
								</div>
							</td>
						</tr>


					</table>

					<div class="for_Center">
						<input class='blue' type=submit value="회원가입">
						<input class='red' type=reset value="가입취소">
					</div>
					



				</form>
			</div>

			<div class ="test">
				<button onclick="check_Email_JS()">중복검사
				</button>
				<p id="content"> </p>
			</div>
		</div>
	<div>

	
</body>
</html>