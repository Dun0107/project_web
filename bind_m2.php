<?
include('connect.php');
$mac=$_POST['mac'];
$ip=$_POST['ip'];
$explan=$_POST['explan'];
$no =$_POST['no'];

if($mac!=null && $ip!=null)    
{

  $query="update binding set mac='$mac', ip='$ip', explan='$explan' where no=$no";
  mysqli_query($con, $query);
  echo "<script>location.href='binding.php';</script>";
  }
else {
	echo "<script>alert('no match');location.href='binding.php';</script>";
}


?>