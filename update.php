<?php
    include("db.php");

    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM torneos.torneos WHERE id = $id";
        $resultado = mysqli_query($conexion, $query);
        if (mysqli_num_rows($resultado) == 1){
            $row = mysqli_fetch_array($resultado);
            $nombre = $row['nombre'];
            $juego = $row['juego'];
            $fecha_inicio = $row['fecha_inicio'];
            $fecha_final = $row['fecha_final'];
            $premios = $row['premios'];
            $nombreOrganizador = $row['nombreOrganizador'];
        }
    }

    if (isset($_POST['update'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $juego = $_POST['juego'];
        $fecha_inicio = $_POST['fecha_inicio'];
        $fecha_final = $_POST['fecha_final'];
        $premios = $_POST['premios'];


        $query = "UPDATE torneos.torneos SET nombre = '$nombre',
        juego = '$juego',
        fecha_inicio = '$fecha_inicio',
        fecha_final = '$fecha_final',
        premios = '$premios',
        nombreOrganizador = '$nombreOrganizador'
        WHERE id = $id";

        mysqli_query($conexion, $query);

        $_SESSION['mensaje'] = 'Registro actualizado';
        $_SESSION['mensaje_tipo'] = 'primary';
        
        header("location: verMistorneos.php");

     }

?>  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="assets/css/Usuarios.css" rel="stylesheet" type="text/css">
</head>
<body class="crearTorneo">
    <div class="container-fluid mt-5">
        <div class="col col-md-4 cont ">
            <div class="card  registro">
                <div class="card-body">
                    <form action="update.php?id=<?php echo $_GET['id']; ?>" method="POST" >
                        <span class="text-center d-block mt-3">
                            <img src="assets/img/logo.png" class="logo">
                        </span>
                        <div class="form-group mx-auto">
                            <input type="text" value="<?php echo $nombre; ?>" name="nombre" class="form-control mt-3" placeholder="Nombre del torneo" />
                            <input type="text" value="<?php echo $juego; ?>" name="juego" class="form-control mt-3" placeholder="Juego" />
                            <input type="date" value="<?php echo $fecha_inicio; ?>" name="fecha_inicio" class="form-control mt-3" placeholder="Fecha de inicio" />
                            <input type="date" value="<?php echo $fecha_final; ?>" name="fecha_final" class="form-control mt-3" placeholder="Fecha de finalización" />
                            <input type="text" value="<?php echo $premios; ?>" name="premios" class="form-control mt-3" placeholder="Premios" />
                            <input type="text" value="<?php echo $nombreOrganizador; ?>" name="nombreOrganizador" class="form-control mt-3" placeholder="Ingrese nombre del organizador" />
                            <div class="text-center">
                                <button type=submit name="update" class=" btn btn-registro font-weight-bold mt-5 ">
                                    Actualizar
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

