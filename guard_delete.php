<?

include "connect.php";
$no = $_GET['no'];

if($no != null){
	$query="delete from guard where no=$no";
	mysqli_query($con, $query);
	echo "<script>alert('삭제되었습니다'); location.href='guard.php';</script>";
	$query2 = "set @cnt=0";
	mysqli_query($con, $query2);
	$query3 = "update guard set guard.no=@cnt:=@cnt+1";
	mysqli_query($con, $query3);
}
else {
	echo "<script>alert('failed'); location.href='guard.php';</script>";
}

?>