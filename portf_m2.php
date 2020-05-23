<?
include('connect.php');
$no =$_POST['no'];
$service = $_POST['service'];
$outport = $_POST['outport'];
$ip = $_POST['ip'];
$inport = $_POST['inport'];
$protocol = $_POST['protocol'];
$state = $_POST['state'];


if($state == null){
  $state = '사용안함 ';
}
else{}

  $query="update portf set service='$service', outport='$outport', ip='$ip', inport='$inport', protocol='$protocol', state='$state' where no=$no";
  mysqli_query($con, $query);
  echo "<script>location.href='portf.php';</script>";
 


?>