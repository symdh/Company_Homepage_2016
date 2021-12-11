<!doctype Html>
<Html>
<Head>
	<Meta Charset="Utf-8">
	<link rel="stylesheet" type="text/css" href="./buySell_stylesheet.css" />

	<?php
		session_start();
		if(isset($_SESSION['name'])) {	
			echo "<script> function check_login(){ alert('".$_SESSION['name']."님 요청 완료 했습니다.');} </script>" ;
			
		} else {
			echo "<script> function check_login(){ alert('로그인 후 이용 가능 합니다.');} </script>";
		}
	?>


<Title>구매 & 판매</Title>
</Head>
<Body>
	<div id='basic_setting'>
		
		
		<br>
		<div class = 'first_text_area'>
			<p class = 'sub_title'>
			요트 & 보트 & 카약 & 카누 구매서비스
			</p>
			<br>

			<table>
				<tr>
					<td class ='sub_title_table'>
						<div class ='for_detail'>
							소형요트
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src='./sell/요트1.jpg'>
						<img src='./sell/요트2.jpg'>
						<img src='./sell/요트3.jpg'>
						<img src='./sell/요트4.jpg'>
					</td>
					<td>
						
						<table>
							<tr>
								<th colspan=2>
								상세정보
								</th>
							
							</tr>

							<tr>
								<th>
									전장(LOA)
								</th>
								<td>
									8.95m - 19.70m
								</td>
							</tr>

							<tr>
								<th>
									전폭(Beam)
								</th>
								<td>
									2.99m - 5.20m
								</td>
							</tr>

							<tr>
								<th>
									흘수(Draft)
								</th>
								<td>
									0.68m - 1.35m
								</td>
							</tr>

							<tr>
								<th>
									무게
								</th>
								<td>
									9,129kg - 22,000kg
								</td>
							</tr>
						</table>
						
						<br>
						<button onclick="check_login()">구매문의 </button>
						<button onclick="check_login()">온라인상담</button>


					</td>
				</tr>
				
				<tr>
					<td class ='sub_title_table'>
						<div class ='for_detail'>
							중형요트
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src='./sell/요트1_1.jpg'>
						<img src='./sell/요트1_2.jpg'>
						<img src='./sell/요트1_3.jpg'>
						<img src='./sell/요트1_4.jpg'>
					</td>
					<td>
						
						<table>
							<tr>
								<th colspan=2>
								상세정보
								</th>
							
							</tr>

							<tr>
								<th>
									전장(LOA)
								</th>
								<td>
									13.9m - 26m
								</td>
							</tr>

							<tr>
								<th>
									전폭(Beam)
								</th>
								<td>
									4.3m - 6.56m
								</td>
							</tr>

							<tr>
								<th>
									흘수(Draft)
								</th>
								<td>
									0.7m - 1.6m
								</td>
							</tr>

							<tr>
								<th>
									무게
								</th>
								<td>
									14ton - 79ton
								</td>
							</tr>
						</table>
						
						<br>
						<button onclick="check_login()">구매문의 </button>
						<button onclick="check_login()">온라인상담</button>


					</td>
				</tr>
				
				<tr>
					<td class ='sub_title_table'>
						<div class ='for_detail'>
							대형요트
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src='./sell/요트2_1.jpg'>
						<img src='./sell/요트2_2.jpg'>
						<img src='./sell/요트2_3.jpg'>
						<img src='./sell/요트2_4.jpg'>
					</td>
					<td>
						
						<table>
							<tr>
								<th colspan=2>
								상세정보
								</th>
							
							</tr>

							<tr>
								<th>
									전장(LOA)
								</th>
								<td>
									33m - 60.25m
								</td>
							</tr>

							<tr>
								<th>
									전폭(Beam)
								</th>
								<td>
									6.5m - 10.00m
								</td>
							</tr>

							<tr>
								<th>
									흘수(Draft)
								</th>
								<td>
									1.34m - 2.90m
								</td>
							</tr>

							<tr>
								<th>
									무게
								</th>
								<td>
									129ton - 790ton
								</td>
							</tr>
						</table>
						
						<br>
						<button onclick="check_login()">구매문의 </button>
						<button onclick="check_login()">온라인상담</button>


					</td>
				</tr>

			</table>
		</div>
			
		<div class = 'for_blank'> </div>
		

		<div class = 'first_text_area'>

			<table>
				<tr>
					<td class ='sub_title_table'>
						<div class ='for_detail'>
							대형보트
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src='./sell/대보트_1.jpg'>
						<img src='./sell/대보트_2.jpg'>
						<img src='./sell/대보트_3.jpg'>
						<img src='./sell/대보트_4.jpg'>
					</td>
					<td>
						
						<table>
							<tr>
								<th colspan=2>
								상세정보
								</th>
							
							</tr>

							<tr>
								<th>
									전장(LOA)
								</th>
								<td>
									5.7m - 12m
								</td>
							</tr>

							<tr>
								<th>
									전폭(Beam)
								</th>
								<td>
									2.15m - 2.8m
								</td>
							</tr>

							<tr>
								<th>
									추진마력
								</th>
								<td>
									115hp - 800hp
								</td>
							</tr>

							<tr>
								<th>
									무게
								</th>
								<td>
									1.2ton - 6.5ton
								</td>
							</tr>
						</table>
						
						<br>
						<button onclick="check_login()">구매문의 </button>
						<button onclick="check_login()">온라인상담</button>


					</td>
				</tr>
				
				<tr>
					<td class ='sub_title_table'>
						<div class ='for_detail'>
							전동보트
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src='./sell/전보트_1.jpg'>
						<img src='./sell/전보트_2.jpg'>
						<img src='./sell/전보트_3.jpg'>
						<img src='./sell/전보트_4.jpg'>
					</td>
					<td>
						
						<table>
							<tr>
								<th colspan=2>
								상세정보
								</th>
							
							</tr>

							<tr>
								<th>
									길이
								</th>
								<td>
									3.6m - 6.5m
								</td>
							</tr>

							<tr>
								<th>
									폭
								</th>
								<td>
									1.8m - 2.6m
								</td>
							</tr>

							<tr>
								<th>
									추진마력
								</th>
								<td>
									30hp - 90hp
								</td>
							</tr>

							<tr>
								<th>
									최대적재무게
								</th>
								<td>
									1,150kg - 1,900kg
								</td>
							</tr>

						
						</table>
						
						<br>
						<button onclick="check_login()">구매문의 </button>
						<button onclick="check_login()">온라인상담</button>


					</td>
				</tr>
				
				<tr>
					<td class ='sub_title_table'>
						<div class ='for_detail'>
							소형보트
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src='./sell/소보트1.jpg'>
						<img src='./sell/소보트2.jpg'>
						<img src='./sell/소보트3.jpg'>
						<img src='./sell/소보트4.jpg'>
					</td>
					<td>
						
						<table>
							<tr>
								<th colspan=2>
								상세정보
								</th>
							
							</tr>

							<tr>
								<th>
									길이
								</th>
								<td>
									2m - 4.5m
								</td>
							</tr>

							<tr>
								<th>
									폭
								</th>
								<td>
									1.3m - 2m
								</td>
							</tr>

							<tr>
								<th>
									최대적재무게
								</th>
								<td>
									200kg - 600m
								</td>
							</tr>

							<tr>
								<th>
									승선인원
								</th>
								<td>
									1명 - 9명
								</td>
							</tr>
						</table>
						
						<br>
						<button onclick="check_login()">구매문의 </button>
						<button onclick="check_login()">온라인상담</button>
					</td>
				</tr>
			</table>	
		</div>


		<div class = 'for_blank'> </div>
		

		<div class = 'first_text_area'>

			<table>
				<tr>
					<td class ='sub_title_table'>
						<div class ='for_detail'>
							카약
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src='./sell/카약1.jpg'>
						<img src='./sell/카약2.jpg'>
						<img src='./sell/카약3.jpg'>
						<img src='./sell/카약4.jpg'>
					</td>
					<td>
						
						<table>
							<tr>
								<th colspan=2>
								상세정보
								</th>
							
							</tr>

							<tr>
								<th>
									길이
								</th>
								<td>
									2.9m - 4.6m
								</td>
							</tr>

							<tr>
								<th>
									폭
								</th>
								<td>
									0.6m - 0.9m
								</td>
							</tr>

							<tr>
								<th>
									최대적재무게
								</th>
								<td>
									135kg - 288kg
								</td>
							</tr>

							<tr>
								<th>
									탑승인원
								</th>
								<td>
									1명 - 4명
								</td>
							</tr>
						</table>
						
						<br>
						<button onclick="check_login()">구매문의 </button>
						<button onclick="check_login()">온라인상담</button>


					</td>
				</tr>
				
				<tr>
					<td class ='sub_title_table'>
						<div class ='for_detail'>
							카누
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<img src='./sell/카누1.jpg'>
						<img src='./sell/카누2.jpg'>
						<img src='./sell/카누3.jpg'>
						<img src='./sell/카누4.jpg'>
					</td>
					<td>
						
						<table>
							<tr>
								<th colspan=2>
								상세정보
								</th>
							
							</tr>

							<tr>
								<th>
									길이
								</th>
								<td>
									3.1m - 4.3m
								</td>
							</tr>

							<tr>
								<th>
									폭
								</th>
								<td>
									0.7m - 0.9m
								</td>
							</tr>

							<tr>
								<th>
									깊이
								</th>
								<td>
									0.3m - 0.4m
								</td>
							</tr>

							<tr>
								<th>
									탑승인원
								</th>
								<td>
									1명 - 4명
								</td>
							</tr>

						
						</table>
						
						<br>
						<button onclick="check_login()">구매문의 </button>
						<button onclick="check_login()">온라인상담</button>


					</td>
				</tr>
			
			</table>	
		</div>
		

	</div>
</Body>
</Html>
