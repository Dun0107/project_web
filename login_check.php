<?php
	include ("memu.php");
?>
<style>
	  .container {
    max-width: 960px;
  }
  
  /*
   * Custom translucent site header
   */
  
  .site-header {
    background-color: #0B2161;
    -webkit-backdrop-filter: saturate(180%) blur(20px);
    backdrop-filter: saturate(180%) blur(20px);
  }
  .site-header a {
    color: #999;
    transition: ease-in-out color .15s;
  }
  .site-header a:hover {
    color: black;
    text-decoration: none;
  }
  
 
  /*
   * Extra utilities
   */
  
  .flex-equal > * {
    -ms-flex: 1;
    flex: 1;
  }
  @media (min-width: 768px) {
    .flex-md-equal > * {
      -ms-flex: 1;
      flex: 1;
    }
  }
  
  .overflow-hidden { overflow: hidden; }
</style>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
  

<?php
session_start();
include ("connect.php");

$id = $_POST['id'];
$password = $_POST['password'];

$query = "select * from member where id='$id' and password='$password'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);

if($id==$row['id'] && $password==$row['password']){
$_SESSION['id'] = $row['id'];

?>
<h1 class="display-4 font-weight-normal" style="font-family:Georgia, 'Times New Roman', Times, serif" >Login Successful</h1>
<a style="color: gray" href='logout.php'value='Logout' >Logout</a>
<?php
}else{
echo "<script>window.alert('invalid username or password');</script>";
echo "<script>location.href='index.php';</script>";
}
?>
</div></div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden" style="background-color: #0B2161">
    <div class="my-3 py-3" >
      <h2 class="display-5">WEB</h2>
      <p class="lead">나지혜  박지윤</p>
    </div>
    <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
  </div>
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">APP</h2>
      <p class="lead">전예진  정현성</p>
    </div>
    <div class=" shadow-sm mx-auto" style="background-color: #0B2161; width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
  </div>
  <div class=" mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden" style="background-color: #0B2161">
    <div class="my-3 py-3">
      <h2 class="display-5">NETWORK</h2>
      <p class="lead">윤성준  표상영</p>
    </div>
    <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
  </div>
</div>


