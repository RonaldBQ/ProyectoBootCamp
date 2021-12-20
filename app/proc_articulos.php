<?php

require_once('../modelos/Articulo.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $op = $_POST['operacion'];
    switch($op){
        case "insert":
            /*echo "<h1>Ejecutando instrucciones de INSERT</h1>";*/
            $data['art_titulo']=htmlspecialchars($_POST['art_titulo']);
            $data['art_resumen']=htmlspecialchars($_POST['art_resumen']);
            $data['art_detalle']=htmlspecialchars($_POST['art_detalle']);
            $data['art_foto']="foto_articulo.jpg";
            $data['usu_id']=1;
            $data['cat_id']=1;

            $articulo = new Articulo();
            $articulo->insert($data);
            header("Location: ".APP_URL."app/listar_articulos.php");

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