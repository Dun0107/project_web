<?php 
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<style type="text/css">
		body {
			margin :0;
		}
		.nav-container{
			position: fixed;
			top: 0;
			display: flex;
			flex-direction: row;
			width: 100%;
			margin: 0;
			padding: 0;
			background-color: skyblue;
			list-style-type: none;
		}

		.nav-item {
			padding: 8px;
			width: 8%;
		}

		.nav-item2 {
			margin-right: 4%;
			padding: 8px;
		}

		.nav-item a{
			text-align: center;
			text-decoration: none;
			color: white;
		}

		.nav-item2 a{
			text-align: center;
			text-decoration: none;
			color: white;
		}

		.nav-item:hover{
			background-color: lightgrey;
		}

		.menubar li ul {
			background: rgb(203,204,206);
			display:none;
			height:auto;
			padding:0px;
			margin:0px;
			border:0px;
			position:absolute;
			width:200px;
			z-index:200;
			margin-top: 11px;
			list-style-type: none;
		}

		.menubar li:hover ul {
			display:block;
		}

		.menubar li ul li ul{
			background: rgb(203,204,206);
			display:none;
			height:auto;
			padding:0px;
			margin:0px;
			border:0px;
			position:absolute;
			width:200px;
			z-index:200;
			margin-top: 11px;
			list-style-type: none;
		}

		.menubar li:hover ul {
			display:block;
		}

	</style>
</head>
<body>
	<nav>
		<div class="menubar">
			<ul class="nav-container">
				<li class="nav-item2"><a href="index.php" style="font-size: 24px; font-weight: 800;">2020 공유기</a></li>
				<li class="nav-item"><center><a href="" style="font-size: 20px; font-weight: 800;">빠른 설치</a></center></li>
				<li class="nav-item"><center><a href="" style="font-size: 20px; font-weight: 800;">기본</a></center>
					<ul>
						<li>
							<h5><a style="color: black;" href="">네트워크 맵</a></h5>
						</li>
						<li>
							<h5><a style="color: black;" href="">인터넷</a>
						</li>
						<li>
							<h5><a style="color: black;" href="">무선</a>
						</li>
						<li>
							<h5><a style="color: black;" href="">USB 설정</a>
						</li>
						<li>
							<h5><a style="color: black;" href="">보호자 제어</a>
						</li>
						<li>
							<h5><a style="color: black;" href="">게스트 네트워크</a>
						</li>
						<li>
							<h5><a style="color: black;" href="">2020 공유기 클라우드</a>
						</li>
					</ul>
				</li>
				<li class="nav-item"><center><a href="" style="font-size: 20px; font-weight: 800;">고급</a></center>
					<ul>
						<li>
							<h5><a style="color: black;" href="">상태</a>
						</li>
						<li>
							<h5><a style="color: black;" href="">네트워크</a>
						</li>
						<li>
							<h5><a style="color: black;" href="">작동 모드</a>
						</li>
						<li>
							<h5><a style="color: black;" href="">무선</a>
						</li>
						<li>
							<h5><a style="color: black;" href="">게스트 네트워크</a>
						</li>
						<li>
							<h5><a style="color: black;" href="">USB 설정</a>
						</li>
						<li>
							<h5><a style="color: black;" href="">보호자 제어</a>
						</li>
						<li>
							<h5><a style="color: black;" href="">QoS</a>
						</li>
						<li>
							<h5><a style="color: black;" href="">보안</a>
						</li>
						<li>
							<h5><a style="color: black;" href="">NAT 포워딩</a>
						</li>
						<li>
							<h5><a style="color: black;" href="">IPv6</a>
						</li>
						<li>
							<h5><a style="color: black;" href="">VPN 서버</a>
						</li>
						<li>
							<h5><a style="color: black;" href="">시스템 도구</a>
						</li>
					</ul>
				</li>
				<!-- <select name="word" style=" margin-left: 30%">
					<option value="korean" selected="selected">한글</option>
					<option value="english">English</option>
				</select> -->
				<li style=" margin-left: 48%; margin-top: 0.5%;">
					<button type="button" class="btn btn-light">로그인</button>
				</li>
				<li style=" margin-left: 2%; margin-top: 0.5%;">
					<button type="button" class="btn btn-light">재부팅</button>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container" style="background-color: #ADD8E6; width: 50%; text-align: center; margin-top:8%; height: 500px;">
		<br><br><br>
		<h1>LOGIN</h1><br><br>
		<form method="post" action="">
			<input class="container" type="text" name="id" class="form-control input-lg" placeholder="ID" style="height: 60px; width: 80%; font-size: 20px;" onkeypress="filterKey('[0-9,a-z]');" onkeyup="this.value=this.value.replace(/[^a-zA-z,^0-9]/g,'')"><br><br>
			<input class="container" type="password" name="password" class="form-control input-lg" placeholder="Password" style="height: 60px; width: 80%; font-size: 20px;">	<br><br><br>
			<button class="btn btn-light" type="submit">로그인</button>
		</form>
	</div>

</body>
</html>

