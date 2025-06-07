<?php
require_once 'controller/EmpleadoController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new EmpleadoController();
    $controller->guardar($_POST);
    header('Location: index.php');
    exit;
}
