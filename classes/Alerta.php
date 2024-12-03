<?php

class Alerta
{
    /* Metodo 1: Registra la alerta en un sistema, guardandolo en la seccion. Esta alaerta va a tener el tipo(color de la alerta) y el msj (contenido) */

    public function add_alerta(string $tipo, string $mensaje)
    {
        $_SESSION['alertas'][] = [
            'tipo' => $tipo,
            'mensaje' => $mensaje
        ];
    }

    /* Metodo 2: Vaciar la lista de alertas */

    public function clear_alerta()
    {
        $_SESSION['alertas'] = [];
    }
    /* Metodo 3 Mostrar la alerta*/

    public function get_alertas()
    {
        if (!empty($_SESSION['alertas'])) {
            $alertasActuales = "";
            foreach ($_SESSION['alertas'] as $alerta) {
                $alertasActuales = $this->print_alerta($alerta);
            }
            $this->clear_alerta();
            return $alertasActuales;
        } else {
            return null;
        }
    }

    /* Metodo 4: Crear la alerta fija */

    /*         <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> */

    public function print_alerta($alerta) {
        $html="<div class='alert alert-{$alerta['tipo']} alert-dismissible fade show' role='alert'>";
        $html .=$alerta['mensaje'];
        $html .="<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
        $html .= "</div>";

        return $html;
    }
}
