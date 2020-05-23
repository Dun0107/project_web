<?
include('connect.php');
$mac = $_POST['mac'];
$ip = $_POST['ip'];
$explan = $_POST['explan'];

echo $mac;

	$query = "insert into binding (mac,ip,explan) values ('$mac','$ip','$explan')";
	mysqli_query($con, $query);
    $query2 = "set @cnt=0";
	mysqli_query($con, $query2);
	$query3 = "update binding set binding.no=@cnt:=@cnt+1";
	mysqli_query($con, $query3);
    echo "<script>location.href='binding.php'</script>;";

?>