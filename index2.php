<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
    color: white;
    transition: ease-in-out color .15s;
  }
  .site-header a:hover {
    color:white;
    text-decoration: none;
  }
  
  /*
   * Dummy devices (replace them with your own or something else entirely!)
   */
  
  .product-device {
    position: absolute;
    right: 10%;
    bottom: -30%;
    width: 300px;
    height: 540px;
    background-color: #333;
    border-radius: 21px;
    -webkit-transform: rotate(30deg);
    transform: rotate(30deg);
  }
  
  .product-device::before {
    position: absolute;
    top: 10%;
    right: 10px;
    bottom: 10%;
    left: 10px;
    content: "";
    background-color: rgba(255, 255, 255, .1);
    border-radius: 5px;
  }
  
  .product-device-2 {
    top: -25%;
    right: auto;
    bottom: 0;
    left: 5%;
    background-color: #e5e5e5;
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
</head>
<body>


  <nav class="navbar  " style=" background-color: #0B2161;">
  
    <a class="py-2"  aria-label="Product" style="color: white">
      <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>RouteR
    </a>    
  </nav>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light " style="height: 700px;">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal" style="font-weight: 700" >로그인</h1>
    <?
      session_start();
      if($_SESSION['id'] == null){

      ?>


<form name="login_form" action="login.php" method="post">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">ID</label>
  <input type="text"class="form-control" name="id" placeholder="ID" required >
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <br>
  <button class="btn btn-lg btn-dark btn-block" style="background-color: #0B2161" name="login" value="Login" type="submit">로그인</button>
  
</form>

<?
}else{

}
?>
  </div>  
</div>


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




  
</body>
</html>
