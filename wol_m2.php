<?
include('connect.php');
$name=$_POST['name'];
$mac=$_POST['mac'];
$no =$_POST['no'];

if($name!=null && $mac!=null)    
{

  $query="update wol set name='$name', mac='$mac' where no=$no";
  mysqli_query($con, $query);
  echo "<script>location.href='wol.php';</script>";
  }
else {
	echo "<script>alert('no match');</script>";
}


?>