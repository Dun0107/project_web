<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8"/>
  <title></title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
  <style>
    body {
      font-family: "Lucida Sans Typewriter", "Lucida Console", Monaco, "Bitstream Vera Sans Mono", monospace;
      background-color: #F5F5DC;
    }
    .menu {
      position: fixed;
      margin-top: -10px;
      margin-left: -8px;
      margin-right: -10px;
      height: 50px;
      background: #2b2f3a;
      width: 120%;
    }
    .menu ul {
      list-style: none;
      padding: 0;
      margin: 0;
      line-height: 1;
    }
    .menu > ul {
      position: fixed;
      background: #2b2f3a;
      width: 100%;
    }
    .menu:after, .menu > ul:after {
      content: ".";
      display: block;
      clear: both;
      visibility: hidden;
      line-height: 0;
      height: 0;
    }
    .menu.align-right > ul > li {
      float: right;
    }
    .menu.align-center ul {
      text-align: center;
    }
    .menu.align-center ul ul {
      text-align: left;
    }
    .menu > ul > li {
      display: inline-block;
      position: relative;
      margin: 0;
      padding: 0;
    }
    .menu > ul > #menu-button {
      display: none;
    }
    .menu ul li a {
      display: block;
      font-family: Helvetica, sans-serif;
      text-decoration: none;
    }
    .menu > ul > li > a {
      font-size: 14px;
      font-weight: bold;
      padding: 15px 20px;
      color: #fff;
      text-transform: uppercase;
      -webkit-transition: color 0.25s ease-out;
      -moz-transition: color 0.25s ease-out;
      -ms-transition: color 0.25s ease-out;
      -o-transition: color 0.25s ease-out;
      transition: color 0.25s ease-out;
    }
    .menu > ul > li.sub > a {
      padding-right: 32px;
    }
    .menu > ul > li:hover > a {
      color: #ffffff;
    }
    .menu li.sub::after {
      display: block;
      content: "";
      position: absolute;
      width: 0;
      height: 0;
    }
    .menu > ul > li.sub::after {
      right: 10px;
      top: 20px;
      border: 5px solid transparent;
      border-top-color: #7a8189;

    }
    .menu > ul > li:hover::after {
      border-top-color: #ffffff;
    }
    .menu ul ul {
      position: absolute;
      left: -9999px;
      top: 70px;
      opacity: 0;
      -webkit-transition: opacity .3s ease, top .25s ease;
      -moz-transition: opacity .3s ease, top .25s ease;
      -ms-transition: opacity .3s ease, top .25s ease;
      -o-transition: opacity .3s ease, top .25s ease;
      transition: opacity .3s ease, top .25s ease;
      z-index: 1000;
    }
    .menu ul ul ul {
      top: 37px;
      padding-left: 5px;
    }
    .menu ul ul li {
      position: relative;
    }
    .menu > ul > li:hover > ul {
      left: auto;
      top: 44px;
      opacity: 1;
    }
    .menu.align-right > ul > li:hover > ul {
      left: auto;
      right: 0;
      opacity: 1;
    }
    .menu ul ul li:hover > ul {
      left: 170px;
      top: 0;
      opacity: 1;
    }
    .menu.align-right ul ul li:hover > ul {
      left: auto;
      right: 170px;
      top: 0;
      opacity: 1;
      padding-right: 5px;
    }
    .menu ul ul li a {
      width: 130px;
      border-bottom: 1px solid #eeeeee;
      padding: 10px 20px;
      font-size: 12px;
      color: #9ea2a5;
      background: #ffffff;
      -webkit-transition: all .35s ease;
      -moz-transition: all .35s ease;
      -ms-transition: all .35s ease;
      -o-transition: all .35s ease;
      transition: all .35s ease;
    }
    .menu.align-right ul ul li a {
      text-align: right;
    }
    .menu ul ul li:hover > a {
      background: #f2f2f2;
      color: #8c9195;
    }
    .menu ul ul li:last-child > a, .menu ul ul li.last > a {
      border-bottom: 0;
    }
    .menu > ul > li > ul::after {
      content: '';
      border: 6px solid transparent;
      width: 0;
      height: 0;
      border-bottom-color: #ffffff;
      position: absolute;
      top: -12px;
      left: 30px;
    }
    .menu.align-right > ul > li > ul::after {
      left: auto;
      right: 30px;
    }
    .menu ul ul li.sub::after {
      border: 4px solid transparent;
      border-left-color: #9ea2a5;
      right: 10px;
      top: 12px;
      -moz-transition: all .2s ease;
      -ms-transition: all .2s ease;
      -o-transition: all .2s ease;
      transition: all .2s ease;
      -webkit-transition: -webkit-transform 0.2s ease, right 0.2s ease;
    }
    .menu.align-right ul ul li.sub::after {
      border-left-color: transparent;
      border-right-color: #9ea2a5;
      right: auto;
      left: 10px;
    }
    .menu ul ul li.sub:hover::after {
      border-left-color: #ffffff;
      right: -5px;
      -webkit-transform: rotateY(180deg);
      -ms-transform: rotateY(180deg);
      -moz-transform: rotateY(180deg);
      -o-transform: rotateY(180deg);
      transform: rotateY(180deg);
    }
    .menu.align-right ul ul li.sub:hover::after {
      border-right-color: #ffffff;
      border-left-color: transparent;
      left: -5px;
      -webkit-transform: rotateY(180deg);
      -ms-transform: rotateY(180deg);
      -moz-transform: rotateY(180deg);
      -o-transform: rotateY(180deg);
      transform: rotateY(180deg);
    }

  </style>
