<?php 
    //mostrar errores
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require 'vendor/autoload.php';

    //use hola
    use App\Cliente;
    use App\Detalle;
    use App\Cuenta;

   $cuenta1 = new Cuenta("NIco",0);
   $cuenta3 = new Cuenta("NIco",200);
   $cuenta3 = new Cuenta("NIco",300);
   $cuenta3->ingresar(1000);

   echo  "<br>" .$cuenta3->mostrar() . "<br>". $cuenta3;
   $cuenta3->retirar(0);
   echo  "<br> " .$cuenta3->mostrar() . "<br>". $cuenta3;


?>