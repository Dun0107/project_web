<?
include('connect.php');
$ip = $_POST['ip'];
$mac = $_POST['mac'];
$binding = $_POST['binding'];

if($binding == null){
	$binding = '언바인딩 ';
}
else{}


	$query = "insert into arp (mac,ip,binding) values ('$mac','$ip','$binding')";
	mysqli_query($con, $query);
    $query2 = "set @cnt=0";
	mysqli_query($con, $query2);
	$query3 = "update arp set arp.no=@cnt:=@cnt+1";
	mysqli_query($con, $query3);
    echo "<script>location.href='binding.php'</script>;";


?>