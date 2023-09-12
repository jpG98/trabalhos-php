<?php
$nota1 = $_POST["Portugues"];
$nota2 = $_POST["Matematica"];
$nota3 = $_POST["quimica"];
$nota4 = $_POST["fisica"];

$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

echo $media;
?>