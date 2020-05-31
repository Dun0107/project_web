<?
include('connect.php');
$mac=$_POST['mac'];
$ip=$_POST['ip'];
$explan=$_POST['explan'];
$no =$_POST['no'];
$state =$_POST['state'];


if($state == null){
	$state = '사용안함 ';
}
else{}
  $query="update dhcp set mac='$mac', ip='$ip', explan='$explan', state='$state' where no=$no";
  mysqli_query($con, $query);
  echo "<script>location.href='dhcp.php';</script>";
 


?>