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

        <button style="margin-left: 80%; margin-top: 28px; width:80px; height:40px; border: none; text-align: center; text-decoration: none; display: inline-block; font-size: 15px; border-radius:10px;"><a href="index2.php" style="color: black">로그인</a></button>

      </div>

      <div style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('./images/img2.png'); background-repeat: no-repeat; background-size: cover; height: 700px;">
        <br><br><br><br><br><br><br><br><br>
        <h1 style="color: white; font-weight: 800; text-align: center;">2020 스마트 공유기</h1>
        <br><h3 style="color: white; font-weight: 800; text-align: center;">스마트 공유기는 보안이 완벽합니다.</h3>
        <br><br><br><br><br><br><br><br><br><br><br>
          <div style="border-radius: 50%; background-color: white; width: 15px; height: 15px; display: inline; float: left; margin-left: 46%;" onclick="location.href='./index3.php'"></div>
          <div style="border-radius: 50%; background-color: white; width: 15px; height: 15px; display: inline; float: left; margin-left: 1%; box-shadow: inset 0 0 10px red, 0 0 10px blue;" onclick="location.href='./index4.php'"></div>
          <div style="border-radius: 50%; background-color: white; width: 15px; height: 15px; display: inline; float: left; margin-left: 1%"></div>
          <div style="border-radius: 50%; background-color: white; width: 15px; height: 15px; display: inline; float: left; margin-left: 1%"></div>
      </div>
      <div>
        <center><h4>2020 JBU 졸업작품 RouteR 조</h4></center>
      </div>
    </body>
    </html>
