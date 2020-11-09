<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo CSS_PATH . 'signin.css' ?>">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <form class="form-signin" method="POST" action="<?= FOLDER_PATH . 'login/signin' ?>">
            <h2 class="form-sigin-heading">Iniciar Sesión</h2>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Correo Electronico">
            <label for="inputPassword" class="sr-only">Contraseña</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Contraseña">
            <div class="checkbox">
            <?php !empty($error_message) ? print($error_message) : ''; ?>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
        </form>
    </div>

</body>

</html>