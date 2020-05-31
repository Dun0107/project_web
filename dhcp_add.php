<?
include('connect.php');
$mac = $_POST['mac'];
$ip = $_POST['ip'];
$explan = $_POST['explan'];
$state = $_POST['state'];

if($state == null){
	$state = '사용안함 ';
}
else{}

	$query = "insert into dhcp (mac,ip,explan,state) values ('$mac','$ip','$explan','$state')";
	mysqli_query($con, $query);
    $query2 = "set @cnt=0";
	mysqli_query($con, $query2);
	$query3 = "update dhcp set dhcp.no=@cnt:=@cnt+1";
	mysqli_query($con, $query3);
    echo "<script>location.href='dhcp.php'</script>;";

?>