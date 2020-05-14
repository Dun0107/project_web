<?php 

include 'connect.php';
$domain = $_POST['domain'];

if($domain != null){
	$sql = "insert into guard2 (domain) values ('$domain')";

	if($con->query($sql)){
		$query2 = "set @cnt=0";
		mysqli_query($con, $query2);
		$query3 = "update guard2 set guard2.no=@cnt:=@cnt+1";
		mysqli_query($con, $query3);
		echo "<script>alert('추가되었습니다');</script>";

	}else{
		echo "<script>alert('추가 failed'); location.href='guard2add.php'</script>";
	}
}
else {
	echo "<script>alert('도메인 주소를 입력해주세요');location.href='guard2add.php';</script>";
}

?>