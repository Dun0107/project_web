<?
include ("memu.php");

$fast2= $_POST['fast2'];

?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-6 p-lg-5 mx-auto my-5">
    <h1 class="display-7 font-weight-normal" style="font-weight: 700" >무선 2.4GHz 설정</h1> <br>
    <div class="progress">
      <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>  
  </div>

  <br>
  <form action="fast3-1.php" method="post">
    <div class="container ">
      

      <div class="form-group row">
        <label class="col-sm-3 col-form-label" name="fast3">무선 네트워크 이름(SSID):</label>
        <div class="col-sm-9">
          <input class="form-control" type="text" name="fast3" required>  
        </div>

      </div>

      <div class="form-group row">
        <label class="col-sm-3 col-form-label" name="fast4">비밀번호:</label>
        <div class="col-sm-9">
          <input class="form-control" type="password" name="fast4" required>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-sm-3 col-form-label">무선 활성화:</label>
        &nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-outline-dark" name="fast7" value="ON">ON</button>
        <button type="submit" class="btn btn-outline-dark" name="fast7" value="OFF">OFF</button>
      </div>
        <br><br>

      </form>

      <button type="button" class="btn btn-dark btn-sm" style="background-color: #0B2161" onclick="location.href='fast2.php'">이전</button>

    </div>

  </div>

</div>
