<?php
function Filtro($texto) {
  return htmlspecialchars(trim($texto), ENT_QUOTES);
}

$titulo = isset($_POST['titulo']) ? (int) $_POST['titulo'] : 0;
$cantidad = isset($_POST['cantidad']) ? (int) $_POST['cantidad'] : 0;

$matrix = 2;
$psicosis = 3;


if($titulo == "matrix"  && ($cantidad > 0 && $cantidad < 3))


?>