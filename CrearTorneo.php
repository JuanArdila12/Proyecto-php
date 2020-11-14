<?php

    include("db.php");


        if (isset($_POST['crearTorneo'])){
                $nombre = $_POST['nombre'];
                $juego = $_POST['juego'];
                $fechaInicio = $_POST['fecha_Inicio'];
                $fechaFinal = $_POST['fecha_Final'];
                $premios = $_POST['premios'];
                $nombreOrganizador = $_POST['nombreOrganizador'];
                        
                $query = "INSERT INTO torneos.torneos(nombre, juego, fecha_inicio, fecha_final, premios, nombreOrganizador)
                VALUES ('$nombre', '$juego', '$fecha_inicio', '$fecha_final', '$premios', '$nombreOrganizador')";
                mysqli_query($conexion, $query);
                                           
                $_SESSION['mensaje'] = 'Registrado con exito';
                $_SESSION['mensaje_tipo'] = 'warning';

                header("location: verMistorneos.php");

                }
                        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="assets/css/Usuarios.css" rel="stylesheet" type="text/css">
</head>
<body class="crearTorneo">
    <div class="container-fluid mt-5">
        <div class="col col-md-4 cont ">
            <div class="card  registro">
                <div class="card-body">
                    <form action="CrearTorneo.php" method="POST">
                        <span class="text-center d-block mt-3">
                            <img src="assets/img/logo.png" class="logo">
                        </span>
                        <div class="form-group mx-auto">
                            <input type="text" name="nombre" class="form-control mt-3" placeholder="Nombre del torneo" />
                            <input type="text" name="juego" class="form-control mt-3" placeholder="Juego" />
                            <input type="date" name="fecha_inicio" class="form-control mt-3" placeholder="Fecha de inicio" />
                            <input type="date" name="fecha_final" class="form-control mt-3" placeholder="Fecha de finalización" />
                            <input type="text" name="premios" class="form-control mt-3" placeholder="Premios" />
                            <input type="text" name="nombreOrganizador" class="form-control mt-3" placeholder="Ingrese nombre del organizador" />
                            <div class="text-center">
                                <button type=submit name="crearTorneo" class=" btn btn-registro font-weight-bold mt-5 ">
                                    Crear
                                </button>
                            </div>
                            <div class=" row">
                                <a class="mx-auto redirigir mt-3" href="dashboard.php">Inicio</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>