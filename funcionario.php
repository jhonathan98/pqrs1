<?php
include "php/conexion.php";
$a=1;
$sql1= "select * from datos_solicitud where id_solicitud = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

    <title>Funcionario</title>
  </head>
  <body>

                <script src="js/jquery.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js" ></script>
                <script src="bootstrap/js/bootstrap.min.js"></script>

    <?php
      include 'php/navbar.php';
     ?>

     <div class="container">

 <form class="well form-horizontal" method="post"  action="php/responder.php" id="form_funcionario">
     <section class=" row text-center" >
      <fieldset>
       <legend>Solicitud</legend>
             <div class="control-group col-md-6">
                 <div class="form-group">
                   <label class="col-md-4 control-label" >Numero radicado</label>
                    <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input   class="form-control"  type="text" disabled type="text" value="<?php echo $person->id_solicitud; ?>" name="numero_radicado">
                      </div>
                    </div>
                 </div>
             </div>
             <div class="control-group col-md-6">
                 <div class="form-group">
                   <label class="col-md-4 control-label" >Cedula del funcionario</label>
                    <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input class="form-control" type="text" name="cedula_funcionario">
                      </div>
                    </div>
                 </div>

             </div>
    </fieldset>
   </section>

        <br>
     <section class=" row text-center" >
        <div class="control-group col-md-6">
          <div class="form-group">
            <label class="col-md-4 control-label" >Cedula del usuario</label>
             <div class="col-md-4 inputGroupContainer">
               <div class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input  disabled class="form-control"  value="<?php echo $person->cedula_usuario; ?>" >
               </div>
             </div>
          </div>
        </div>
      <div class="control-group col-md-6">
        <div class="form-group">
          <label class="col-md-4 control-label" >Nombre del funcionario</label>
           <div class="col-md-4 inputGroupContainer">
             <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
               <input class="form-control" type="text" name="Nombre_funcionario">
             </div>
           </div>
        </div>

        </div>
   </section>
         <br>

              <section class=" row text-center" >
                    <div class="control-group col-md-6">
                      <div class="form-group">
                        <label class="col-md-4 control-label" >Archivos adjuntos</label>
                         <div class="col-md-4 inputGroupContainer">
                           <div class="input-group">
                             <span class="input-group-addon"><i class="glyphicon glyphicon-upload"></i></span>
                             <input   class="form-control"  type="text" disabled type="text" value="<?php echo $person->archivos_adjuntos;?>"  name="archivos_adjuntos">
                           </div>
                         </div>
                      </div>
                    </div>
                    <div class="control-group  col-md-6">
                      <div class="form-group">
                        <label class="col-md-4 control-label">Área del funcionario</label>
                          <div class="col-md-4 selectContainer">
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                              <select name="optA" class="form-control selectpicker" >
                                <option value=" " >Seleccione su área</option>
                                <option value="vivienda" >Vivienda</option>
                                <option value="seguridad" >Seguridad</option>
                                <option value="solicitudes" >Solicitudes</option>
                              </select>
                            </div>
                          </div>
                      </div>

                    </div>
              </section>

              <br>

              <section class=" row text-center" >
                          <div class="control-group col-md-6">
                            <div class="form-group">
                              <label class="col-md-4 control-label" >Fecha radicado</label>
                               <div class="col-md-4 inputGroupContainer">
                                 <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                      <input  disabled class="form-control"  value="<?php echo $person->fecha_radicado; ?>"  name="fecha_radicado">
                                 </div>
                               </div>
                            </div>
                          </div>
                            <div class="control-group col-md-6">
                              <div class="form-group">
                                <label class="col-md-4 control-label">Estado de la solicitud</label>
                                  <div class="col-md-4 selectContainer">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                      <select name="optA" class="form-control selectpicker" >
                                        <option value=" " >Seleccione el estado</option>
                                        <option value="leido" >Leido</option>
                                        <option value="procesando" >En proceso</option>
                                        <option value="completa" >Completado</option>
                                      </select>
                                    </div>
                                  </div>
                              </div>

                            </div>
               </section>
              <br>
              <section class=" row text-center" >
                          <div class="control-group col-md-6">
                            <div class="form-group">
                              <label class="col-md-4 control-label" >Medio de ontacto</label>
                               <div class="col-md-4 inputGroupContainer">
                                 <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                      <input  disabled class="form-control"  value="<?php echo $person->opcion_contacto; ?>"  name="contacto">
                                 </div>
                               </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label" >Contacto</label>
                               <div class="col-md-4 inputGroupContainer">
                                 <div class="input-group">
                                   <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                      <input  disabled class="form-control"  value="<?php echo $person->contacto; ?>"  name="contacto">
                                 </div>
                               </div>
                            </div>
                          </div>
                            <div class="control-group col-md-6">
                              <div class="form-group">
                                <label class="col-md-4 control-label" >Fecha limite</label>
                                 <div class="col-md-4 inputGroupContainer">
                                   <div class="input-group">
                                     <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                        <input   class="form-control"    name="fecha_limite">
                                   </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label" >Correo funcionario</label>
                                 <div class="col-md-4 inputGroupContainer">
                                   <div class="input-group">
                                     <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input   class="form-control"    name="correo_funcionario">
                                   </div>
                                 </div>

                              </div>
                            </div>
               </section>
              <br>



              <section class=" row text-center" >
                        <div class="control-group col-md-6">
                          <div class="form-group">
                            <label class="col-md-4 control-label" >Solicitud del usuario</label>
                             <div class="col-md-4 inputGroupContainer">
                               <div class="input-group">
                                 <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                 <textarea class="form-control" id="textarea" disabled name="textarea"  > <?php echo $person->solicitud;?></textarea>
                               </div>
                             </div>
                          </div>
                      </div>

                        <div class="control-group  col-md-6">
                          <div class="form-group">
                            <label class="col-md-4 control-label">Tipo de respuesta</label>
                              <div class="col-md-4 selectContainer">
                                <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                  <select name="optA" class="form-control selectpicker" >
                                    <option value=" " >Seleccione el medio de respuesta</option>
                                    <option value="correo" >Correo</option>
                                    <option value="telefono" >Teléfono</option>
                                  </select>
                                </div>
                              </div>
                          </div>
                        </div>
             </section>
           <br>

             <section class="row text-center">
               <div class="form-group">
                 <label class="col-md-4 control-label" >Asunto</label>
                  <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                      <input   class="form-control"    name="Asusto">
                    </div>
                  </div>
               </div>
               <div class="form-group">
                 <label class="col-md-4 control-label" >Respuesta del funcionario</label>
                  <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                      <textarea class="form-control" name="respuesta"  > </textarea>
                    </div>
                  </div>
               </div>
              </section>

                <section class="row text-center">
                  <div class="control-group col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Continuar</button>
                    </div>
                  </div>
                </section>


  </form>
 </div>

      <script type="text/javascript">
        $(document).ready(function() {
            $('#form_funcionario').bootstrapValidator({

              feedbackIcons: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
              fields: {
                cedula_funcionario: {
                    validators: {
                        notEmpty: {
                            message: 'Por favor seleccione una opción'
                        }
                    }
                },
                respuesta: {
                    validators: {
                          stringLength: {
                            min: 10,
                            max: 200,
                            message:'Ingrese entre 10 y 200 caracteres'
                        },
                        notEmpty: {
                            message: 'Escriba la descripción'
                        }
                        }
                    }

                  }
            })
        });
      </script>
    </body>
</html>
