<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>로그인 페이지</title>
	
	<?php
		session_start();
		if(isset($_SESSION['name'])) {
			echo "<script>alert('이미 로그인 되어 있습니다.');</script>";
			echo "<script> parent.document.location.reload(); </script>";
		 
		
		}
	?>

</head>
<body>
	<form name="login" method="post" action="try_login.php">
		<div width=1200 align=center> <br>
		이메일
		<input type='text' name='user_email' size='15' ><br> 
        패스워드
        <input type='password' name='user_passwd' size='10'><br> <br>

        <input type='submit' value="로그인" size ='5'>
        <input type='reset' value="취소" size = '5' >
		</div>
    </form>	
</body>
</html>
