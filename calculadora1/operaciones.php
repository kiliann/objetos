<?php
class Calcular{
     public $numero1;
     public $numero2;
     public $mayor;
     public $menor;
     public function __construct(){
          $this->mayor;
          $this->menor;
          if($this->mayor > $this->menor){
               $this->mayor = $this->menor;
               $this->menor = $this->mayor;
          }else{
               $this->mayor = $this->mayor;
               $this->menor = $this->menor;
          }
     }

     public function sumar($mayor,$menor){
        return $total = $mayor + $menor;
     }

     function restar($mayor, $menor){
          return $total = $mayor - $menor;
     }

     function multiplicar($mayor, $menor){
          return $total = $mayor * $menor;

     }
     function dividir($mayor, $menor){
          return $total = $mayor / $menor;
     }
}


?>
