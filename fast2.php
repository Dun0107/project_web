<?php
	include ("memu.php");

  $fast1=$_POST['fast1'];

?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
  <br><br><br>
  <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>  
</div></div>
<div class="container ">
<p>사용자의 ISP의 특정 MAC주소에 대한 인터넷 액세스를 허용하는 경우, 다른 장치에 대한 MAC 주소를 복제해야 합니다. 
<br>확실하지 않은 경우 MAC 주소를 복제하지 마십시오를 선택합니다. </p>
  <br>
  <div>
        <div style="display: inline; float: left; margin-left: 28%">
          <form action="fast3.php" method="post">
            <input type="hidden" name="fast2" value="MAC주소를 복제하지 마십시오">
            <input type="hidden" name="fast1" value="<? $fast1 ?>">
            <button type="submit" class="btn btn-outline-dark" >MAC주소를 복제하지 마십시오</button>
          </form>
        </div>
        <div style="display: inline; float: left; margin-left: 1%">
          <form action="fast3.php" method="post">
            <input type="hidden" name="fast2" value="현재 컴퓨터 MAC 주소를 복제">
            <input type="hidden" name="fast1" value="<? $fast1 ?>">
            <button type="submit" class="btn btn-outline-dark" >현재 컴퓨터 MAC 주소를 복제</button>
          </form>
        </div>
      </div> 
  
  <br><br>
<!--   
  <h1>RL:<? echo $fast1 ?></h1> -->

<br><br>
 
  <button style="background-color: #0B2161;" class="btn btn-dark btn-sm" onclick="location.href='fast.php'">이전</button>
  <button style="background-color: #0B2161" class="btn btn-dark btn-sm" onclick="location.href='fast3.php'">다음</button>
</div> 
<br><br><br><br><br><br><br><br><br>
</div>
