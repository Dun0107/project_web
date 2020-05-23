<?
include('connect.php');
$ip=$_POST['ip'];
$mac=$_POST['mac'];
$no =$_POST['no'];
$binding =$_POST['binding'];


if($binding == null){
	$binding = '언바인딩 ';
}
else{}

  $query="update arp set mac='$mac',ip='$ip',binding='$binding' where no=$no";
  mysqli_query($con, $query);
  echo "<script>location.href='binding.php';</script>";
  

?>