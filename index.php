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
    color: white;
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
</style>
</head>
<body>

  <nav class="navbar navbar-dark " style=" background-color: #0B2161;">
    <a class="py-2"  aria-label="Product"style="color: white" >
      <svg   xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>RouteR
    </a>



    <form  action="logout.php">
      <button style="background-color:white; color: #0B2161"  value='Logout' class="btn btn-dark btn-sm">로그인</button>
    </form>

    
    
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/images/img2.png" class="d-block w-100 " height="800" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4 font-weight-normal" style=" font-weight: 700" >
            2020 
          </h2>
          <h4  style=" font-weight: 700" >
            스마트 공유기는 보안이 강력합니다    
          </h4>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/images/img1.jpg"class="d-block w-100 " height="800" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4 font-weight-normal" style="font-weight: 700" >
            2020 
          </h2>
          <h4 style=" font-weight: 700" >
           스마트 공유기는 어디서나 관리 할 수 있습니다
         </h4>    
       </div>
     </div>
     <div class="carousel-item">
      <img src="/images/img3.png"class="d-block w-100 " height="800" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="display-4 font-weight-normal" style="font-weight: 700" >
          2020 
        </h2>
        <h4 style=" font-weight: 700" >
         스마트 공유기는 속도 제한이 없습니다
       </h4>    
     </div>
   </div>
 </div>
 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
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
