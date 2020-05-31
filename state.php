<?
include ("memu.php");
?>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light">

  <br>
  <div style="width: 80%; display: inline;">
    <div style="width: 38%; margin-left: 8%; float: left; border: 0.1px black solid; height: 300px; border-radius: 20px 20px 20px 20px">
      <div style="height: 40px; border-bottom: 0.1px black solid; text-align: center; padding: 6px">인터넷</div>
      <br>
      <table style="margin-left: 30px">
        <tr>
          <th> MAC 주소 : </th>
          <td> </td>
        </tr>
        <tr>
          <th> IP 주소 : </th>
          <td> </td>
        </tr>
        <tr>
          <th> 서브넷 마스크 : </th>
          <td></td>
        </tr>
        <tr>
          <th> 기본 게이트웨이 : </th>
          <td></td>
        </tr>
        <tr>
          <th> 기본 DNS : </th>
          <td></td>
        </tr>
        <tr>
          <th> 보조 DNS : </th>
          <td></td>
        </tr>
        <tr>
          <th> 연결 유형: </th>
          <td></td>
        </tr>
      </table>
    </div>
    <div style="width: 7%; float: left; border: 10px solid rgba(0,0,0,0)"></div>
    <div style="width: 40%; float: left; border: 0.1px black solid; height: 300px; border-radius: 20px 20px 20px 20px">
      <div style="height: 40px; border-bottom: 0.1px black solid; text-align: center; padding: 6px">무선</div>
      <br>
      <table style="margin-left: 30px">
        <tr>
          <th> 네트워크 이름 (SSID): </th>
          <td></td>
        </tr>
        <tr>
          <th>무선 : </th>
          <td></td>
        </tr>
        <tr>
          <th>모드 : </th>
          <td></td>
        </tr>
        <tr>
          <th>채널 폭 : </th>
          <td></td>
        </tr>
        <tr>
          <th>채널: </th>
          <td></td>
        </tr>
        <tr>
          <th>MAC 주소 : </th>
          <td></td>
        </tr>
        <tr>
          <th>WDS 상태 : </th>
          <td></td>
        </tr>
      </table>
    </div>
  </div>
  <br>

  <div style="width: 80%; display: inline;">
    <div style="width: 38%; margin-left: 8%; float: left; border: 0.1px black solid; height: 200px; border-radius: 20px 20px 20px 20px">
      <div style="height: 40px; border-bottom: 0.1px black solid; text-align: center; padding: 6px">LAN</div>
      <br>
      <table style="margin-left: 30px">
        <tr>
          <th> MAC 주소 : </th>
          <td></td>
        </tr>
        <tr>
          <th> IP 주소 : </th>
          <td></td>
        </tr>
        <tr>
          <th> 서브넷 마스크 : </th>
          <td></td>
        </tr>
        <tr>
          <th> DHCP : </th>
          <td></td>
        </tr>
      </table>
    </div>
    <div style="width: 7%; float: left; border: 10px solid rgba(0,0,0,0)"></div>
    <div style="width: 40%; float: left; border: 0.1px black solid; height: 200px; border-radius: 20px 20px 20px 20px">
      <div style="height: 40px; border-bottom: 0.1px black solid; text-align: center; padding: 6px">게스트 네트워크</div>
      <br>
      <table style="margin-left: 30px">
        <tr>
          <th> 네트워크 이름 (SSID): </th>
          <td></td>
        </tr>
        <tr>
          <th> SSID 숨김 : </th>
          <td></td>
        </tr>
        <tr>
          <th> 무선 : </th>
          <td></td>
        </tr>
        <tr>
          <th> 게스트들간에 서로 볼 수 있도록 허용 : </th>
          <td></td>
        </tr>
      </table>
    </div>
  </div>
  <br>

  <div style="width: 80%; display: inline;">
    <div style="width: 38%; margin-left: 8%; float: left; border: 0.1px black solid; height: 300px; border-radius: 20px 20px 20px 20px">
      <div style="height: 40px; border-bottom: 0.1px black solid; text-align: center; padding: 6px;">USB 장치</div>
      <div style="border: 10px solid rgba(0,0,0,0); width: 100%">
        <div style="width: 50%; margin-left: 22%; display: inline;"><i class="fa fa-print" style="font-size: 80px"></i></div>
        <div style="width: 50%; margin-left: 20%; display: inline;"><i class="fa fa-usb" style="font-size: 80px"></i></div>
      </div>
      <div style="margin-left: 30px">none</div>
    </div>
    <div style="width: 7%; float: left; border: 10px solid rgba(0,0,0,0)"></div>
    <div style="width: 40%; float: left; border: 0.1px black solid; height: 300px; border-radius: 20px 20px 20px 20px">
      <div style="height: 40px; border-bottom: 0.1px black solid; text-align: center; padding: 6px">성능</div>
      <br>
      <p style="margin-left: 30px">CPU 로드 (88%)</p>
      <progress value="88" max="100" style="height: 30px; width: 480px; margin-left: 30px"></progress> 
      <p style="margin-left: 30px; margin-top: 40px">메모리 사용 (22%) </p>
      <progress value="22" max="100" style="height: 30px; width: 480px; margin-left: 30px"></progress>
    </div>
  </div>
  <br>

  <div style="width: 80%; display: inline;">
    <div style="width: 38%; margin-left: 8%; float: left; border: 0.1px black solid; height: 200px; border-radius: 20px 20px 20px 20px">
      <div style="height: 40px; border-bottom: 0.1px black solid; text-align: center; padding: 6px">유선 클라이언트</div>
      <center><br><i class="fa fa-desktop" style="font-size: 80px"></i> 유선 클라이언트</center>
      <div style="margin-left: 30px">none</div>
    </div>
    <div style="width: 7%; float: left; border: 10px solid rgba(0,0,0,0)"></div>
    <div style="width: 40%; float: left; border: 0.1px black solid; height: 200px; border-radius: 20px 20px 20px 20px">
      <div style="height: 40px; border-bottom: 0.1px black solid; text-align: center; padding: 6px">무선 클라이언트</div>
      <center><br><i class="fa fa-mobile" style="font-size: 80px"></i> 무선 클라이언트</center>
    </div>
  </div>

</div>


