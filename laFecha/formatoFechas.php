<?php
//echo $_POST['fecha'];
class Fecha{
    function __construct(){

    }

    //Retorna el mes con los dias de cada mes
    function meses(){
        //Array de los meses
        $meses = [
            1 => array("Enero",31),
            2 => array("Febrero",28),
            3 => array("Marzo",31),
            4 => array("Abril",30),
            5 => array("Mayo",31),
            6 => array("Junio",30),
            7 => array("Julio",31),
            8 => array("Agosto",31),
            9 => array("Septiembre",30),
            10 => array("Octubre",31),
            11 => array("Noviembre",30),
            12 => array("Diciembre",31),
        ];
        return $meses;
    }


    function bisiesto($anio){
        if(($anio%4 == 0 && $anio%100 != 0) || $anio%400 == 0){
            return $this->meses()[2][1] = (29);
        }else{
            return $this->meses();
        }
    }

    function fecha($fecha){
        $dia = substr($fecha,0,2);
        $mes = substr($fecha, 3,2);
        $anio = '20'.substr($fecha, 6, 2);


        $this->bisiesto($anio);

        $meses = $this->meses();
        foreach ($meses as $meses=> $detalles){
            if($meses == $mes) {
                $mesenletra = $detalles[0];

                foreach ($detalles as $indice => $valor){

                }
            }
        }
        return ' La fecha es: '.$dia.' '.$mesenletra.' '.$anio.' Es te mes tiene: '.$valor.' dias';
    }
}



$diasMeses['Enero '] = 31;
$diasMeses['Febrero'][0] = 28;
$diasMeses['Febrero'][1] = 29;
$diasMeses['Marzo'] = 31;
$diasMeses['Abril'] = 30;
$diasMeses['Mayo'] = 31;
$diasMeses['Junio'] = 30;
$diasMeses['Julio'] = 31;
$diasMeses['Agosto'] = 31;
$diasMeses['Septiembre'] = 30;
$diasMeses['Octubre'] = 31;
$diasMeses['Noviembre'] = 30;
$diasMeses['Dicciembre'] = 31;
?>
