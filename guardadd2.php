<?
include 'connect.php';
$name=$_POST['name'];
$mac=$_POST['mac'];

if($name != null && $mac != null){
	$query = "insert into guard (name,mac) values ('$name','$mac')";
	mysqli_query($con, $query);
	echo "<script>alert('추가되었습니다');</script>";
}

else {
	echo "<script>alert('빈 칸을 모두 채워주세요');location.href='guardadd.php';</script>";
}

?>
