<?php

require_once('../modelos/Usuario.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $op = $_POST['operacion'];
    switch ($op) {
        case "login":
            $usuario = new Usuario();
            $user = $_POST['user'];
            $pass = $_POST['password'];

            $item = $usuario->get_por_usuario($user);

            if ($item !== null) {
                echo "El usuario existe";
                if (password_verify($pass, $item['usu_password'])) {
                    echo "Autenticado correctamente";
                    session_start();
                    $_SESSION['usu_id'] = $item['usu_id'];
                    $_SESSION['usu_nombres'] = $item['usu_nombres'];
                    $_SESSION['usu_primer_apellido'] = $item['usu_primer_apellido'];
                    header('Location:' . APP_URL . 'app/listar_articulos.php');
                } else {
                    echo "La contraseña no es correcta";
                }
            } else {
                echo "El usuario no existe";
            }
            break;
        case "logout":
            //Destruccion de la cookie en navegador
            if(ini_get("session.use_cookies")){
                $params = session_get_cookie_params();
                setcookie(session_name(),'',time()-4200,$params["path"],$params["domain"],$params["secure"],$params["https"]);
            }
            session_destroy(); //Destruccion de la sesion del servidor
            header('Location: '.APP_URL);
            break;
        default:
            echo "No existe esta operacion";
    }
} else {
    echo "Esta operacion no esta permitida";
}
