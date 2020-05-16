<?
session_start();
if($_SESSION['id']!=null){
session_destroy();
}
echo "<script>location.href='index2.php';</script>";
?>

