<?php
// $text = $_POST['send'];
$text = getenv("COMPUTERNAME");

$f = fopen("log.txt", "a+"); fwrite($f, $text." ".date('l jS \of F Y h:i:s A')."\r\n"); fclose($f);

?>