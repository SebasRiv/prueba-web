<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo FOLDER_PATH ?>">Reserva de boletos</a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <?php if (!empty($email)) { ?>
                    <li><a class="text-light ml-3" href="<?= FOLDER_PATH . 'boletos/getBoletos' ?>">Disponibilidad de boletos</a></li>
                    <li><a class="text-light ml-3" href="<?= FOLDER_PATH . 'comprador/form' ?>">Añadir comprador</a></li>
                    <li><a class="text-light ml-3 mr-3" href="<?= FOLDER_PATH . 'comprador/getCompradores' ?>"> Lista de compradores</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle text-light" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $email ?> | perfil: <?= $nombre_rol ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="ml-3"><a href="/prueba_web/actividad-1/comprador/logout">Cerrar sesión</a></li>
                        </ul>
                    </li>
                <?php } else { ?>
                    <a href="/prueba_web/actividad-1/login" class="btn btn-primary">Login</a>
                <?php } ?>
            </ul>

        </div>
    </nav>

    <div class="container">
        <div class="jumbotron">
            <h1>Aplicacíon reserva de boletos</h1>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>