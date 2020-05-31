
<?
include('connect.php');
$no =$_POST['no'];
$network = $_POST['network'];
$mask = $_POST['mask'];
$gateway = $_POST['gateway'];
$interface = $_POST['interface'];
$explan = $_POST['explan'];
$state = $_POST['state'];


if($state == null){
  $state = '사용안함 ';
}
else{}

  $query="update routing set network='$network', mask='$mask', gateway='$gateway', interface='$interface', explan='$explan', state='$state' where no=$no";
  mysqli_query($con, $query);
  echo "<script>location.href='routing.php';</script>";



?>
