<body>
  <?
  include "memu.php";
  include "connect.php";
  $query = "select no,name,mac from guard";
  $result = mysqli_query($con, $query);
  ?>

  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <div style="display: inline; float: left;">
        <h2 style="font-weight: 700; display: inline; float: left;" >보호자 제어된 장치</h2>
        <button style="background-color: #0B2161; margin-left: 150px; display: inline; float: left;" type="submit" class="btn btn-primary"><a onclick="window.open('guardadd.php', 'popup', 'width=500,height=600')">추가</a></button>
      </div><br>
      <table class="table" style="border: 0.1px solid black; text-align: center;">
        <tr style="border: 0.1px solid black">
          <th style="border: 0.1px solid black">번호</th>
          <th style="border: 0.1px solid black">장치 이름</th>
          <th style="border: 0.1px solid black">MAC 주소</th>
          <th style="border: 0.1px solid black"></th>
          <th style="border: 0.1px solid black"></th>
        </tr>

        <?
        while($row = mysqli_fetch_row($result))
        {
          ?>

          <tr style="border: 0.1px solid black">
            <td style="border: 0.1px solid black"><? echo $row[0] ?></td>
            <td style="border: 0.1px solid black"><? echo $row[1] ?></td>
            <td style="border: 0.1px solid black"><? echo $row[2] ?></td>
            <td style="border: 0.1px solid black"  onclick="window.open('guard_modify.php?no=<? echo $row[0]?>', 'popup', 'width=500,height=600')">수정</td>
            <td style="border: 0.1px solid black" onclick="location.href='guard_delete.php?no=<? echo $row[0]?>'">삭제</td>
          </tr>

          <?
        }
        ?>

      </table>
    </div>

    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <hr>
      <?
      include "guard2.php";
      ?>

    </div>

  </div>
</body>
