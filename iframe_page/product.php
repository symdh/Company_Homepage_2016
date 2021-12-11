<!doctype Html>
<Html>
<Head>
	<Meta Charset="Utf-8">
	<link rel="stylesheet" type="text/css" href="product_stylesheet.css" />
	<?php
		session_start();
		if(isset($_SESSION['name'])) {	
			echo "<script> function check_login(){ alert('".$_SESSION['name']."님 요청 완료 했습니다.');} </script>" ;
			
		} else {
			echo "<script> function check_login(){ alert('로그인 후 이용 가능 합니다.');} </script>";
		}
	?>



<Title>Ship 제조</Title>
</Head>
<Body>
	<div id='basic_setting'>
		<div id ='first_text_area'>
			<br>

			<p class = 'sub_title'>
			선박 제조서비스 <hr> 
			</p>
			
			<div id ='detail_edu'>
				<p class = 'edu'>다양한 선박제조 회사로부터의 경쟁을 통한 입찰 시스템 <a href='./cooperate.html'><span id='blue'>(제휴회사 보러가기)</span></a></p>
				<p class = 'edu' id ='red'>온라인 상담 무료! </p>
			</div>
			
			
			<table>
				<tr>
					<th>
						자원운반선
					</th>
					<td>
						<img src='./images/현대삼호-lpg선.jpg' />
						<img src='./images/현대미포-lpg선.jpg' />
						<img src='./images/dsme-lnglpg선.jpg' />
						<img src='./images/삼성-lng선.jpg' />
						<img src='./images/stx-lnglpg선.jpg' />
						<img src='./images/현대삼호-lng선.jpg' />
						<img src='./images/현대-lng선.jpg' />
						
					</td>
					<td rowspan=4>
						<br><br><br><button onclick="check_login()">견적 문의</button> <br> <br> <br>
						<button onclick="check_login()">온라인 상담 </button><br> <br> <br>
						<button onclick="check_login()">기타 문의</button> <br> <br> <br>

					</td>
				</tr>

				<tr>
					<th>
						컨테이너
					</th>
					<td>
						<img src='./images/dsme-컨테이너선.jpg' />
						<img src='./images/삼성-컨테이너선.jpg' />
						<img src='./images/stx-컨테이너선.jpg' />
						<img src='./images/화물운반선.jpg' />
						<img src='./images/현대미포-컨테이너운반선.jpg' />
						<img src='./images/현대-컨테이너선.jpg' />
	
					</td>
					
				</tr>

				<tr>
					<th>
						벌크선
					</th>
					<td>
						<img src='./images/현대미포-석유화학제품운반선.jpg' />
						<img src='./images/stx-대형광석운반선.jpg' />
						<img src='./images/현대-살물선.jpg' />
						<img src='./images/현대삼호-컨테이너선.jpg' />
						<img src='./images/현대-정유제품운반선.jpg' />
						<img src='./images/자원운반용.jpg' />
						
					</td>
					
				</tr>

				<tr>
					<th>
						여객선
					</th>
					<td>
						<img src='./images/여객선.jpg' />
						<img src='./images/dsme-여객선.jpg' />
						<img src='./images/현대미포-여객선.jpg' />
					</td>


					
				</tr>
			</table>
			
			<br><br><br>
			<p class = 'sub_title'>
			맞춤제작 <hr>
			</p>

			<table>
				<tr>
					<th>
						요트<br><br>
						보트<br><br>
						카약<br><br>
						카누<br>
					</th>
						
					<td>
						<img src='./sell/맞춤제작1.jpg' />
						<img src='./sell/맞춤제작2.jpg' />
						<img src='./sell/맞춤제작3.jpg' />
						<img src='./sell/맞춤제작4.jpg' />
						<img src='./sell/맞춤제작5.jpg' />
						<img src='./sell/맞춤제작6.jpg' />
						<img src='./sell/맞춤제작7.jpg' />
						<img src='./sell/맞춤제작8.jpg' />
						<img src='./sell/맞춤제작9.jpg' />
					</td>
					<td>
						<button onclick="check_login()">견적 문의 </button><br><br><br>
						<button onclick="check_login()">온라인 상담</button> <br>
					</td>
				
				</tr>

			</table>
		</div>
	</div>
</Body>
</Html>
