<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<style>
		body{
			background-color: #FFB6C1;
		}
	</style>
</head>
<body>

	<div>
		<nav style="width: 70%; text-align: center; margin-left: 15%; margin-top: 2%;">
			<ul class="nav nav-tabs">
				<a style="font-size: 25px; font-weight: 600; width: 25%; color:white;">2020 공유기</a>
				<li class="nav-item" style="width: 10%;">
					<a class="nav-link" href="fast.php" style="color:white; font-weight: 600;">빠른 설치</a>
				</li>
				<li class="nav-item" style="width: 10%;">
					<a class="nav-link" href="basic.php" style="color:white; font-weight: 600;">기본</a>
				</li>
				<li class="nav-item" style="width: 10%;">
					<a class="nav-link active" href="hard.php" style="color:#FF848F; font-weight: 600;">고급</a>
				</li>
				<select name="word" style=" margin-left: 20%">
					<option value="korean" selected="selected">한글</option>
					<option value="english">English</option>
				</select>
				<li style=" margin-left: 3%">
					<button>로그인</button>
				</li>
				<li style=" margin-left: 3%">
					<button>재부팅</button>
				</li>
			</ul>
		</nav>
	</div>
	<div style="width: 70%; margin-left: 15%;">
		<div style="width: 24%; height: 600px;  border:transparent; float: left;">
			<nav>
				<ul class="nav flex-column">
					<li class="nav-item" style="width: 100%; height: 30px; background-color: red;">
						<a href="">HI</a>
					</li>
					<li class="nav-item">
						<a href="">HEY</a>
					</li>
				</ul>
			</nav>
		</div>
		<div style="width: 74%; height: 600px; border:transparent; background-color: white; float: right;">
			
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>