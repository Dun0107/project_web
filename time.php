<?
	include ("memu.php");
?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
  	<h1 class="display-7 font-weight-normal" style="font-weight: 700" >시간설정 </h1> <br>
  </div>
  <hr>
  <div class="container ">
        <div class="form-group row">
          <label  class="col-sm-2 col-form-label">현재 시간:</label> 
          <div  style="font-size: 28px">
          <?
           echo date( 'Y/m/d H:i:s', time() );
          ?>       
      </div>
</div>
        <div class="form-group row">
          <label  class="col-sm-2 col-form-label">시간 설정:</label>
          <form method="post">
          	<button type="submit" name="test" id="test" class="btn btn-primary btn-sm" >수동 </button>
          </form>
          
        </div>

        <?
        function testfun(){
        	?>
        	<div class="form-group row">
          <label  class="col-sm-2 col-form-label">날짜:</label> 
          <div  style="font-size: 28px">                
      		</div>
      	</div>
      <div class="form-group row">
          <label  class="col-sm-2 col-form-label">시간:</label> 
          <div  style="font-size: 28px">
                 
      </div>

        	<?
        }

        if(array_key_exists('test',$_POST)){
        	testfun();
        }
        ?>
</div>