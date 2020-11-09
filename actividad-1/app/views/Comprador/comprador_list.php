<?php !empty($message) ? print("<div class=\"alert alert-$message_type alert-dismissible fade show\" role=\"alert\">$message</div>") : '' ?>
<div class="row">
  <div class="col-md-12">
    <h2>Compradores</h2>

    <table class="table table-striped text-center">
      <thead>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellido 1</th>
        <th>Apellido 2</th>
        <th>Email</th>
        <th>Estado</th>
        <th>Perfil</th>
        <th>Acciones</th>
      </thead>
      <tbody>
        <?php while($row = $compradores->fetch_assoc()) {?> 
          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nombre'] ?></td>
            <td><?= $row['apellido_1'] ?></td>
            <td><?= $row['apellido_2'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['estado'] ?></td>
            <td><?= $row['role_id'] == 1 ? 'administrador' : 'comprador' ?></td>
            <td>
              <a class="btn btn-warning" href="<?= FOLDER_PATH . "comprador/getComprador/{$row['id']}" ?>">Editar</a>
              <a class="btn btn-danger" href="<?= FOLDER_PATH . "comprador/removeComprador/{$row['id']}" ?>">Eliminar</a>
              <a class="btn btn-secondary" href="<?= FOLDER_PATH . "comprador/inactiveComprador/{$row['id']}" ?>">Inactivar</a>
              <a class="btn btn-secondary" href="<?= FOLDER_PATH . "reservas/getReservas/{$row['id']}" ?>">Ver Reservas</a>
              <a class="btn btn-secondary" href="<?= FOLDER_PATH . "reservas/form/{$row['id']}" ?>">Hacer Reserva</a>
            </td>
          </tr>
        <?php } ?>
        <!-- <?php
        while ($row = $compradores->fetch_assoc()) {
          echo '<tr>';
          echo "<td>{$row['id']}</td>";
          echo "<td>{$row['nombre']}</td>";
          echo "<td>{$row['apellido_1']}</td>";
          echo "<td>{$row['apellido_2']}</td>";
          echo "<td>{$row['email']}</td>";
          echo "<td>{$row['estado']}</td>";
          echo "<td><a href='" . FOLDER_PATH ."comprador/getComprador/{$row['id']}'>Edit</a></td>";
          echo "<td><a href='" . FOLDER_PATH ."comprador/removeComprador/{$row['id']}'>Remove</a></td>";
          echo '</tr>';
        }?> -->
      </tbody>
    </table>

  </div>
</div>