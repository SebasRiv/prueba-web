<h2>Realizar Reserva</h2>
<div class="row">
    <div class="col-md-8">
        <form method="POST" action="<?= FOLDER_PATH . "reservas/addReserva/" ?>">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="id_ciudad">Ciudad</label>
                        <select name="id_ciudad" id="id_ciudad" class="form-control" >
                            <option value="1">Medellin</option>
                            <option value="2">Bogota</option>
                            <option value="3">Cali</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="boletos">Boletos</label>
                        <input type="boletos" name="boletos" class="form-control" id="boletos" placeholder="# de boletos" value="<?= !empty($info_comprador->apellido_2) ? $info_comprador->apellido_2 : '' ?>">
                    </div>
                </div>
            </div>
            <input type="hidden" name="id_usuario" value="<?= $id?>">
            <?php
            !empty($message)
                ? print("<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">$message</div>")
                : ''
            ?>
            <button type="submit" class="btn btn-primary">Hacer Reserva</button>
        </form>
    </div>
</div>