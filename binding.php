<?
include ("memu.php");

include('connect.php');
?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-9 p-lg-5 mx-auto my-5">
  	<br>
    <h1 class="display-7 font-weight-normal" style="font-weight: 700" >설정 </h1> <hr>
    <label >ARP 바인딩 : </label>
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


<br><br>
    <h1 class="display-7 font-weight-normal" style="font-weight: 700" >바인딩 목록  </h1><hr>
    <div class="txts">
              <button style="background-color: #0B2161; float:right;" type="submit" onclick="attachAddr(); return false;" class="btn btn-primary btn-sm" >추가</button> 
          </div>
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
                    <button style="background-color: #0B2161;" type="submit" class="btn btn-primary btn-sm" onclick="location.href='bind_modify.php?no=<? echo $row[0]?>'"?>수정 </button> 
                
                    <button style="background-color: #0B2161;" type="submit" class="btn btn-primary btn-sm" onclick="location.href='bind_delete.php?no=<?php echo $row[0]?>'">삭제</button>
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
          <form method="post" action="bind_add.php">
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

    <button  class="btn btn-outline-primary" style="background-color: #0B2161; color: white;" type="submit">저장</button>
          </form>
        </li>`;
  $("#juso24").append(str); // JQuery를 이용해서 juso24라는 id값을 가져와서 그곳에 append 시킨다.
}

</script>
<script>
  function attachAddr2(){
  const str = `<li>
        <div class="card" >
          <div class="card-body"><br>
          <form method="post" action="bindarp_add.php">
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
          <label style="color:black;" class="col-sm-2 col-form-label"></label>
          <div class="col-sm-15">
            <div class="form-check">
  <input class="form-check-input" type="checkbox" name="binding" value="바인딩 " id="defaultCheck1">
  <label class="form-check-label" style="color:black;" for="defaultCheck1">
   바인딩 
  </label>
</div>  
          </div>
        </div>

    <button  class="btn btn-outline-primary" style="background-color: #0B2161; color: white;" type="submit">저장</button>
          </form>
        </li>`;
  $("#juso").append(str); // JQuery를 이용해서 juso24라는 id값을 가져와서 그곳에 append 시킨다.
}

</script>

</div>
</div>