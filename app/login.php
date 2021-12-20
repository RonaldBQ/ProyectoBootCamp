
<?php
require_once('../config.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de acceso</title>
    <link rel="stylesheet" href="<?= APP_URL ?>assets/css/estilos.css">
    <link rel="stylesheet" href="<?= APP_URL ?>assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= APP_URL ?>assets/css/brands.min.css">
</head>

<body class="login_page"> 
    <div></div>
    <div class="form-login">
        <img class="logo_login" src="<?= APP_URL ?>assets/img/LogoRB-transparente.png" alt="Icono logo">
        <h2>FORMULARIO DE ACCESO</h2>
        <form action="<?= APP_URL ?>app/autenticar.php" method="POST">
        <input type="hidden" name="operacion" value="login">
            <label class="etiqueta" for="">USUARIO</label>
            <input name="user" type="text">
            <label class="etiqueta" for="">CONTRASEÑA</label>
            <input name="password" type="password">
            <br>
            <button type="submit">
                <i class="fas fa-sign-in-alt"></i>Ingresar
            </button>
        </form>
    </div>
    <div></div>
</body>

</html>