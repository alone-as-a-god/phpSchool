

<form name="form" action="" method="get">
  <input type="text" name="subject" id="subject" value="Message">
  <input type="submit" value="submit">
</form>
<?php
$host = "localhost";
$port = 12345;

$f = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_set_option($f, SOL_SOCKET, SO_SNDTIMEO, array('sec' => 1, 'usec' => 500000));
$s = socket_connect($f, $host, $port);

$msg = $_GET["subject"];
$len = strlen($msg);

socket_sendto($f, $msg, $len, 0, $host, $port);

socket_close($f);
?>
