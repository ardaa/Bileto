<?php

$baglanti = $_SERVER['REQUEST_METHOD'];

$salt  = "Rastgele Bir sifre";
$hash = sha1($_POST['h'] . $salt);

echo $hash;
?>