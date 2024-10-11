<?php

require_once "../models/clientes.modelo.php";

class ControladorClientes
{
    // Método para mostrar clientes
    static public function ctrMostrarClientes()
    {
        $respuesta = ModeloClientes::mdlMostrarClientes();
        header('Content-Type: application/json');
        echo json_encode($respuesta);
    }

    // Método para mostrar el total de clientes
    static public function ctrTotalClientes()
    {
        $respuesta = ModeloClientes::mdlTotalClientes();
        header('Content-Type: application/json');
        echo json_encode($respuesta);
    }
}

// Procesa la solicitud desde JavaScript
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Decodificamos el cuerpo del JSON enviado desde fetch
    $data = json_decode(file_get_contents("php://input"), true);

    // Verificamos si la acción está presente y es válida
    if (isset($data['accion'])) {
        switch ($data['accion']) {
            case 'listarClientes':
                ControladorClientes::ctrMostrarClientes();
                break;
            case 'totalClientes':
                ControladorClientes::ctrTotalClientes();
                break;
            default:
                // Si la acción no es válida, devolvemos un error
                header('Content-Type: application/json');
                echo json_encode(['success' => false, 'message' => 'Acción no válida']);
                break;
        }
    } else {
        // Si no se envía ninguna acción, devolvemos un error
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'No se envió ninguna acción']);
    }
}
