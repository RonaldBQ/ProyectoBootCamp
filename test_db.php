<?php
require_once('modelos/Categoria.php');

$cat = new Categoria();

$data['cat_nombre'] = "Peliculas";
$categorias = $cat->get_all();
/*
foreach ($categorias as $item) {
    echo $item['cat_id'];
}
*/
?>
<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE CATEGORIA</th>
    </tr>
    <?php foreach ($categorias as $item):?>
        
    <tr>
        <td><?php echo $item['cat_id']?></td>
        <td><?= $item['cat_nombre']?></td>
    </tr>
    <?php endforeach?>
        
</table>