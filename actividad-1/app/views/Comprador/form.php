<h2>Registrar comprador</h2>
<div class="row">
    <div class="col-md-8">
        <form method="POST" action="<?php $path = empty($info_comprador) ? 'comprador/addComprador' : 'comprador/editComprador'; echo FOLDER_PATH . $path?>">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="name" placeholder="Nombre" value="<?= !empty($info_comprador->nombre) ? $info_comprador->nombre : '' ?>">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="apellido_1">Apellido 1</label>
                        <input type="apellido_1" name="apellido_1" class="form-control" id="apellido_1" placeholder="Apellido 1" value="<?= !empty($info_comprador->apellido_1) ? $info_comprador->apellido_1 : '' ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="apellido_2">Apellido 2</label>
                        <input type="apellido_2" name="apellido_2" class="form-control" id="apellido_2" placeholder="Apellido 2" value="<?= !empty($info_comprador->apellido_2) ? $info_comprador->apellido_2 : '' ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="cedula">Cedula</label>
                <input type="text" name="cedula" class="form-control" id="cedula" placeholder="Cedula" value="<?= !empty($info_comprador->cedula) ? $info_comprador->cedula : '' ?>">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="<?= !empty($info_comprador->email) ? $info_comprador->email : '' ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control" id="password" placeholder="Password" value="<?= !empty($info_comprador->password) ? $info_comprador->password : '' ?>">
                    </div>
                </div>
            </div>
            <input type="hidden" name="id" value="<?= $info_comprador->id?>">
            <?php
            !empty($message)
                ? print("<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">$message</div>")
                : ''
            ?>
            <button type="submit" class="btn btn-primary"><?= empty($info_comprador) ? 'Registrar' : 'Editar' ?></button>
        </form>
    </div>
</div>