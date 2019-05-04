<?php
require './validar-acceso.php';
$nombre = $_SESSION["datos-usuario"]["nombre"];
$rol = $_SESSION["datos-usuario"]["admin"];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php include './referencias.html'; ?>

    <title>Sistema de Compras</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="menu-principal.php">Ferretería Caramel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link"  href="menu-principal.php">Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <?php
                    if ($rol) {
                        ?>

                        <li class="nav-item">
                            <a class="nav-link" href="usuario/index.php">Usuarios</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="libro/index.php">Libros</a>
                        </li>

                    <?php
                } else {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="libro/index.php">Libros</a>
                        </li>

                    <?php
                }
                ?>
                
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuario</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><?php echo $nombre; ?></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="cerrar.php">Cerrar Sesión</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container">
    <div class="row">
      <div class="col-12 mx-auto">
        <div class="card card-signin my-5">
          <img src="img/banner.jpg" class="img-fluid" alt="Responsive image">
        </div>
      </div>
    </div>
  </div>

</body>

</html>