<?php
require 'operaciones.php';

$operacion = new Calcular();
//echo $_POST['numero1'];
    if(isset($_POST['+'])){
        echo $operacion->sumar($_POST['numero1'],$_POST['numero2']);
        //echo $operacion;
    }
    if(isset($_POST['-'])){
        echo $operacion->restar($_POST['numero1'],$_POST['numero2']);
    }
    if(isset($_POST['*'])){
        echo $operacion->multiplicar($_POST['numero1'],$_POST['numero2']);
    }
    if(isset($_POST['/'])){
        echo $operacion->dividir($_POST['numero1'],$_POST['numero2']);
    }
?>
