<?php
require_once "Conexion.php";
if (isset($_POST)) {
    if ($_POST['action'] == 'buscar') {
        $array['datos'] = array();
        $total = 0;
        for ($i=0; $i < count($_POST['data']); $i++) { 
            $id = $_POST['data'][$i]['id'];
            $query = mysqli_query($conexion, "SELECT * FROM productos WHERE idProducto = $id");
            $result = mysqli_fetch_assoc($query);
            $data['idProducto'] = $result['idProducto'];
            $data['precio'] = $result['precio'];
            $data['nombreProducto'] = $result['nombreProducto'];
            $total = $total + $result['precio'];
            array_push($array['datos'], $data);
        }
        $array['total'] = $total;
        echo json_encode($array);
        die();
    }
}

?>