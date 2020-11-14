<?php

    include("db.php");

    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM torneos.torneos WHERE id = $id";
        $resultado = mysqli_query($conexion, $query);

        $_SESSION['mensaje'] = 'registro eliminado!';
        $_SESSION['mensaje_tipo'] = 'danger';

        header("location: verMistorneos.php");

    }

?>