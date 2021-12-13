<?php
$ip = $_POST[ 'ip' ];
echo $ip;
$result = shell_exec( 'ping  ' . $ip);
echo $result;
echo "<pre>{$result}</pre>";
?>