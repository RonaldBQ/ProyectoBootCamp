<header>
    <span class="logo">
        <img class="menu_logo" src="../assets/img/LogoRB-transparente.png" alt="Imagen del Logo">
    </span>
    <nav>
        <ul class="top_menu">
            <li><a href="#"><i class="fas fa-home"></i>Inicio</a></li>
        </ul>
    </nav>

    <div>
        <a href="#" class="btn" id="btn_user">
           Usuario: <?= $_SESSION['usu_nombres']?>
        </a>
        <div id="user_menu">
            <div class="lista_barra">
                <ul>
                    <li><a href="#">Ver perfil</a></li>
                    <li><a href="#">Actualizar contraseña</a></li>
                    <li>
                        <form method="post" action="<?= APP_URL ?>app/autenticar.php">
                            <input type="hidden" name="operacion" value="logout">
                            <button type="submit">Cerrar Sesion</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>