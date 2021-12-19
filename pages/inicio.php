<?php
require_once('../components/public_head.php');
require_once('../components/public_top_menu.php');
?>
<section class="banner">
    <div>
        <h1>Web designer</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, consectetur. Ad placeat corporis ut impedit culpa modi illo quis, nihil possimus, quae minima debitis mollitia suscipit aut? Quos, deleniti illo.</p>
    </div>
    <div></div>
    <div>
        <h1>&lt;Web designer&gt</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, consectetur. Ad placeat corporis ut impedit culpa modi illo quis, nihil possimus, quae minima debitis mollitia suscipit aut? Quos, deleniti illo.</p>
    </div>
</section>
<main>
    <section class="contenedor_proyectos">
        <h1 class=""><i class="fas fa-hammer"></i>Mis ultimos trabajos</h1>
        <div class="ultimos_trabajos">
            <div class="work_item">
                <img src="<?=APP_URL?>assets/img/proyecto1.jpg" alt="Imagen proyecto">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci atque soluta consequatur minus beatae, modi ipsum quas rem deleniti ipsa nam, praesentium nisi quo sunt molestias quaerat eum officiis libero!</p>
                <a class="btn btn_oscuro" href=""><i class="fas fa-eye"></i>Ver Proyecto</a>
            </div>
            <div class="work_item">
                <img src="<?=APP_URL?>assets/img/proyecto2.jpg" alt="Imagen proyecto">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci atque soluta consequatur minus beatae, modi ipsum quas rem deleniti ipsa nam, praesentium nisi quo sunt molestias quaerat eum officiis libero!</p>
                <a class="btn btn_oscuro" href=""><i class="fas fa-eye"></i>Ver Proyecto</a>
            </div>
            <div class="work_item">
                <img src="<?=APP_URL?>assets/img/proyecto3.jpg" alt="Imagen proyecto">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci atque soluta consequatur minus beatae, modi ipsum quas rem deleniti ipsa nam, praesentium nisi quo sunt molestias quaerat eum officiis libero!</p>
                <a class="btn btn_oscuro" href=""><i class="fas fa-eye"></i>Ver Proyecto</a>
            </div>
        </div>
    </section>

</main>

<?php
require_once('../components/public_footer.php');
?>