<?
 

   $ip_address;



   $ip_address = $_SERVER["REMOTE_ADDR"];



   echo '$ip_address : '.$ip_address.'<br>';
?>

<?php
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
echo "SERVER 함수 사용자 아이피 : ".$_SERVER['REMOTE_ADDR'];
echo "<br>";
echo "getenv 사용자 아이피 : ".get_client_ip();
?>
<br>
<?
exec("arp -H ether -n -a ".$REMOTE_ADDR."",$values);
$parts = explode(' ',$values[0]);
print $parts[3];

?>


