<?php
require 'formatoFechas.php';

$formato = new Fecha();
$fechita = $_POST['fecha'];

echo $formato->fecha($fechita);
?>