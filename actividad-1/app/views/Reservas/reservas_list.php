<?php !empty($message) ? print("<div class=\"alert alert-$message_type alert-dismissible fade show\" role=\"alert\">$message</div>") : '' ?>
<div class="row">
  <div class="col-md-12">
    <h2>Reservas realizadas</h2>
    <table class="table table-striped text-center">
      <thead>
        <th>#</th>
        <th>id_ciudad</th>
        <th>boletos</th>
        <th>Acciones</th>
      </thead>
      <tbody>
        <?php while($row = $reservas->fetch_assoc()) {?> 
          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['id_ciudad'] ?></td>
            <td><?= $row['boletos'] ?></td>
            <td><a class="btn btn-danger" href="<?= FOLDER_PATH . "reservas/removeReserva/{$row['id']}"?>">Cancelar Reserva</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>