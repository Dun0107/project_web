<?
    include ("memu.php");    
?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
   <div class="col-md-9 p-lg-5 mx-auto my-5">
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
      <input type="text" class="form-control" placeholder="192.168.0.100" required>
    </div>-
    <div class="col">
      <input type="text" class="form-control" placeholder="192.168.0.122" required>
    </div>
  </div>
          </div>
        </div>

        <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">임대 시간 주소:</label>
          <div class="col-sm-15">
            <input class="form-control" type="text" name="ip"placeholder="120" required>  
          </div>&nbsp<p>분. (2-2880. 기본값은 120입니다.) </p>
        </div>
<br>
        <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">기본 게이트웨이:</label>
          <div class="col-sm-15">
            <input class="form-control" type="text" name="ip" placeholder="192.168.1" required>  
          </div>&nbsp&nbsp<p>(선택 사항) </p>
        </div>
        <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">기본 DNS:</label>
          <div class="col-sm-15">
            <input class="form-control" type="text" name="ip" placeholder="192.168.1" required>  
          </div>&nbsp&nbsp<p>(선택 사항) </p>
        </div>
        <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">보조 DNS:</label>
          <div class="col-sm-15">
            <input class="form-control" type="text" name="ip" placeholder="192.168.1" required>  
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
      



  
      <div id="juso24">
          <!--JavaScript를 통해 append()함수 호출 시 이 div내부에 input text 태그가 삽입됨 -->
      </div>
      
      </td>
  </tr>
<script>
  function attachAddr(){
  const str = `<li>
        <div class="card" >
          <div class="card-body"><br>
          <form method="post" action="dhcp_add.php">
          <div class="form-group row ">
          <label style="color:black;" class="col-sm-2 col-form-label">MAC 주소:</label>      
          <div class="col-sm-15">
            <input class="form-control" type="text" name="mac"  required>    
          </div>
        </div>

        <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">IP 주소:</label>
          <div class="col-sm-15">
            <input class="form-control" type="text" name="ip"  required>  
          </div>
        </div>
        <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">설명 :</label>
          <div class="col-sm-15">
            <input class="form-control" type="text" name="explan"  required>  
          </div>
        </div>

        <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label"></label>
          <div class="col-sm-15">
            <div class="form-check">
  <input class="form-check-input" type="checkbox" name="state" value="사용 " id="defaultCheck1">
  <label class="form-check-label" style="color:black; " for="defaultCheck1">
   사용 
  </label>
</div> 


          </div>
        </div>

    <button  class="btn btn-outline-primary" style="background-color: #0B2161; color: white;" type="submit">저장</button>
          </form>
        </li>`;
  $("#juso24").append(str); // JQuery를 이용해서 juso24라는 id값을 가져와서 그곳에 append 시킨다.
}

</script>
<br><br><br><br>

  	<h1 class="display-7 font-weight-normal" style="font-weight: 700" >DHCP 클라이언트 목록 </h1>
  	<hr>
  	<table class="table table-bordered" >
  <thead style="background-color: #0B2161; color: white;">
    <tr>
      <th scope="col">번호</th>
      <th scope="col">클라이언트 이름 </th>
      <th scope="col">MAC 주소</th>
      <th scope="col">할당 된 IP 주소  </th>
      <th scope="col">임대 시간  </th>
    </tr>
  </thead>
</table>
  </div>
</div>
