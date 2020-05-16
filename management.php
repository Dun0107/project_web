<?
	include ("memu.php");
?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">

<h2  style="font-weight: 700" >계정 관리</h2>&nbsp;<hr>
  <div>
    <form method="post" action="modify.php">
      <p>이전 비밀번호:<input style="margin-left: 43px" type="password" name="password"></p>
      <p>새 비밀번호 : <input style="margin-left: 50px" type="password" name="new_password" value="" ></p>
      <p>새 비밀번호 확인 : <input style="margin-left: 14px" type="password" name="new_password2" value=""></p>
    </div>
    <div >
      <br><br>
      <button style="background-color: #0B2161" type="submit" class="btn btn-primary"> 
      <a  >저장</a>
      </button>
    </form>
  </div><br><br><br>
  
</div></div>
