<?

include "connect.php";
$domain=$_POST['domain'];
$no =$_POST['no'];

if($domain!= null)    
{
	$query="update guard2 set domain='$domain' where no=$no";
	mysqli_query($con, $query);
	echo "<script>alert('Success');</script>";
}
else {
	echo "<script>alert('no match');location.href='guard.php';</script>";
}


?>