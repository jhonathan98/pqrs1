<?php
        include "conexion.php";
        $user_id=null;
        include "conexion.php";
        $user_id=null;

        session_start();

        $sql1= "select * FROM `datos_solicitud` where `datos_solicitud`.`tipo_solicitud` ='".$_POST["valor"]."' ";
        $query = $con->query($sql1);
  ?>
  <header>
    <?php if($query->num_rows>0):?>
      <section class="row ">
          <div class="container">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Numero radicado</th>
                  <th>Fecha radicado</th>
                  <th>Fecha limite</th>
                  <th>Estado solicitud</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php while ($r=$query->fetch_array()):?>
                <tr>
                  <td><?php echo $r["id_solicitud"]; ?></td>
                  <td><?php echo $r["fecha_radicado"]; ?></td>
                  <td>No</td>
                  <th id="estado">Sin leer</th>
                   <td><a href="../funcionario.php?id=<?php echo $r["id_solicitud"];?>" class="btn btn-sm btn-warning" onclick="cambiarEstado();">Ver solicitud</a></td>
                </tr>
                <?php endwhile;?>
              </tbody>
            </table>
          <?php else:?>
            <p class="alert alert-warning">No hay resultados</p>
          <?php endif;?>
    </div>
  </section>
   </div>

 </div>
</header>
