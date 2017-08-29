<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <title> </title>
  </head>
  <body>
    <?php
      include 'navbar.php';
     ?>
    <?php
            include "conexion.php";
            $user_id=null;
            $sql1= "select id_solicitud,fecha_radicado from datos_solicitud";
            $query = $con->query($sql1);
            session_start();

      ?>
      <div class="row">
        <div class="col-md-2">
          <?php include "listas.php" ?>
        </div>
        <div class="col-md-6">
          <div class="container">
              <h1 class="text-center">Bienvenido</h1>
              <h5 class="text-center"> Usuario <?php echo $_SESSION["usuario1"] ?> </h5>
         </div>
       </header>
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
       <header>

  </body>
  <script type="text/javascript">
      function cambiarEstado(){
        i=0;
        if (i==0){
        document.getElementById('estado').innerHTML="Leida";
        }
        i++
      }
  </script>
</html>
