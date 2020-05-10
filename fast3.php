<?php
include ("memu.php");
$fast1=$_POST['fast1'];
$fast2=$_POST['fast2'];


?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-7 font-weight-normal" style="font-weight: 700" >무선 설정</h1> <br>
    <div class="progress">
      <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>  
  </div>

  <br>
  <form action="fast4.php" method="post">
    <div class="container ">
      <div class="form-group row">
        <label  class="col-sm-2 col-form-label">무선 2.4GHz:</label>
        &nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-outline-dark">무선활성화</button>

      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" name="fast3">무선 네트워크 이름(SSID):</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" name="fast3">   
          <input type="hidden" name="fast1" value="<? $fast1 ?>">
          <input type="hidden" name="fast2" value="<? $fast2 ?>"> 
        </div>

      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" name="fast4">비밀번호:</label>
        <div class="col-sm-10">
          <input class="form-control" type="password" name="fast4">
        </div>
      </div>

      <br><hr>
      <div class="container ">
        <div class="form-group row">
          <label  class="col-sm-2 col-form-label">무선 5GHz:</label>        &nbsp;&nbsp;&nbsp;
          <button type="button" class="btn btn-outline-dark">무선활성화</button>
        </div>

        <div class="form-group row">
          <label  class="col-sm-2 col-form-label">무선 네트워크 이름(SSID):</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="fast5">    
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">비밀번호:</label>
          <div class="col-sm-10">
            <input class="form-control" type="password" name="fast6">
          </div>
        </div>
        <br><br>

      </form>
      <button type="button" class="btn btn-dark btn-sm" style="background-color: #0B2161">이전</button>
      <button style="background-color: #0B2161" type="submit" class="btn btn-dark btn-sm">저장</button>

    </div>

  </div>

</div>
