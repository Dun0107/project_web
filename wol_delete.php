<?
include('connect.php');
$no = $_GET['no'];

if($no != null){
	$query="delete from wol where no=$no";
	mysqli_query($con, $query);
	echo "<script> location.href='../wol.php';</script>";
	$query2 = "set @cnt=0";
	mysqli_query($con, $query2);
	$query3 = "update wol set wol.no=@cnt:=@cnt+1";
	mysqli_query($con, $query3);
}
else {
	echo "<script>alert('failed'); location.href='wol.php';</script>";
}

?>