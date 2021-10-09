<?php
class Calcular{
    // public $numero1;
     //public $numero2;


     //Inicializamos las variables
     public $mayor = 0;
     public $menor = 0;


     //Cargamos el constructor con los elementos que le vamos a pasar al instaciar la clase
     public function __construct($numero1, $numero2){
          //$this->mayor;
          //$this->menor;
          $this->ordenar($numero1,$numero2);
     }

     //Ordenmos los numero de mayor a menor
     function ordenar($numero1, $numero2){
          if($this->mayor > $this->menor){
               $this->mayor = $numero1;
               $this->menor = $numero2;
          }else{
               $this->mayor = $numero2;
               $this->menor = $numero1;

          }
     }


     //funcion de la Suma
     public function sumar(){
        return $total = $this->mayor + $this->menor;
     }


     //Funcion de la resta
     function restar(){
          return $total = $this->mayor - $this->menor;
     }


     //Funcion de de multiplicar
     function multiplicar(){
          return $total = $this->mayor * $this->menor;

     }


     //Funcion de dividir
     function dividir(){
          return $total = $this->mayor / $this->menor;
     }
}


?>
