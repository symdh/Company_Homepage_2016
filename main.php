<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="basic_stylesheet.css" />
	<link rel="stylesheet" type="text/css" href="top_Menu.css" />

	<script src="http://code.jquery.com/jquery-latest.js"> </script>
	<script type="text/javascript" src="main_Warpper_query.js"></script>
	
	<?php
		session_start();
		if(isset($_SESSION['name'])) {	
			echo "<script>$(document).ready(function(){ $('#login').html('안녕하세요. ".$_SESSION['name']."님 <br><br><span id=\'oki\'><a href=\'logout.php\'>로그아웃</a> </span>'); }); </script>" ;
			
		}
	?>

	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body id="base_Setting">
	
	<div id ='simple_bg'>
		<div id = "brand_Dv">
			<div id = "brand_Size">
				<a href='./iframe_page/insert_main.html' target='body' ><img src="./img/logo.png" /></a>
			</div>
		</div>

		<div id="top_M">
			<div id = "menu_D">
				<ul  id = "menu_Size">
					<li><a name='menu1' href="./iframe_page/insert_main.html" target="body">HOME</a></li>
					<li><a name='menu2' href="./iframe_page/product.php" target="body">제조 & 견적</a></li>
					<li><a name='menu3' href="./iframe_page/buySell.php" target="body">Buy & sell</a></li>
					<li><a name='menu4' href="./iframe_page/cooperate.html" target="body">제휴회사 </a></li>
					<li><a name='menu5' href="./iframe_page/introduce.html" target="body">회사소개</a></li>
					<li><a name='menu6' href="./iframe_page/help.html" target="body">문의</a></li>

					 <br> <br> <span style="color:write;" id ='login' onload="check()"> <a href='./login_page.php' target="body">로그인</a>
					&nbsp <a href='./join_member.php' target="body">회원가입</a></span> 
				</ul>
			</div>
		</div>
	</div>
	
	<div class='for_center'>
		<iframe src="./iframe_page/insert_main.html" onload="autoResize()" scrolling="no" name="body" frameborder=0 marginwidth=0 marginheight=0></iframe>
	</div>

	<script language='javascript'> 
		
		function autoResize() { 
			 // IFRAME 에러방지를 위해 0으로 초기화
			 document.getElementsByName('body')[0].height = 0;

			var the_height=document.getElementsByName('body')[0].contentWindow.document.body.scrollHeight;  
			document.getElementsByName('body')[0].height=the_height+50; 
		} 
		
	</script> 

	<div id="bottom_Dv">
		<div class="bottom_Sp">
			<b>Betago(주)</b> <br>
			(13487) 서울시 노원구 공릉로 232 미래관 (공릉동)<br> 
			<b>대표이사</b>:홍길동 &nbsp&nbsp &nbsp 
			<b>사업자등록번호</b>:104-86-36968 <br>
			<b>사업자정보확인통신판매업신고</b>: 2016-서울공릉-0025 <br>
			<b>Tel</b>: 02-970-6190 &nbsp&nbsp &nbsp &nbsp &nbsp 
			<b>Fax</b>: 02-849-4962
		</div>

		<div class="bottom_Sp">
			<b>전자금융거래분쟁담당</b> <br> 
			<b>Tel</b> : 02-970-6190<br> 
			<b>Fax</b> : 02-970-6191<br> 
			<b>E-mail</b> : symdhnv@naver.com
		</div>

		<div class="bottom_Sp">
			<b>만든이 : 13109344 심두현, 12113345 이동혁</b> <br>
			<b>프로그래밍 총괄</b> : 심두현, <b>기획 총괄</b> : 이동혁<br> 
			<b>문의</b> : symdhnv@naver.com &nbsp&nbsp &nbsp topleee0718@hanmail.net <br> 
			<b>문의 번호</b> : 010-4292-1185
		</div>
	</div>


  
</body>
</html>
