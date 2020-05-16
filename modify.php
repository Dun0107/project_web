<?

session_start();
include ("connect.php");

$password=$_POST['password'];
$new_password=$_POST['new_password'];
$new_password2=$_POST['new_password2'];
$check = "select * from member where id='admin'";
 $result=$con->query($check);
 $row=$result->fetch_array(MYSQLI_ASSOC);

if($password!=null && $new_password!=null)  { 
	if($row['password']==$password){
		if($new_password == $new_password2){
			$sql = "update member set password='$new_password' where id='admin'";

			if($con->query($sql)){
				echo "<script>alert('수정했습니다'); location.href='management.php'</script>";

			}else{
				echo "<script>alert('Failed'); location.href='management.php'</script>";
			}
		}
		else {
			echo "<script>alert('다시 확인해주세요'); location.href='management.php'</script>";
		}
	}
	else {
		echo "<script>alert('이전 비밀번호를 다시 확인해주세요'); location.href='management.php'</script>";
	}
}
else {

}
?>
