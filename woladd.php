<?
include ("connect.php");
$name = $_POST['name'];
$mac = $_POST['mac'];




if($name != null && $mac != null){
	$query = "insert into wol (name,mac) values ('$name','$mac')";
	mysqli_query($con, $query);
    $query2 = "set @cnt=0";
	mysqli_query($con, $query2);
	$query3 = "update wol set wol.no=@cnt:=@cnt+1";
	mysqli_query($con, $query3);
    echo "<script>location.href='wol.php'</script>;";
}

else {
	
}

?>