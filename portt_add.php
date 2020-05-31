<?
include('connect.php');
$pg = $_POST['pg'];
$port = $_POST['port'];
$tp = $_POST['tp'];
$oport = $_POST['oport'];
$op = $_POST['op'];
$state = $_POST['state'];

if($state == null){
	$state = '사용안함 ';
}
else{}
	$query = "insert into portt (pg,port,tp,oport,op,state) values ('$pg','$port','$tp','$oport','$op','$state')";
	mysqli_query($con, $query);
    $query2 = "set @cnt=0";
	mysqli_query($con, $query2);
	$query3 = "update portt set portt.no=@cnt:=@cnt+1";
	mysqli_query($con, $query3);
    echo "<script>location.href='portt.php'</script>;";


?>