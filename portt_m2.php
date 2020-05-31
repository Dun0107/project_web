
<?
include('connect.php');
$no =$_POST['no'];
$pg = $_POST['pg'];
$port = $_POST['port'];
$tp = $_POST['tp'];
$oport = $_POST['oport'];
$op = $_POST['op'];
$state = $_POST['state'];


if($state == null){
  $state = '사용안함 ';
}
else{}

  $query="update portt set pg='$pg', port='$port', tp='$tp', oport='$oport', op='$op', state='$state' where no=$no";
  mysqli_query($con, $query);
  echo "<script>location.href='portt.php';</script>";
 


?>
