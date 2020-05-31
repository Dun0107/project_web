<?
include ("memu.php");
?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-9 p-lg-5 mx-auto my-5">
  <h1 class="display-7 font-weight-normal" style="font-weight: 700" >포트 포워딩 </h1> <hr>

<div class="txts">
                    <button style="background-color: #0B2161; float:right;" type="submit" onclick="attachAddr(); return false;" class="btn btn-primary btn-sm" >추가</button>         
          </div>
          
  <table class="table table-bordered" >
  <thead style="background-color: #0B2161; color: white;">
    <tr>
      <th scope="col">번호</th>
      <th scope="col">응용 프로그램  </th>
      <th scope="col">포트 트리거  </th>
      <th scope="col">내부 IP트리거 프로토콜 </th>
      <th scope="col">외부 포트</th>
      <th scope="col">외부 프로토콜 </th>
      <th scope="col"> 상태 </th>
      <th scope="col"> </th>
    </tr>
  </thead>
    <tbody>
        
    <?
    include('connect.php');
    $query2 = "select no,pg,port,tp,oport,op,state from portt";
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
                    <button style="background-color: #0B2161;" type="submit" class="btn btn-primary btn-sm" onclick="location.href='portt_modify.php?no=<? echo $row[0]?>'"?>수정 </button> 
                
                    <button style="background-color: #0B2161;" type="submit" class="btn btn-primary btn-sm" onclick="location.href='portt_delete.php?no=<?php echo $row[0]?>'">삭제</button>
                </td>
                <tr>
                
                <?                
                 }
                 
            ?>
        
    </tbody>
</table>

 <?
$no =$_GET['no'];

    $query1 = "select no,pg,port,tp,oport,op,state from portt where no=$no";
    $result2 = mysqli_query($con,$query1);
while ($row = mysqli_fetch_row($result2)){ 
  ?>
        <div class="card" >
          <div class="card-body"><br>
          <form method="post" action="portt_m2.php">
          <div class="form-group row ">
            <input class="form-control" value="<? echo $row[0] ?>" type="hidden" name="no"  >
          <label style="color:black;" class="col-sm-2 col-form-label">응용 프로그램 :</label>      
          <div class="col-sm-15">
            <input class="form-control" type="text" name="pg" value="<? echo $row[1] ?>" required>    
          </div>
        </div>

        <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">포트 트리거 :</label>
          <div class="col-sm-15">
            <input class="form-control" type="text" value="<? echo $row[2] ?>" name="port"  required>    
          </div>
        </div>

         <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">트리거 프로토콜 :</label>
          <div class="col-sm-15">
            <select  name="tp" class="form-control" id="exampleFormControlSelect1">
      <option  value="ALL">ALL</option>
      <option value="TCP">TCP</option>
      <option value="UDP">UDP</option>
    </select>   
          </div>
        </div>

         <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">외부 포트 :</label>
          <div class="col-sm-15">
            <input value="<? echo $row[4] ?>" class="form-control" type="text" name="oport"  required>    
          </div>
        </div>

         <div class="form-group row">
          <label style="color:black;" class="col-sm-2 col-form-label">외부 프로토콜 :</label>
          <div class="col-sm-15">
            

<select name="op" class="form-control" id="exampleFormControlSelect1">
      <option  value="ALL">ALL</option>
      <option value="TCP">TCP</option>
      <option value="UDP">UDP</option>
    </select>

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
?>
</div></div>



          

