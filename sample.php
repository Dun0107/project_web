<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<style type="text/css">
	.menubar li{
		float: left;
		list-style: none;
		padding: 30px;
		text-decoration-line: none;
	}

	.menubar li ul {
		
		display:none;
		height:auto;
		padding:0px;
		margin:0px;
		border:0px;
		position:absolute;
		margin-top: 40px;
		width: 100%;
		text-decoration-line: none;


	}

	.menubar a{
		font-size: 20px;
		font-weight: 500;
		color: white;
		text-decoration-line: none;
	}

	.menubar2:hover .menubar a {
		background-color: #3e8e41;
	}

	.menubar2 {
/*		display: none;*/
	}

	.menubar2 a{
		text-decoration-line: none;
/*		font-size: 20px;
font-weight: 500;*/
color: black;
display: block;

}
/*
	.menubar2 li{
		list-style: none;

		}*/
/*
	.menubar2 li ul {
		
		display:none;
		height:auto;
		padding:0px;
		margin:0px;
		border:0px;
		position:absolute;
		margin-top: 40px;
		width: 100%;


		}*/

	</style>
	<body>
		<script>
			funtion show_nav(){
				$("#menubar2").show();
			}
			function show_nav(){
				if($('#menubar2').css('display') == 'none'){
					$('#menubar2').show();
				}else{
					$('#menubar2').hide();
				}
			}


		</script>
		<div class="menubar" style="width: 100%; height: 100px; background-color: #1e3269;">
			<ul>
				<li style="margin-left: 1%"><a href="" style="font-size: 20px;">2020 공유기</a></li>
				<li style="margin-left: 12%"><a href="#" onmouseover="show_nav()">빠른 설치</a></li>
				<li style="margin-left: 3%"><a href="#" id="current" onclick="show_nav()">기본</a>
				</li>
				<li style="margin-left: 3%"><a href="#" onmouseover="show_nav()">고급</a></li>

				<button style="margin-left: 30%; margin-right: 15px; margin-top: 28px; width:80px; height:40px; border: none; text-align: center; text-decoration: none; display: inline-block; font-size: 15px; border-radius:10px;">로그아웃</button>
				<button style="margin-left: 1%; width:80px; height:40px; border: none; text-align: center; text-decoration: none; display: inline-block; font-size: 15px; border-radius:10px;">재부팅</button>
			</ul>
		</div>

		<div class="menubar2" style="width: 100%;">
			<br>
			<div style="width: 22%; float:left;"><ul><li style="list-style: none;"><a style="font-size: 20px; font-weight: 700;">빠른 설치</a></li></ul></div>
			<div style="width: 25%; float: left;">
				<ul>
					<li style="list-style: none;"><a style="font-size: 20px; font-weight: 700;">기본</a></li><br>
					<li style="list-style: none;">
						<a href='#'>네트워크 맵</a>
					</li>
					<li style="list-style: none;">
						<a href='#'>인터넷</a>
					</li>
					<li style="list-style: none;">
						<a href='#'>무선</a>
					</li>
					<li class='sub' style="list-style: none;">
						<a>USB 설정</a>
						<ul>
							<li>
								<a href='#' style="color: #888888">공유 액세스</a>
							</li>
							<li class='last'>
								<a href='#' style="color: #888888">프린터 서버</a>
							</li>
						</ul>
					</li>
					<li style="list-style: none;">
						<a href='#'>보호자 제어</a>
					</li>
					<li style="list-style: none;">
						<a href='#'>게스트 네트워크</a>
					</li>
					<li style="list-style: none;">
						<a href='#'>공유기 클라우드</a>
					</li>
				</ul>
			</div>

			<div style="width: 25%; float: left;">
				<ul>
					<li style="list-style: none;"><a style="font-size: 20px; font-weight: 700;">고급</a></li><br>
					<li style="list-style: none;">
						<a href='#'>상태</a>
					</li>
					<li class='sub' style="list-style: none;">
						<a>네트워크</a>
						<ul>
							<li>
								<a href='#' style="color: #888888">인터넷</a>
							</li>
							<li>
								<a href='#' style="color: #888888">LAN</a>
							</li>
							<li>
								<a href='#' style="color: #888888">IPTV/VLAN</a>
							</li>
							<li>
								<a href='#' style="color: #888888">DHCP 서버</a>
							</li>
							<li>
								<a href='#' style="color: #888888">동적 DNS</a>
							</li>
							<li class='last'>
								<a href='#' style="color: #888888">고급 라우팅</a>
							</li>
						</ul>
					</li>
					<li style="list-style: none;">
						<a href='#'>작동 모드</a>
					</li>
					<li class='sub' style="list-style: none;">
						<a>무선</a>
						<ul>
							<li>
								<a href='#' style="color: #888888">무선 설정</a>
							</li>
							<li>
								<a href='#' style="color: #888888">WPS</a>
							</li>
							<li class='last'>
								<a href='#' style="color: #888888">통계</a>
							</li>
						</ul>
					</li>
					<li style="list-style: none;">
						<a href='#'>게스트 네트워크</a>
					</li>
					<li style="list-style: none;">
						<a>USB 설정</a>
						<ul>
							<li>
								<a href='#' style="color: #888888">장치 설정</a>
							</li>
							<li>
								<a href='#' style="color: #888888">공유 액세스</a>
							</li>
							<li>
								<a href='#' style="color: #888888">프린터 서버</a>
							</li>
							<li class='last'>
								<a href='#' style="color: #888888">오프라인 다운로드</a>
							</li>
						</ul>
					</li>
					<li class='sub' style="list-style: none;">
						<a>VPN 서버</a>
						<ul>
							<li>
								<a href='#' style="color: #888888">OpenVPN</a>
							</li>
							<li>
								<a href='#' style="color: #888888">PPTP VPN</a>
							</li>
							<li class='last'>
								<a href='#' style="color: #888888">VPN 연결</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<div style="width: 25%; float: left;">
				<ul><br><br>
					<li class='sub' style="list-style: none;">
						<a>보안</a>
						<ul>
							<li>
								<a href='#' style="color: #888888">설정</a>
							</li>
							<li>
								<a href='#' style="color: #888888">액세스 제어</a>
							</li>
							<li class='last'>
								<a href='#' style="color: #888888">IP&MAC 바인딩</a>
							</li>
						</ul>
					</li>
					<li style="list-style: none;">
						<a href='#'>보호자 제어</a>
					</li>
					<li style="list-style: none;">
						<a href='#'>QoS</a>
					</li>
					<li class='sub' style="list-style: none;">
						<a>NAT 포워딩</a>
						<ul>
							<li>
								<a href='#' style="color: #888888">ALG</a>
							</li>
							<li>
								<a href='#' style="color: #888888">포트 포워딩</a>
							</li>
							<li>
								<a href='#' style="color: #888888">포트 트리거</a>
							</li>
							<li>
								<a href='#' style="color: #888888">DMZ</a>
							</li>
							<li class='last'>
								<a href='#' style="color: #888888">UPnP</a>
							</li>
						</ul>
					</li>
					<li style="list-style: none;">
						<a href='#'>IPv6</a>
					</li>
					<li class='sub' style="list-style: none;">
						<a>시스템 도구</a>
						<ul>
							<li>
								<a href='#' style="color: #888888">진단</a>
							</li>
							<li>
								<a href='#' style="color: #888888">펌웨어 업그레이드</a>
							</li>
							<li>
								<a href='#' style="color: #888888">백업 및 복원</a>
							</li>
							<li>
								<a href='#' style="color: #888888">재부팅 일정</a>
							</li>
							<li>
								<a href='management.php' style="color: #888888">관리</a>
							</li>
							<li>
								<a href='#' style="color: #888888">시스템 로그</a>
							</li>
							<li>
								<a href='#' style="color: #888888">트레픽 통계</a>
							</li>
							<li>
								<a href='#' style="color: #888888">시스템 매개 변수</a>
							</li>
							<li class='last'>
								<a href='#' style="color: #888888">WOL</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<script language="javascript">
			function view(){
				var f=document.form;
				if(f.type[0].checked==true){
					document.all.cattery.style.visibility="hidden";
				}else{
					document.all.cattery.style.visibility="visible";
				}
			}
		</script>

		<!-- <form name="form" method="post">
			<input type="radio" name="type" value="1" onclick="view()" checked>숨기 <input type="radio" name="type" value="2" onclick="view()">보이기
			<div id="cattery" style="visibility:hidden;">내용</div>
			<div>내용2</div>
		</form> -->

	</body>
	</html>