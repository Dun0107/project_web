<?
include ("memu.php");
?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <br>
  <form>

    <div class="container ">

      <h3>게스트 네트워크</h3><br>
      <div class="form-group row">
        <label  class="col-sm-3 col-form-label">무선 2.4GHz 활성화 :</label>        &nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-outline-dark" name="fast8" value="ON">ON</button>
        <button type="submit" class="btn btn-outline-dark" name="fast8" value="OFF">OFF</button>
      </div>

      <div class="form-group row">
        <label  class="col-sm-3 col-form-label">무선 네트워크 이름(SSID):</label>
        <div class="col-sm-9">
          <input class="form-control" type="text" name="fast5" required>    
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 col-form-label">비밀번호:</label>
        <div class="col-sm-9">
          <input class="form-control" type="password" name="fast6" required>
        </div>

      </div>

      <br><br>



      <div class="container ">
        <div class="form-group row">
          <label  class="col-sm-3 col-form-label">무선 5GHz 활성화 :</label>        &nbsp;&nbsp;&nbsp;
          <button type="submit" class="btn btn-outline-dark" name="fast8" value="ON">ON</button>
          <button type="submit" class="btn btn-outline-dark" name="fast8" value="OFF">OFF</button>
        </div>

        <div class="form-group row">
          <label  class="col-sm-3 col-form-label">무선 네트워크 이름(SSID):</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" name="fast5" required>    
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-form-label">비밀번호:</label>
          <div class="col-sm-9">
            <input class="form-control" type="password" name="fast6" required>
          </div>

        </div>

        <br><br>

      </form>

      <button type="button" class="btn btn-dark btn-sm" style="background-color: #0B2161">저장</button>

    </div>

  </div>

