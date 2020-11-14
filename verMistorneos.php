<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="assets/css/dashboard.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Ver mis torneos</title>
  </head>
  <body>
  <?php include("header.php");
        include('db.php');
  ?>
    <div class="container p-2 mt-5"  >
        <div class="row">
            <div class="col-md-12 mx-auto">
            <?php if(isset($_SESSION['mensaje'])) { ?>
                    <div class="alert alert-<?= $_SESSION['mensaje_tipo'];?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['mensaje'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
            <?php session_unset(); }?>
                <table class="table table-bordered">
                <thead>
                  <tr>
                    <th >Nombre</th>
                    <th >Juego</th>
                    <th >Fecha inicio</th>
                    <th >Fecha final</th>
                    <th >Premios</th>
                  </tr>
                </thead>
                    <tbody id="myTable">
                        <?php
                        $query = "SELECT * FROM torneos.torneos";
                        $resultado = mysqli_query($conexion, $query);

                        while ($row = mysqli_fetch_array($resultado)) { ?>
                            <tr>
                                <td><?php echo $row ['nombre']?></td>
                                <td><?php echo $row ['juego']?></td>
                                <td><?php echo $row ['fecha_inicio']?></td>
                                <td><?php echo $row ['fecha_final']?></td>
                                <td><?php echo $row ['premios']?></td>
                                <td>
                                    <a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-primary" >
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>