</head>
<body>

  <div class='menu'>
    <ul>
      <li style="margin-left: 1%"><h2 style="font-family: Helvetica, sans-serif; color: white;">2020 공유기</h2></li>
      <li style="margin-left: 5%">
        <a href='fast.php'>빠른 설치</a>
      </li>
      <li class="active sub">
        <a href='#'>기본</a>
        <ul>
          <li>
            <a href='#'>네트워크 맵</a>
          </li>
          <li>
            <a href='#'>인터넷</a>
          </li>
          <li>
            <a href='#'>무선</a>
          </li>
          <li class='sub'>
            <a href='#'>USB 설정</a>
            <ul>
              <li>
                <a href='#'>공유 액세스</a>
              </li>
              <li class='last'>
                <a href='#'>프린터 서버</a>
              </li>
            </ul>
          </li>
          <li>
            <a href='#'>보호자 제어</a>
          </li>
          <li>
            <a href='#'>게스트 네트워크</a>
          </li>
          <li>
            <a href='#'>공유기 클라우드</a>
          </li>
        </ul>
      </li>
      <li class='active sub' style="margin-right: 800px;">
        <a href='#'>고급</a>
        <ul>
          <li>
            <a href='#'>상태</a>
          </li>
          <li class='sub'>
            <a href='#'>네트워크</a>
            <ul>
              <li>
                <a href='#'>인터넷</a>
              </li>
              <li>
                <a href='#'>LAN</a>
              </li>
              <li>
                <a href='#'>IPTV/VLAN</a>
              </li>
              <li>
                <a href='#'>DHCP 서버</a>
              </li>
              <li>
                <a href='#'>동적 DNS</a>
              </li>
              <li class='last'>
                <a href='#'>고급 라우팅</a>
              </li>
            </ul>
          </li>
          <li>
            <a href='#'>작동 모드</a>
          </li>
          <li class='sub'>
            <a href='#'>무선</a>
            <ul>
              <li>
                <a href='#'>무선 설정</a>
              </li>
              <li>
                <a href='#'>WPS</a>
              </li>
              <li class='last'>
                <a href='#'>통계</a>
              </li>
            </ul>
          </li>
          <li>
            <a href='#'>게스트 네트워크</a>
          </li>
          <li class='sub'>
            <a href='#'>USB 설정</a>
            <ul>
              <li>
                <a href='#'>장치 설정</a>
              </li>
              <li>
                <a href='#'>공유 액세스</a>
              </li>
              <li>
                <a href='#'>프린터 서버</a>
              </li>
              <li class='last'>
                <a href='#'>오프라인 다운로드</a>
              </li>
            </ul>
          </li>
          <li>
            <a href='#'>보호자 제어</a>
          </li>
          <li>
            <a href='#'>QoS</a>
          </li>
          <li class='sub'>
            <a href='#'>보안</a>
            <ul>
              <li>
                <a href='#'>설정</a>
              </li>
              <li>
                <a href='#'>액세스 제어</a>
              </li>
              <li class='last'>
                <a href='#'>IP&MAC 바인딩</a>
              </li>
            </ul>
          </li>
          <li class='sub'>
            <a href='#'>NAT 포워딩</a>
            <ul>
              <li>
                <a href='#'>ALG</a>
              </li>
              <li>
                <a href='#'>포트 포워딩</a>
              </li>
              <li>
                <a href='#'>포트 트리거</a>
              </li>
              <li>
                <a href='#'>DMZ</a>
              </li>
              <li class='last'>
                <a href='#'>UPnP</a>
              </li>
            </ul>
          </li>
          <li>
            <a href='#'>IPv6</a>
          </li>
          <li class='sub'>
            <a href='#'>VPN 서버</a>
            <ul>
              <li>
                <a href='#'>OpenVPN</a>
              </li>
              <li>
                <a href='#'>PPTP VPN</a>
              </li>
              <li class='last'>
                <a href='#'>VPN 연결</a>
              </li>
            </ul>
          </li>
          <li class='sub'>
            <a href='#'>시스템 도구</a>
            <ul>
              <li>
                <a href='#'>진단</a>
              </li>
              <li>
                <a href='#'>펌웨어 업그레이드</a>
              </li>
              <li>
                <a href='#'>백업 및 복원</a>
              </li>
              <li>
                <a href='#'>재부팅 일정</a>
              </li>
              <li>
                <a href='management.php'>관리</a>
              </li>
              <li>
                <a href='#'>시스템 로그</a>
              </li>
              <li>
                <a href='#'>트레픽 통계</a>
              </li>
              <li>
                <a href='#'>시스템 매개 변수</a>
              </li>
              <li class='last'>
                <a href='#'>WOL</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <button type="button" style="margin-right: 15px; width:80px; height:40px; border: none; text-align: center; text-decoration: none; display: inline-block; font-size: 15px; border-radius:10px;">
        <a href="" style="color: #2b2f3a;text-decoration-line: none; font-family: Helvetica, sans-serif; font-weight: 900;">로그아웃</a>
      </button>
      <button type="button" style="width:80px; height:40px; border: none; text-align: center; text-decoration: none; display: inline-block; font-size: 15px; border-radius:10px;">
        <a href="" style="color: #2b2f3a; text-decoration-line: none; font-family: Helvetica, sans-serif; font-weight: 900;">재부팅</a>
      </button>
    </ul>
  </div>
  <br><br><br><br><br>
  <center>
    <h1 style="color:#2b2f3a; text-decoration-line: none; font-family: Helvetica, sans-serif; font-weight: 900;">빠른 설치 - 인터넷 연결 유형</h1>
    <!-- <div style="width: 80%; margin-top: 100px;">
      <div style="background-color: #2b2f3a; display: inline; width: 24%; float: left; border-left-style:solid; border-top-style:solid; border-bottom-style:solid; border-radius: 100px 0px 0px 100px"><h3 style="font-family: Helvetica, sans-serif; font-weight: 900; color: white;">25%</h3></div>
      <div style="background-color: white; display: inline; width: 74%; float: left; border-right-style:solid; border-top-style:solid; border-bottom-style:solid; border-radius: 0px 100px 100px 0px"><h3 style="font-family: Helvetica, sans-serif; font-weight: 900;">&nbsp;</h3></div>
    </div> -->
    <div style="width: 80%; margin-top: 50px;">
      <div style="background-color: white; display: inline; width: 24%; float: left; border-left-style:solid; border-top-style:solid; border-bottom-style:solid; border-radius: 100px 0px 0px 100px"><h3 style="font-family: Helvetica, sans-serif; font-weight: 900; color: white;">&nbsp;</h3></div>
      <div style="background-color: white; display: inline; width: 74%; float: left; border-right-style:solid; border-top-style:solid; border-bottom-style:solid; border-radius: 0px 100px 100px 0px"><h3 style="font-family: Helvetica, sans-serif; font-weight: 900;">&nbsp;</h3></div>
    </div>
    <br>
  </center>
  <br>
  <div style="width: 100%; margin-top: 5%;">
    <input type="checkbox" style="margin-left: 46%"/><font style="font-family: Helvetica, sans-serif; font-weight: 900;">동적 IP</font><br>
    <input type="checkbox" style="margin-left: 46%"/><font style="font-family: Helvetica, sans-serif; font-weight: 900;">고정 IP</font><br>
    <input type="checkbox" style="margin-left: 46%"/><font style="font-family: Helvetica, sans-serif; font-weight: 900;">PPPoE</font><br>
    <input type="checkbox" style="margin-left: 46%"/><font style="font-family: Helvetica, sans-serif; font-weight: 900;">L2TP</font><br>
    <input type="checkbox" style="margin-left: 46%"/><font style="font-family: Helvetica, sans-serif; font-weight: 900;">PPTP</font><br>

    <br><br>
    <button type="button" style="margin-left:82%; width:80px; height:40px; border: none; text-align: center; text-decoration: none; display: inline-block; font-size: 15px; border-radius:10px; border-style: solid;">
        <a href="fast2.php" style="color: #2b2f3a; text-decoration-line: none; font-family: Helvetica, sans-serif; font-weight: 900;">다음</a>
      </button>
  </div>
</body>
</html>
