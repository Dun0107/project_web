<?
include('connect.php');
$service = $_POST['service'];
$outport = $_POST['outport'];
$ip = $_POST['ip'];
$inport = $_POST['inport'];
$protocol = $_POST['protocol'];
$state = $_POST['state'];

if($state == null){
	$state = '사용안함 ';
}
else{}
	$query = "insert into portf (service,outport,ip,inport,protocol,state) values ('$service','$outport','$ip','$inport','$protocol','$state')";
	mysqli_query($con, $query);
    $query2 = "set @cnt=0";
	mysqli_query($con, $query2);
	$query3 = "update portf set portf.no=@cnt:=@cnt+1";
	mysqli_query($con, $query3);
    echo "<script>location.href='portf.php'</script>;";


?>