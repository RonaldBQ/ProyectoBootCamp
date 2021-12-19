<?php

require_once('../modelos/Articulo.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $op = $_POST['operacion'];
    switch($op){
        case "insert":
            
            echo "<h1>Ejecutando instrucciones de INSERT</h1>";
            $data['art_titulo']=htmlspecialchars($_POST['art_titulo']) ;

            $articulo = new Articulo();
            $articulo->insert($data);

            break;
        case "update":
            echo "<h1>Ejecutando instrucciones de UPDATE</h1>";
            break;
        case "delete":
            echo "<h1>Ejecutando instrucciones de DELETE</h1>";
            break;
        default:
            echo "Esta operacion no está permitida";
    }
} else {
    echo "Esta operacion no esta permitida";
}
?>