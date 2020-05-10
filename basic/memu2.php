<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
 li{
    color: white;
    list-style: none;
  }
  a{
    color: white;
  }
   a:hover {
  color: white;
  text-decoration: none;
}
</style>
</head>
<body>
<div class="pos-f-t" style=" background-color: #0B2161;">
  <div class="collapse" id="navbarToggleExternalContent" style=" background-color: #0B2161;">
    <div class=" p-4" style="width: 100%; color: #0B2161;">
      
    
      <div style="width: 25%; float:left; "><br><br>
      <ul><li > <h4 class="text-white"><a href="/fast.php" class="text-white">빠른설치</a></h4></li></ul></div>
			<div style="width: 25%; float: left; "><br><br>
				<ul>
					<li ><h4>기본</h4></li><br>
					<li>
						<a href='#'>네트워크 맵</a>
					</li>
					<li >
						<a href='/basic/internet.php'>인터넷</a>
					</li>
					<li >
						<a href='/basic/wireless.php'>무선</a>
					</li>
					<li  >
						<a>USB 설정</a>
						<ul>
							<li style=" list-style: circle">
								<a href='#' >공유 액세스</a>
							</li>
							<li style=" list-style: circle">
								<a href='/basic/print.php'>프린터 서버</a>
							</li>
						</ul>
					</li>
					<li >
						<a href='#'>보호자 제어</a>
					</li>
					<li >
						<a href='#'>게스트 네트워크</a>
					</li>
					<li >
						<a href='#'>공유기 클라우드</a>
					</li>
				</ul>
			</div>

			<div style="width: 25%; float: left;"><br><br>
				<ul>
					<li ><h4>고급</h4></li><br>
					<li >
						<a href='#'>상태</a>
					</li>
					<li >
						<a>네트워크</a>
						<ul>
							<li style=" list-style: circle">
								<a href='#'>인터넷</a>
							</li>
							<li style=" list-style: circle">
								<a href='#'>LAN</a>
							</li>
							<li style=" list-style: circle">
								<a href='#' >IPTV/VLAN</a>
							</li>
							<li style=" list-style: circle">
								<a href='#' >DHCP 서버</a>
							</li >
							<li style=" list-style: circle">
								<a href='#' >동적 DNS</a>
							</li>
							<li style=" list-style: circle">
								<a href='#' >고급 라우팅</a>
							</li>
						</ul>
					</li>
					<li >
						<a href='#'>작동 모드</a>
					</li>
					<li  >
						<a>무선</a>
						<ul>
							<li style=" list-style: circle">
								<a href='#'>무선 설정</a>
							</li>
							<li style=" list-style: circle">
								<a href='#' >WPS</a>
							</li>
							<li style=" list-style: circle">
								<a href='#'>통계</a>
							</li>
						</ul>
					</li>
					<li >
						<a href='#'>게스트 네트워크</a>
					</li>
					<li >
						<a>USB 설정</a>
						<ul>
							<li style=" list-style: circle">
								<a href='#' >장치 설정</a>
							</li>
							<li style=" list-style: circle">
								<a href='#' >공유 액세스</a>
							</li>
							<li style=" list-style: circle">
								<a href='#' >프린터 서버</a>
							</li>
							<li style=" list-style: circle">
								<a href='#' >오프라인 다운로드</a>
							</li>
						</ul>
					</li>
					<li >
						<a>VPN 서버</a>
						<ul>
							<li style=" list-style: circle">
								<a href='#' >OpenVPN</a>
							</li>
							<li style=" list-style: circle"> 
								<a href='#' >PPTP VPN</a>
							</li>
							<li style=" list-style: circle" >
								<a href='#' \>VPN 연결</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
      <div style="width: 25%; float: left;"><br><br>
      
				<ul>
        <li \><a style="font-size: 20px; font-weight: 700;"><br><br></a></li>
					<li  >
						<a>보안</a>
						<ul>
							<li style=" list-style: circle">
								<a href='#' >설정</a>
							</li>
							<li style=" list-style: circle">
								<a href='#' >액세스 제어</a>
							</li>
							<li class='last' style=" list-style: circle">
								<a href='#' >IP&MAC 바인딩</a>
							</li>
						</ul>
					</li>
					<li >
						<a href='#'>보호자 제어</a>
					</li>
					<li>
						<a href='#'>QoS</a>
					</li>
					<li >
						<a>NAT 포워딩</a>
						<ul>
							<li style=" list-style: circle">
								<a href='#' >ALG</a>
							</li>
							<li style=" list-style: circle">
								<a href='#' >포트 포워딩</a>
							</li>
							<li style=" list-style: circle">
								<a href='#' >포트 트리거</a>
							</li>
							<li style=" list-style: circle"> 
								<a href='#' >DMZ</a>
							</li>
							<li style=" list-style: circle">
								<a href='#' >UPnP</a>
							</li>
						</ul>
					</li>
					<li >
						<a href='#'>IPv6</a>
					</li>
					<li >
						<a>시스템 도구</a>
						<ul>
							<li style=" list-style: circle">
								<a href='#' >진단</a>
							</li>
							<li style=" list-style: circle">
								<a href='#' >펌웨어 업그레이드</a>
							</li>
							<li style=" list-style: circle"> 
								<a href='#'>백업 및 복원</a>
							</li>
							<li style=" list-style: circle">
								<a href='#' >재부팅 일정</a>
							</li>
							<li style=" list-style: circle">
								<a href='../management.php' >관리</a>
							</li>
							<li style=" list-style: circle">
								<a href='#' >시스템 로그</a>
							</li >
							<li style=" list-style: circle">
								<a href='#' >트레픽 통계</a>
							</li>
							<li style=" list-style: circle">
								<a href='#' >시스템 매개 변수</a>
							</li>
							<li style=" list-style: circle">
								<a href='#' >WOL</a>
							</li>
						</ul>
					</li>
				</ul><br><br>
			</div>


    </div>
  </div>
  <nav class="navbar navbar-dark " style=" background-color: #0B2161;">
  <li class="nav-item">
    <a class="py-2"  aria-label="Product" >
      <svg   xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>RouteR
    </a>
</li>
<ul class="nav">
  <li>
  <form  action="../logout.php">
  <button style="background-color:white; color: #0B2161"  value='Logout' class="btn btn-dark btn-sm">logout</button>
  </form>
  
  <li>      &nbsp; &nbsp;  
    <button style=" background-color: #0B2161;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button></li>
</ul>
     
     
    
    
  </nav>
</div>
</body>
</html>