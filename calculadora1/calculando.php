<?php
require 'operaciones.php';

$operacion = new Calcular();
//echo $_POST['numero1'];
$numeroMayor = $_POST['numero1'];
$numeroMenor = $_POST['numero2'];

    /*if ($numeroMayor > $numeroMenor){
        $numeroMayor = $numeroMenor;
        $numeroMenor = $numeroMayor;

    }*/
    if(isset($_POST['simbolo'])){
        if($_POST['simbolo']=='+'){
            echo $operacion->sumar($numeroMayor,$numeroMenor);
            //echo $operacion;
        }
        if($_POST['simbolo']=='-'){
            echo $operacion->restar($numeroMayor,$numeroMenor);
        }
        if($_POST['simbolo']=='*'){
            echo $operacion->multiplicar($numeroMayor,$numeroMenor);
        }
        if($_POST['simbolo']=='/'){
            echo $operacion->dividir($numeroMayor,$numeroMenor);
        }

    }

?>
