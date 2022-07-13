<?php
/**
 * https://www.discoduroderoer.es/ejercicios-propuestos-y-resueltos-programacion-orientado-a-objetos-java/
 * ejercicio 1
 */
    namespace App;
    class Cuenta 
    {
        private   $titular;
        private   $cantidad;
        
        public function __construct( string $titular, ? int $cantidad = null)
        {
            $this->titular =  $titular;
            if($cantidad < 0){
                $this->cantidad = 0;
            }else{
                $this->cantidad = $cantidad;
            }
            
                        
        }

        public function __toString()
        {
            return 'Titular: '. $this->getTitular(). "  Cantidad Disponible: ".$this->getCantidad();
        }

        public function getTitular():string 
        {
            return $this->titular;
        }

        public function getCantidad():int
        {
            return $this->cantidad;
        }

       
        public function ingresar(? int $cantidad): void
        {
            if($cantidad > 0){
                $this->cantidad += $cantidad;
            }
            
        }

        public function retirar(int $cantidad)
        {
            if(($this->cantidad - $cantidad) < 0 ){
                $this->cantidad = 0;
            }else{
                $this->cantidad -= $cantidad;
            }
        }

        public function mostrar(){
            return "el saldo es de: " . $this->cantidad;
        }

    

    }


?>