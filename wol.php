<?
    include ("memu.php");
    
?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
  <h1 class="display-7 font-weight-normal" style="font-weight: 700" >WOL</h1> <br>
  </div><hr><br><br>

<br>


<table class="table table-bordered" >
  <thead style="background-color: #0B2161; color: white;">
    <tr>
      <th scope="col">번호</th>
      <th scope="col">장치 이름</th>
      <th scope="col">MAC 주소</th>
      <th scope="col">깨우기</th>
      <th scope="col"></th>
    </tr>
  </thead>
    <tbody>
        
    <?
    include('connect.php');
    $query2 = "select no,name,mac from wol";
    $resultt = mysqli_query($con,$query2);
            while ($row = mysqli_fetch_array($resultt)){
        
       
               ?>

                <tr>
                <td> <?php echo $row[0] ?></td>
                <td><?php echo $row[1] ?></td>
                <td> <?php echo $row[2] ?></td> 
                <td></td>
                <td>
                <button style="background-color: #0B2161;" type="button" class="btn btn-primary btn-sm" onclick="location.href='wol_delete.php?no=<?php echo $row[0]?>'">삭제</button>
                </td>
                <tr>
                
                <?                
                 }
                 
            ?>
        
    </tbody>
</table>

    <br>
      <div class="card" >
          <div class="card-body"><br>
          <form method="post" action="woladd.php">
          <div class="form-group row ">
          <label  class="col-sm-2 col-form-label">장치 이름:</label>      
          <div class="col-sm-15">
            <input class="form-control" type="text" name="name"  required>    
          </div>
        </div>

        <div class="form-group row">
          <label  class="col-sm-2 col-form-label">MAC 주소:</label>
          <div class="col-sm-15">
            <input class="form-control" type="text" name="mac"  required>    
          </div>
        </div>

    <button  class="btn btn-outline-primary" style="background-color: #0B2161; color: white;" type="submit">저장</button>
          </form>


        </div></div>


                    
                   


 
 