<?php
require_once "../config/conexion.php";

class ModeloClientes
{
    public static $tabla = 'cliente';

    public static function mdlMostrarClientes()
    {
        try {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM " . self::$tabla);
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return [
                'success' => true,
                'data' => $resultados
            ];
        } catch (PDOException $e) {
            // Crea un array que contenga la información del error
            return [
                'success' => false,
                'message' => $e->getMessage(), // Captura el mensaje de error
            ];
        }
    }

    public static function mdlTotalClientes()
    {
        try {
            // Consulta para contar el número total de registros
            $countStmt = Conexion::conectar()->prepare("SELECT COUNT(*) as total FROM " . self::$tabla);
            $countStmt->execute();
            $totalClientes = $countStmt->fetch(PDO::FETCH_ASSOC)['total'];

            return [
                'success' => true,
                'data' => $totalClientes,
            ];
        } catch (PDOException $e) {
            // Crea un array que contenga la información del error
            return [
                'success' => false,
                'message' => $e->getMessage(), // Captura el mensaje de error
            ];
        }
    }
}
