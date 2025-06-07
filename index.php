<?php
require_once 'controller/EmpleadoController.php';
$controller = new EmpleadoController();
$empleados = $controller->listar();
include 'views/listar.php';
