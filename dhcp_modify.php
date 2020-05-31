
<?
    include ("memu.php");    
?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  
  	<h1 class="display-7 font-weight-normal" style="font-weight: 700" >설정 </h1>
  	<hr>
  	<div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">DHCP 서버: </label>
          <div class="col-sm-15">
            <div class="form-check">
  <input class="form-check-input" type="checkbox" name="binding" value="DHCP 서버를 사용 "  id="defaultCheck1">
  <label class="form-check-label" style="color:black;" for="defaultCheck1">
   DHCP 서버를 사용
  </label></div>  
          </div>
        </div>
        <br>
          
          <div class="form-group row ">
          <label style="color:black;" class="col-sm-2 col-form-label">IP 주소 풀:</label>      
          <div class="col-sm-15">
            <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" required>
    </div>-
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name" required>
    </div>
  </div>
          </div>
        </div>

        <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">임대 시간 주소:</label>
          <div class="col-sm-15">
            <input class="form-control" type="text" name="ip" required>  
          </div>&nbsp<p>분. (2-2880. 기본값은 120입니다.) </p>
        </div>
<br>
        <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">기본 게이트웨이:</label>
          <div class="col-sm-15">
            <input class="form-control" type="text" name="ip" required>  
          </div>&nbsp&nbsp<p>(선택 사항) </p>
        </div>
        <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">기본 DNS:</label>
          <div class="col-sm-15">
            <input class="form-control" type="text" name="ip" required>  
          </div>&nbsp&nbsp<p>(선택 사항) </p>
        </div>
        <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">보조 DNS:</label>
          <div class="col-sm-15">
            <input class="form-control" type="text" name="ip" required>  
          </div>&nbsp&nbsp<p>(선택 사항) </p>
        </div>
        
        <button  class="btn btn-outline-primary" style="background-color: #0B2161; color: white; float:right" type="submit">저장</button>
          
<br><br><br><br>
  	<h1 class="display-7 font-weight-normal" style="font-weight: 700" >주소 예약 </h1>
  	<hr>
<div class="txts">
              <button style="background-color: #0B2161; float:right;" type="submit" onclick="attachAddr(); return false;" class="btn btn-primary btn-sm" >추가</button> 
          </div>
  <table class="table table-bordered" >
  <thead style="background-color: #0B2161; color: white;">
    <tr>
      <th scope="col">번호</th>
      <th scope="col">MAC 주소</th>
      <th scope="col">예약된 IP 주소</th>
      <th scope="col">설명 </th>
      <th scope="col">상태 </th>
      <th scope="col"></th>
    </tr>
  </thead>
    <tbody>
        
    <?
     include('connect.php');
    $query = "select no,mac,ip,explan,state from dhcp";
    $result = mysqli_query($con,$query);
            while ($row = mysqli_fetch_array($result)){     
                ?>
                <tr>
                <td> <?php echo $row[0] ?></td>
                <td><?php echo $row[1] ?></td>
                <td> <?php echo $row[2] ?></td> 
                <td> <?php echo $row[3] ?></td> 
                <td><?php echo $row[4] ?></td>
                <td>
                    <button style="background-color: #0B2161;" type="submit" class="btn btn-primary btn-sm" onclick="location.href='dhcp_modify.php?no=<? echo $row[0]?>'"?>수정 </button> 
                
                    <button style="background-color: #0B2161;" type="submit" class="btn btn-primary btn-sm" onclick="location.href='dhcp_delete.php?no=<?php echo $row[0]?>'">삭제</button>
                </td>
                <tr>
                
                <?                
                 }
                 
            ?>
        
    </tbody>
</table>

<br>
  </tr>
   <?
$no =$_GET['no'];
    $query1 = "select no,mac,ip,explan,state from dhcp where no=$no";
    $result2 = mysqli_query($con,$query1);
while ($row = mysqli_fetch_row($result2)){ 
  ?>

        <div class="card" >
          <div class="card-body"><br>
          <form method="post" action="dhcp_m2.php">
          <div class="form-group row ">
          	<input class="form-control" type="hidden" name="no" value="<? echo $row[0] ?>"  > 
          <label style="color:black;" class="col-sm-2 col-form-label">MAC 주소:</label>      
          <div class="col-sm-15">
            <input class="form-control" type="text" name="mac" value="<? echo $row[1] ?>"  required>    
          </div>
        </div>

        <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">IP 주소:</label>
          <div class="col-sm-15">
            <input class="form-control" type="text" name="ip" value="<? echo $row[2] ?>"  required>  
          </div>
        </div>
        <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">설명 :</label>
          <div class="col-sm-15">
            <input class="form-control" type="text" name="explan" value="<? echo $row[3] ?>"  required>  
          </div>
        </div>

        <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label"></label>
          <div class="col-sm-15">
            <div class="form-check">
  <input class="form-check-input" type="checkbox" name="state" value="사용 " id="defaultCheck1">
  <label class="form-check-label" style="color:black;" for="defaultCheck1">
   사용 
  </label>
</div> 


          </div>
        </div>

    <button  class="btn btn-outline-primary" style="background-color: #0B2161; color: white;" type="submit">저장</button>
          </form>
          <?
}
?>
  
</div></div>
<br><br><br><br>
  	<h1 class="display-7 font-weight-normal" style="font-weight: 700" >DHCP 클라이언트 목록 </h1>
