<?php

    class Autenticacion{
        /* Verifica las credenciale del usuario, y de ser correcto guarda los datos en una sesion */

        public function log_in(string $usuario, string $password){
            /* instanciar la clase usuario */
            $datosUsuario = (new Usuario())->usuario_x_username($usuario);

            /* Comprobaciones: si el usuario existe, y comprobar si la contraseña es correcta */

            if ($datosUsuario) {
                if (password_verify($password, $datosUsuario->getPassword() )) {
                    $datosLogin['username'] = $datosUsuario->getNombre_usuario();
                    $datosLogin['id'] = $datosUsuario->getID();
                    $_SESSION['loggedIn'] = $datosLogin;

                    return TRUE;
                }else {
                    return FALSE;
                }
            }else {
                return FALSE;
            }
        }
            /* Metodo Logout */
            public function log_out(){
                if (isset($_SESSION['loggedIn'])) {
                    unset($_SESSION['loggedIn']);
                }
            }

            /* Verificar si el usuario esta loggeado */

            public function verify(){
                if (isset($_SESSION['loggedIn'])) {
                    return TRUE;
                }else {
                    header('Location: index.php?sec=login');
                }
            }
        
    }

?>