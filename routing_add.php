routing_add.php<?
include('connect.php');
$network = $_POST['network'];
$mask = $_POST['mask'];
$gateway = $_POST['gateway'];
$interface = $_POST['interface'];
$explan = $_POST['explan'];
$state = $_POST['state'];

if($state == null){
	$state = '사용안함 ';
}
else{}
	$query = "insert into routing (network,mask,gateway,interface,explan,state) values ('$network','$mask','$gateway','$interface','$explan','$state')";
	mysqli_query($con, $query);
    $query2 = "set @cnt=0";
	mysqli_query($con, $query2);
	$query3 = "update routing set routing.no=@cnt:=@cnt+1";
	mysqli_query($con, $query3);
    echo "<script>location.href='routing.php'</script>;";


?>