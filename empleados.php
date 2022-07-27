<?php
require 'config.php';
$consulta = mysqli_query($conectar, "SELECT * FROM posts ");

$ver = mysqli_num_rows($consulta);
$lista = array();

if ($ver > 0) {
    while ($datos = mysqli_fetch_assoc($consulta)) {
        $fila = array('title' => $datos['title'], 'body' => $datos['body']
        );

        array_push($lista, $fila);
    }
    echo json_encode($lista, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}else{
    echo '0';
}
?>
