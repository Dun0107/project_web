<?
include ("memu.php");

$fast1=$_POST['fast1'];
$fast2=$_POST['fast2'];
$fast3=$_POST['fast3'];
$fast4=$_POST['fast4'];
$fast5=$_POST['fast5'];
$fast6=$_POST['fast6'];

echo $fast1;
echo $fast2;
echo $fast3;
echo $fast4;
echo $fast5;
echo $fast6;
?>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-7 font-weight-normal" style="font-weight: 700" >요약</h1> <br>
    <div class="progress">
      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
    </div></div>

    <br>
    <div class="container ">
      <div class="form-group row">
        <label  class="col-sm-2 col-form-label">인터넷 연결 유형: <? echo $fast1 ?></label>

      </div>
      <hr>
      <div class="form-group row">
        <label  class="col-sm-2 col-form-label">무선 2.4GHz: <? echo $fast2 ?></label>

      </div>


      <div class="form-group row">
        <label  class="col-sm-2 col-form-label">무선 네트워크 이름(SSID): <? echo $fast3 ?></label>

      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">비밀번호: <? echo $fast4 ?></label>

      </div>


      <br><hr>

      <div class="container ">
        <div class="form-group row">
          <label  class="col-sm-2 col-form-label">무선 5GHz: </label>

        </div>

        <div class="form-group row">
          <label  class="col-sm-2 col-form-label">무선 네트워크 이름(SSID): <? echo $fast5 ?></label>

        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">비밀번호: <? echo $fast6 ?></label>

        </div>

        <br><br>

        <button style="background-color: #0B2161" type="submit" class="btn btn-dark btn-sm" onclick="location.href='fast3.php'">이전</button>
        <button style="background-color: #0B2161" type="submit" class="btn btn-dark btn-sm" onclick="location.href='fast5.php'">다음</button>
      </div>

    </div>

  </div>
