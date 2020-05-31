<?
include('connect.php');
$no = $_GET['no'];

if($no != null){
	$query="delete from routing where no=$no";
	mysqli_query($con, $query);
	echo "<script> location.href='routing.php';</script>";
	$query2 = "set @cnt=0";
	mysqli_query($con, $query2);
	$query3 = "update routing set routing.no=@cnt:=@cnt+1";
	mysqli_query($con, $query3);
}
else {
	echo "<script>alert('failed'); location.href='routing.php';</script>";
}

?>