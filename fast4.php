<?
include ("memu.php");
session_start();
$fast1 = $_SESSION['fast1'];
$fast2 = $_SESSION['fast2'];
$fast3 = $_SESSION['fast3'];
$fast4 = $_SESSION['fast4'];
$fast7 = $_SESSION['fast7'];


$fast5=$_POST['fast5'];
$fast6=$_POST['fast6'];
$fast8=$_POST['fast8'];



?>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-7 font-weight-normal" style="font-weight: 700" >요약</h1> <br>
    <div class="progress">
      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
    </div></div>

    <br>
    <div class="container ">
      <div class="form-group row" >
        <label class="col-sm-3 col-form-label">인터넷 연결 유형: </label>
          <h1 class="col-sm-9 col-form-label" style="font-size: 20px;"> <? echo $fast1 ?></h1>      
      </div>
      <hr>

      <div class="form-group row">
        <label  class="col-sm-3 col-form-label">무선 2.4GHz: </label>

          <h1 class="col-sm-9 col-form-label" style="font-size: 20px"> <? echo $fast7 ?></h1>        
      </div>


      <div class="form-group row">
        <label class="col-sm-3 col-form-label" >무선 네트워크 이름(SSID): </label>
       
          <h1 class="col-sm-9 col-form-label" style="font-size: 20px"> <? echo $fast3 ?></h1>        
      </div>

      <div class="form-group row">
        <label class="col-sm-3 col-form-label">비밀번호:</label>
          <h1 class="col-sm-9 col-form-label" style="font-size: 20px"> <? echo $fast4 ?></h1>
        
      </div>


      <br><hr>

      <div class="container ">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label" >무선 5GHz: </label>
          <h1 class="col-sm-9 col-form-label" style="font-size: 20px"> <? echo $fast8 ?></h1>
        </div>

        <div class="form-group row">
          <label  class="col-sm-3 col-form-label">무선 네트워크 이름(SSID): </label>
          <h1 class="col-sm-9 col-form-label" style="font-size: 20px"> <? echo $fast5 ?></h1>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-form-label">비밀번호: </label>
          <h1 class="col-sm-9 col-form-label" style="font-size: 20px"> <? echo $fast6 ?></h1>
        </div>

        <br><br>

        <button style="background-color: #0B2161" type="submit" class="btn btn-dark btn-sm" onclick="location.href='fast3.php'">이전</button>
        <button style="background-color: #0B2161" type="submit" class="btn btn-dark btn-sm" onclick="location.href='fast5.php'">다음</button>
      </div>

    </div>

  </div>
