<?php !empty($message) ? print("<div class=\"alert alert-$message_type alert-dismissible fade show\" role=\"alert\">$message</div>") : '' ?>
<div class="row">
  <div class="col-md-12">
    <h2>Boletos disponibles</h2>

    <table class="table table-striped text-center">
      <thead>
        <th>#</th>
        <th>Ciudad</th>
        <th>Boletos disponibles</th>
      </thead>
      <tbody>
        <?php while($row = $boletos->fetch_assoc()) {?> 
          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['ciudad'] ?></td>
            <td><?= $row['boletos'] ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>