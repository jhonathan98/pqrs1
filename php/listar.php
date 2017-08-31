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
              <div class="row text-center">
                <form method="post" action="listar.php">
                   <input type="radio" class="wradio" id="peticion" name="radio1" value="Peticion" onclick="check(this.value)"> Peticion
                   <input type="radio" class="wradio" id="queja" name="radio1" value="Queja" onclick="check(this.value)"> Queja
                   <input type="radio" class="wradio" id="reclamo" name="radio1" value="Reclamo" onclick="check(this.value)"> Reclamo
                   <input type="radio" class="wradio" id="solicitudes" name="radio1" value="Solicitudes" onclick="check(this.value)"> Solicitudes
                   <input type="radio" class="wradio" id="felicitaciones" name="radio1" value="Felicitaciones" onclick="check(this.value)"> Felicitaciones
                   <h1 id="texto" name="texto" ></h1>

                </form>
              </div>
         </div>
         <script>

          function check(radio1) {
            if (document.getElementById('peticion').value == radio1) {
              texto.innerHTML = document.getElementById('peticion').value;
            }else if (document.getElementById('queja').value == radio1) {
              texto.innerHTML = document.getElementById('queja').value;
            }else if (document.getElementById('reclamo').value == radio1) {
              texto.innerHTML = document.getElementById('reclamo').value;
            } else if (document.getElementById('solicitudes').value == radio1) {
              texto.innerHTML = document.getElementById('solicitudes').value;
            }else if (document.getElementById('felicitaciones').value == radio1) {
              texto.innerHTML = document.getElementById("felicitaciones").value;
            }
            document.getElementById('txto').value = radio1;

          }

         </script>

      <div class="wdatos"></div>



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
<script src="../js/jquery.js"></script>
  <script>
        $(document).ready(function(){
          //getDatos( 'Peticion' )
          $('.wradio').click(function(){

            getDatos( $(this).val() )

          })
        })

        function getDatos( valor )
        {
          $.ajax({
            url : 'respuesta.php',
            type : 'post',
            data : { valor : valor },
            success : function( e ){
              $('.wdatos').html( e )
            },
            error : function(){

            }

          })
        }
</script>

</html>
