<?
include ("memu.php");
 include('connect.php');

?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-9 p-lg-5 mx-auto my-5">
  	<br>
    <h1 class="display-7 font-weight-normal" style="font-weight: 700" >설정 </h1> <hr>
    <label >인터넷 연결 유형: </label>
    <div class="btn-group btn-group-toggle" data-toggle="buttons" >
  <label class="btn btn-secondary" style="background-color: #0B2161">
    <input type="radio" name="on" id="on" > ON
  </label>
  <label class="btn btn-secondary" style="background-color: #0B2161">
    <input type="radio" name="off" id="off"> OFF
  </label>
</div>
    <br><br><br><br>



<h1 class="display-7 font-weight-normal" style="font-weight: 700" >ARP 목록 </h1><hr>
<div class="txts">
              <button style="background-color: #0B2161; float:right;" type="submit" onclick="attachAddr2(); return false;" class="btn btn-primary btn-sm" >추가</button> 
          </div>

<table class="table table-bordered" >
  <thead style="background-color: #0B2161; color: white;">
    <tr>
      <th scope="col">번호</th>
      <th scope="col">MAC 주소</th>
      <th scope="col">IP 주소</th>
      <th scope="col">바인딩   </th>
      <th scope="col"></th>
    </tr>
  </thead>
    <tbody>
        
    <?
    
    $query = "select no,mac,ip,binding from arp";
    $result = mysqli_query($con,$query);
            while ($row = mysqli_fetch_array($result)){     
                ?>
                <tr>
                <td> <?php echo $row[0] ?></td>
                <td><?php echo $row[1] ?></td>
                <td> <?php echo $row[2] ?></td> 
                <td> <?php echo $row[3] ?></td> 
                <td>
                    <button style="background-color: #0B2161;" type="submit" class="btn btn-primary btn-sm" onclick="location.href='bindarp_modify.php?no=<? echo $row[0]?>'"?>수정 </button> 
                
                    <button style="background-color: #0B2161;" type="submit" class="btn btn-primary btn-sm" onclick="location.href='bindarp_delete.php?no=<?php echo $row[0]?>'">삭제</button>
                </td>
                <tr>
                
                <?                
                 }
                 
            ?>
        
    </tbody>
</table>
<br>
<div id="juso">
          <!--JavaScript를 통해 append()함수 호출 시 이 div내부에 input text 태그가 삽입됨 -->
      </div>
<br><br><br><br>
    <h1 class="display-7 font-weight-normal" style="font-weight: 700" >바인딩 목록  </h1><hr>
  <table class="table table-bordered" >
  <thead style="background-color: #0B2161; color: white;">
    <tr>
      <th scope="col">번호</th>
      <th scope="col">MAC 주소</th>
      <th scope="col">IP 주소</th>
      <th scope="col">설명  </th>
      <th scope="col">상태 </th>
      <th scope="col"></th>
    </tr>
  </thead>
    <tbody>
        
    <?
   
    $query = "select no,mac,ip,explan from binding";
    $result = mysqli_query($con,$query);
            while ($row = mysqli_fetch_array($result)){     
                ?>
                <tr>
                <td> <?php echo $row[0] ?></td>
                <td><?php echo $row[1] ?></td>
                <td> <?php echo $row[2] ?></td> 
                <td> <?php echo $row[3] ?></td> 
                <td></td>
                <td>
                    <button style="background-color: #0B2161;" type="submit" class="btn btn-primary btn-sm" onclick="location.href='binding_modify.php?no=<? echo $row[0]?>'"?>수정 </button> 
                
                    <button style="background-color: #0B2161;" type="submit" class="btn btn-primary btn-sm" onclick="location.href='bindging_delete.php?no=<?php echo $row[0]?>'">삭제</button>
                </td>
                <tr>
                
                <?                
                 }
                 
            ?>
        
    </tbody>
</table>

<br>
<?
$no =$_GET['no'];

    $query1 = "select no,mac,ip,explan from binding where no=$no";
    $result2 = mysqli_query($con,$query1);
while ($row = mysqli_fetch_row($result2)){ 
  ?>
      <div class="card" >
          <div class="card-body"><br>
          <form method="post" action="bind_m2.php">
          <div class="form-group row ">
            <input class="form-control" type="hidden" name="no" value="<? echo $row[0] ?>" required> 
          <label  class="col-sm-2 col-form-label">MAC 주소:</label>      
          <div class="col-sm-15">
            <input class="form-control" type="text" name="mac" value="<? echo $row[1] ?>" required>    
          </div>
        </div>

        <div class="form-group row">
          <label  class="col-sm-2 col-form-label">IP 주소:</label>
          <div class="col-sm-15">
            <input class="form-control" type="text" name="ip" value="<? echo $row[2] ?>" required>  
          </div>
        </div>
        <div class="form-group row">
          <label  class="col-sm-2 col-form-label">설명 :</label>
          <div class="col-sm-15">
            <input class="form-control" value="<? echo $row[3] ?>" type="text" name="explan"  required>  
          </div>
        </div>

    <button  class="btn btn-outline-primary" style="background-color: #0B2161; color: white;" type="submit">저장</button>
          </form>
<?
 }
?>
</div></div>
