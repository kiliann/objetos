<?php
//instaciamos la clase operaciones
require 'operaciones.php';

//recogemos los elementos del formulario en variables
$numeroMayor = $_POST['numero1'];
$numeroPequeño = $_POST['numero2'];

//inicializamos la clase
$operacion = new Calcular($numeroMayor, $numeroPequeño);

    //Comprobamos si el formulario envio algo
    if(isset($_POST['simbolo'])){

       /* if ($numeroMayor < $numeroPequeño){
            echo $numeroMayor = $numeroPequeño;
            echo $numeroPequeño = $numeroMayor;
            echo $numeroMayor.'  espacio   ';
            echo $numeroPequeño.'    ';

        }*/
        //Vemos que simbolo envio para hacer las diferente operciones.
        if($_POST['simbolo']=='+'){
            echo 'El resultado es:'.$operacion->sumar();
            //echo $operacion;
        }
        if($_POST['simbolo']=='-'){
            echo 'El resultado es:'.$operacion->restar();
        }
        if($_POST['simbolo']=='*'){
            echo 'El resultado es:'.$operacion->multiplicar();
        }
        if($_POST['simbolo']=='/'){
            echo 'El resultado es:'.$operacion->dividir();
        }

    }

?>
