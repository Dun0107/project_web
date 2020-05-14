
<div style="display: inline; float: left;">
        <h2 style="font-weight: 700; display: inline; float: left;" >콘텐츠 제한</h2>
        <button style="background-color: #0B2161; margin-left: 255px; display: inline; float: left;" type="submit" class="btn btn-primary"><a onclick="window.open('guard2add.php', 'popup', 'width=500,height=600')">추가</a></button>
      </div><br>
<?
include "connect.php";
$query = "select no,domain from guard2";
$result = mysqli_query($con, $query);

?>
<table class="table" style="border: 0.1px solid black; text-align: center;">
	<tr style="border: 0.1px solid black">
		<th style="border: 0.1px solid black">번호</th>
		<th style="border: 0.1px solid black">차단된 도메인</th>
		<th style="border: 0.1px solid black"></th>
		<th style="border: 0.1px solid black"></th>
	</tr>

	<?php
	while($row = mysqli_fetch_row($result))
	{
		?>

		<tr style="border: 0.1px solid black">
			<td style="border: 0.1px solid black"><? echo $row[0] ?></td>
			<td style="border: 0.1px solid black"><? echo $row[1] ?></td>
			<td style="border: 0.1px solid black" onclick="window.open('guard2_modify.php?no=<? echo $row[0]?>', 'popup', 'width=500,height=600')">수정</td>
			<td style="border: 0.1px solid black" onclick="location.href='guard2_delete.php?no=<? echo $row[0]?>'">삭제</td>
		</tr>

		<?
	}
	?>

</table>
<br>
<!-- <form method="post" action="guard2_save.php">
	<input type="text" name="domain">
	<button style="background-color: #0B2161" type="submit" class="btn btn-primary"> 
		<a  >저장</a>
	</button>
</form> -->

