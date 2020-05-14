<?php

include "./connect.php";
$name=$_POST['name'];
$mac=$_POST['mac'];
$no =$_POST['no'];

if($name!=null && $mac!=null)    
{
	$query="update guard set name='$name', mac='$mac' where no=$no";
	mysqli_query($con, $query);
	echo "<script>alert('Success');</script>";
}
else {
	echo "<script>alert('no match');location.href='guard.php';</script>";
}


?>