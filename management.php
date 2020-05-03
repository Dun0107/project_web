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
      <ul>
        <li style="margin-left: 1%"><a href="" style="font-size: 20px;">2020 공유기</a></li>
        <li style="margin-left: 12%"><a href="#">빠른 설치</a></li>
        <li style="margin-left: 3%"><a href="#" id="current">기본</a>
        </li>
        <li style="margin-left: 3%"><a href="#">고급</a></li>

        <button style="margin-left: 30%; margin-right: 15px; margin-top: 28px; width:80px; height:40px; border: none; text-align: center; text-decoration: none; display: inline-block; font-size: 15px; border-radius:10px;">로그아웃</button>
        <button style="margin-left: 1%; width:80px; height:40px; border: none; text-align: center; text-decoration: none; display: inline-block; font-size: 15px; border-radius:10px;">재부팅</button>
      </ul>
    </div>
    
  <br><br><br>
  <center>
    <h1 style="color:#2b2f3a; text-decoration-line: none; font-family: Helvetica, sans-serif; font-weight: 500;">계정 관리</h1>
  </center>
  <div style="width: 80%; margin-top: 50px;">
    <form method="post" action="modify.php">
      <p style="font-family: Helvetica, sans-serif; font-weight: 900; margin-left: 47%">이전 비밀번호 : <input type="password" name="password" value="" style="margin-left: 3.9%; width: 200px; height:30px;line-height;15px;border:1px solid #B5B5B5; " maxlength="80"></p>
      <p style="font-family: Helvetica, sans-serif; font-weight: 900; margin-left: 47%">새 비밀번호 : <input type="password" name="new_password" value="" style="margin-left: 6.3%; width: 200px; height:30px;line-height;15px;border:1px solid #B5B5B5;" maxlength="80"></p>
      <p style="font-family: Helvetica, sans-serif; font-weight: 900; margin-left: 47%">새 비밀번호 확인 : <input type="password" name="new_password2" value="" style="margin-left: 0.6%; width: 200px; height:30px;line-height;15px;border:1px solid #B5B5B5;" maxlength="80"></p>
    </div>
    <div style="width: 100%; margin-top: 5%;">
      <button type="submit" style="margin-left:82%; width:80px; height:40px; border: none; text-align: center; text-decoration: none; display: inline-block; font-size: 15px; border-radius:10px; border: 1px solid black;">
        <a style="color: #2b2f3a; text-decoration-line: none; font-family: Helvetica, sans-serif; font-weight: 500;">저장</a>
      </button>
    </form>
  </div>
</body>
</html>
