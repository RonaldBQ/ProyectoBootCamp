<?php
require_once('Categoria.php');

$cat = new Categoria();  

$data['cat_nombre']= "Peliculas";

$cat->store($data);

?>
