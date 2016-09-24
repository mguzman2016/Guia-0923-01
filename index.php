<?php
// Incluir la lógica del modelo
require_once 'modelo.php';

// // Obtener la Lista de Unidades
$aDatos = Obtener_Unidades_Medida();

// // Incluir la lógica de la vista
require 'vista.php';
?>