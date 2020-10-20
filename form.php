<?php

require 'Dir.php';

$codigo = $_POST['code'];
$arquivo = $_POST['arqv'];
$texto = $_POST['text'];

if (!empty($arquivo) && is_numeric($codigo))
{
    $file_handler = new Dir($codigo);
    $file_handler->replaceFile($arquivo, $texto);
}
?>