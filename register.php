<?php

    include("db.php");


        if (isset($_POST['registrar'])){
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $telefono = $_POST['telefono'];
                $email = $_POST['email'];
                $contraseña = $_POST['contraseña'];
                
        
                $query = "INSERT INTO torneos.usuarios(nombre, apellido, telefono, email, contraseña)
                VALUES ('$nombre', '$apellido', '$telefono', '$email', '$contraseña')";
                mysqli_query($conexion, $query);
                                            
                header("location: login.php");

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

<body class="register">
    <div class="container-fluid mt-5">
        <div class="col col-md-4 cont ">
            <div class="card  registro">
                <div class="card-body">
                    <form action="register.php" method="POST">
                        <span class="text-center d-block mt-3">
                            <img src="assets/img/logo.png" class="logo">
                        </span>
                        <div class="form-group mx-auto">
                            <input type="text" class="form-control mt-3" name="nombre" placeholder="Nombre" />
                            <input type="text" class="form-control mt-3" name="apellido" placeholder="Apellido"/>                            
                            <input type=" text" class="form-control mt-3" name="telefono" placeholder="Telefono"/>
                            <input type=" text" class="form-control mt-3" name="email" placeholder="Email"/> 
                            <input type=" text" class="form-control mt-3" name="contraseña" placeholder="Contraseña"/> 
                            <div class="text-center">
                                <button type=submit name="registrar" class=" btn btn-registro font-weight-bold mt-5 ">
                                    Registrar
                                </button>
                            </div>
                            <div class=" row">
                            <a class="mx-auto redirigir mt-3" href="login.html">Iniciar Sesión</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>