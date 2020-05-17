<?
include ("memu.php");


?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <br>
    <h1 class="display-7 font-weight-normal" style="font-weight: 700" >인터넷 연결 유형</h1> <br>
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div></div>
      <!-- <button type="button" value="동적" class="btn btn-outline-dark">동적</button>
      <button type="button" value="고정" class="btn btn-outline-dark">고정</button>
      
      <button type="button" value="PPPoE" class="btn btn-outline-dark">PPPoE</button>
      
      <button type="button" value="L2TP" class="btn btn-outline-dark">L2TP</button>

      <button type="button" value="PPTP" class="btn btn-outline-dark">PPTP</button>
      <br> <br><br><br><br>
      <input type="text" name="fast1"> -->
      
          <form action="fast2.php" method="post">
            <button type="submit" name="fast1" value="동적" class="btn btn-outline-dark" >동적</button>
         
            <button type="submit" class="btn btn-outline-dark" name="fast1" value="고정">고정</button>
         
            <button type="submit" class="btn btn-outline-dark" name="fast1" value="PPPoE">PPPoE</button>
          
            <button type="submit" class="btn btn-outline-dark" name="fast1" value="L2TP">L2TP</button>
         
            <button type="submit" class="btn btn-outline-dark" name="fast1" value="PPTP">PPTP</button>

          </form>
        <br><br>
     
      <br>
     

      <br><br><br><br><br><br><br>

    </div>
  </div> 

