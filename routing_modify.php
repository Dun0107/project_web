<?
include ("memu.php");

include('connect.php');
?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-9 p-lg-5 mx-auto my-5">

  	<h1 class="display-7 font-weight-normal" style="font-weight: 700" >고급 라우팅   </h1> <hr>
<div class="txts">
                    <button style="background-color: #0B2161; float:right;" type="submit" onclick="attachAddr(); return false;" class="btn btn-primary btn-sm" >추가</button>         
          </div>
          
	<table class="table table-bordered" >
  <thead style="background-color: #0B2161; color: white;">
    <tr>
      <th scope="col">번호</th>
      <th scope="col">대상 네트워크   </th>
      <th scope="col">서브넷 마스크  </th>
      <th scope="col">기본 게이트웨이  </th>
      <th scope="col">인터페이스 </th>
      <th scope="col">설명  </th>
      <th scope="col"> 상태 </th>
      <th scope="col"> </th>
    </tr>
  </thead>
    <tbody>
        
    <?
    include('connect.php');
    $query2 = "select no,network,mask,gateway,interface,explan,state from routing";
    $resultt = mysqli_query($con,$query2);
            while ($row = mysqli_fetch_array($resultt)){
        
       
               ?>

                <tr>
                <td> <?php echo $row[0] ?></td>
                <td><?php echo $row[1] ?></td>
                <td> <?php echo $row[2] ?></td>
                <td> <?php echo $row[3] ?></td> 
                <td> <?php echo $row[4] ?></td> 
                <td> <?php echo $row[5] ?></td> 
                <td> <?php echo $row[6] ?></td>
                <td>
                    <button style="background-color: #0B2161;" type="submit" class="btn btn-primary btn-sm" onclick="location.href='routing_modify.php?no=<? echo $row[0]?>'"?>수정 </button> 
                
                    <button style="background-color: #0B2161;" type="submit" class="btn btn-primary btn-sm" onclick="location.href='routing_delete.php?no=<?php echo $row[0]?>'">삭제</button>
                </td>
                <tr>
                
                <?                
                 }
                 
            ?>
        
    </tbody>
</table>
 <?
$no =$_GET['no'];

    $query1 = "select no,network,mask,gateway,interface,explan,state from routing where no=$no";
    $result2 = mysqli_query($con,$query1);
while ($row = mysqli_fetch_row($result2)){ 
  ?>
        <div class="card" >
          <div class="card-body"><br>
          <form method="post" action="routing_m2.php">
            <input class="form-control" value="<? echo $row[0] ?>" type="hidden" name="no"  >
          <div class="form-group row ">
          <label style="color:black;" class="col-sm-2 col-form-label">대상 네트워크  :</label>      
          <div class="col-sm-15">
            <input value="<? echo $row[1] ?>"class="form-control" type="text" name="network"  required>    
          </div>
        </div>

        <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">서브넷 마스크 :</label>
          <div class="col-sm-15">
            <input value="<? echo $row[2] ?>"class="form-control" type="text" name="mask"  required>    
          </div>
        </div>

         <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">기본 게이트웨이 :</label>
          <div class="col-sm-15">
            <input value="<? echo $row[3] ?>"class="form-control" type="text" name="gateway"  required>
          </div>
        </div>

         <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">인터페이스 :</label>
          <div class="col-sm-15">
          <select name="interface" class="form-control" id="exampleFormControlSelect1">
      <option  value="ALL">ALL</option>
      <option value="TCP">TCP</option>
      <option value="UDP">UDP</option>
    </select>                
          </div>
        </div>

         <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">설명 :</label>
          <div class="col-sm-15">            
<input value="<? echo $row[5] ?>"class="form-control" type="text" name="explan"  required>
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

        </div>        
          </form>
          <?
}
?></div>
        
  	<br><br><br><br>
  	<h1 class="display-7 font-weight-normal" style="font-weight: 700" >시스템 라우팅 테이블   </h1> <hr>
  </div>
</div>
