<?php
require 'config.php';
$consulta = mysqli_query($conectar, "SELECT * FROM empleados ");

$ver = mysqli_num_rows($consulta);
$lista = array();

if ($ver > 0) {
    while ($datos = mysqli_fetch_assoc($consulta)) {
        $fila = array('fecha_de_nacimiento' => $datos['fecha_de_nacimiento'], 'nombre' => $datos['nombre'],'telefono' => $datos['telefono']
        );

        array_push($lista, $fila);
    }
    echo json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}else{
    echo '0';
}
?>
