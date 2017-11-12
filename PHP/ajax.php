<?php

$gelen=filter_input(INPUT_POST, "q");


$data["raw"]=$gelen;

$hash = hash('sha1', $gelen."Rastgele Bir sifre");

$data["hash"]=$hash;

echo json_encode($data);


	
?>