<?php

$baglanti = $_SERVER['REQUEST_METHOD'];

$salt  = "Rastgele Bir sifre";
$hash = sha1($_GET['h'] . $salt);

echo $hash;
?>