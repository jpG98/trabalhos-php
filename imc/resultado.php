<?php

$peso = $_POST["peso"];
$altura = $_POST["altura"];

$imc = $peso / ($altura * $altura);
echo $imc;
?>
