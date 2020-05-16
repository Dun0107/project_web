<?
session_start();
include ("connect.php");

$id = $_POST['id'];
$password = $_POST['password'];
$query = "select * from member where id='$id' and password='$password'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);

if($id==$row['id'] && $password==$row['password']){
$_SESSION['id'] = $row['id'];
echo "<script>location.href='login_check.php';</script>";
}else{
echo "<script>window.alert('invalid username or password');</script>";
echo "<script>location.href='index2.php';</script>";
}
?>