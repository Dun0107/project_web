<?php
include "db.php";
?>

<!DOCTYPE HTML>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<style type="text/css">
  .menubar li{
    float: left;
    list-style: none;
    padding: 30px;
  }

  .menubar li ul {

    display:none;
    height:auto;
    padding:0px;
    margin:0px;
    border:0px;
    position:absolute;
    margin-top: 40px;
    width: 100%;


  }

  .menubar a{
    font-size: 20px;
    font-weight: 500;
    color: white;
  }

  .menubar2:hover .menubar a {
    background-color: #3e8e41;
  }

  .menubar2 {
    /*display: none;*/
  }

  .menubar2 a{
/*    font-size: 20px;
font-weight: 500;*/
color: black;
display: block;

}
/*
  .menubar2 li{
    list-style: none;

    }*/
/*
  .menubar2 li ul {
    
    display:none;
    height:auto;
    padding:0px;
    margin:0px;
    border:0px;
    position:absolute;
    margin-top: 40px;
    width: 100%;


    }*/

  </style>
  <body>
    <div class="menubar" style="width: 100%; height: 100px; background-color: #1e3269;">
     <li style="margin-left: 1%"><a href="" style="font-size: 20px;">2020 공유기</a></li>
        <!-- <li style="margin-left: 12%"><a href="fast_test.php">빠른 설치</a></li>
        <li style="margin-left: 3%"><a href="#" id="current">기본</a>
        </li>
        <li style="margin-left: 3%"><a href="#">고급</a></li> -->
<!-- 
        <button style="margin-left: 30%; margin-right: 15px; margin-top: 28px; width:80px; height:40px; border: none; text-align: center; text-decoration: none; display: inline-block; font-size: 15px; border-radius:10px;">로그아웃</button>
        <button style="margin-left: 1%; width:80px; height:40px; border: none; text-align: center; text-decoration: none; display: inline-block; font-size: 15px; border-radius:10px;">재부팅</button> -->

      </div>

      <div class="container" style=" width: 50%; text-align: center; margin-top:6%; height: 500px;">
        <h1>LOGIN</h1><br><br>
        <form method="post" action="">
          <input class="container" type="text" name="id" class="form-control input-lg" placeholder="ID" style="height: 50px; width: 80%; font-size: 20px;" onkeypress="filterKey('[0-9,a-z]');" onkeyup="this.value=this.value.replace(/[^a-zA-z,^0-9]/g,'')"><br><br>
          <input class="container" type="password" name="password" class="form-control input-lg" placeholder="Password" style="height: 50px; width: 80%; font-size: 20px;"> <br><br><br>
          <button class="btn btn-light" type="submit" style="border:1px solid black">로그인</button>
        </form>
      </div>
    </body>
    </html>
