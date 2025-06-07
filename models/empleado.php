<?php
class Empleado {
    private $conn;
    private $table = "empleados";

    public $id;
    public $nombre;
    public $salario_base;
    public $comision_pct;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function crear() {
        $sql = "INSERT INTO {$this->table} (nombre, salario_base, comision_pct)
                VALUES (:nombre, :salario_base, :comision_pct)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":nombre", $this->nombre);
        $stmt->bindParam(":salario_base", $this->salario_base);
        $stmt->bindParam(":comision_pct", $this->comision_pct);
        return $stmt->execute();
    }

    public function listar() {
        $sql = "SELECT *, (salario_base + (salario_base * comision_pct / 100)) AS salario_total
                FROM {$this->table}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
}
