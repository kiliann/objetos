<?php
require 'operaciones.php';

$operacion = new Calcular();

    if(isset($_POST['+'])){
        echo $operacion->sumar($_POST['numero1'],$_POST['numero2']);
    }
?>
