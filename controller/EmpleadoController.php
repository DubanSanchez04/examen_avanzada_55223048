<?php
require_once 'models/conexDB.php';
require_once 'models/empleado.php';

class EmpleadoController {
    private $empleado;

    public function __construct() {
        $db = new conexDB();
        $conn = $db->connect();
        $this->empleado = new Empleado($conn);
    }

    public function guardar($data) {
        $this->empleado->nombre = $data['nombre'];
        $this->empleado->salario_base = $data['salario_base'];
        $this->empleado->comision_pct = $data['comision_pct'];
        return $this->empleado->crear();
    }

    public function listar() {
        return $this->empleado->listar();
    }
}
