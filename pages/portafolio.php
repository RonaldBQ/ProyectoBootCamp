<?php
require_once('../components/public_head.php');
require_once('../components/public_top_menu.php');
require_once('../modelos/Proyecto.php');
?>


<main>
    <section class="item-portafolio cols_2_1">
        <div>
            <img class="imagen_portafolio" src="<?=APP_URL?>assets/img/fondo_portafolio.jpg" alt="Imagen Portafolio">
        </div>
        <div class="descripcion_proyecto">
            <div>
                <h1>Titulo del proyecto</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam tempora omnis laborum, deleniti molestiae incidunt placeat vel ex ducimus corrupti sed repellat voluptate impedit officia esse, voluptatem blanditiis maiores eum.</p>
            </div>
        </div>
    </section>
    <section class="item-portafolio cols_1_2">
        <div class="descripcion_proyecto">
            <div>
                <h1>Titulo del proyecto</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam tempora omnis laborum, deleniti molestiae incidunt placeat vel ex ducimus corrupti sed repellat voluptate impedit officia esse, voluptatem blanditiis maiores eum.</p>
            </div>
        </div>
        <div>
            <img class="imagen_portafolio" src="<?=APP_URL?>assets/img/fondo_portafolio2.png" alt="Imagen Portafolio">
        </div>
    </section>
    <section class="item-portafolio cols_2_1">
        <div>
            <img class="imagen_portafolio" src="<?=APP_URL?>assets/img/fondo_portafolio2.png" alt="Imagen Portafolio">
        </div>
        <div class="descripcion_proyecto">
            <div>
                <h1>Titulo del proyecto</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam tempora omnis laborum, deleniti molestiae incidunt placeat vel ex ducimus corrupti sed repellat voluptate impedit officia esse, voluptatem blanditiis maiores eum.</p>
            </div>
        </div>
    </section>
</main>
<?php
require_once('../components/public_footer.php');
?>