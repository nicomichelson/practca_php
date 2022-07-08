<?php 
    
    require 'vendor/autoload.php';

    //use hola
    use App\Cliente;
    use App\Detalle;
    
//    function mi_autoload($clase)
//     {
//         // echo $clase;
//         $partes = explode('\\', $clase);

//         echo '<br>';
//         echo '<br>';
        
//         require __DIR__ . "/clases/".$partes[1].".php";
//         // echo "intentando cargar $clase. \n";
//         // throw new Exception("Imposible cargar $clase.");
        
//     }

//    spl_autoload_register('mi_autoload');
   
   $detalle = new Detalle();
   $clientes = new Cliente();
//    try{
//         $detalle = new Detalle();
//     }catch (Exception $e) {
//         echo $e->getMessage(), "\n";
//     }   

//    var_dump('hola');

?>