<?php
if (!empty($_GET)) {
    $tipo = $_GET["tipo"];

    if ($tipo == "normal") {
        echo "<script src='../js/tooltip.js'> </script>";
        echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'> </script>";
        echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'> </script>";
        echo "<div class='col-md-2'>";
            echo "<div class='container'>";
              include("listas.php");
            echo "</div>";
        echo "</div>";
        echo "<div class='col-md-1'>";

        echo "</div>";

        echo "<div class='col-md-7'>";
        echo "<form class='well form-horizontal' action='php/enviar.php'  method='post'  enctype='multipart/form-data' id='contact_form'>";
        echo "<fieldset>";

        echo "<!-- Form Name -->";
        echo "<legend>Ingrese la información siguiente</legend>";


        echo "<!-- Select Basic -->";

        echo "<div class='form-group'>";
        echo "<label class='col-md-4 control-label'>Tipo</label>";
        echo "<div class='col-md-4 selectContainer'>";
        echo "<div class='input-group'>";
        echo "<span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>";
        echo "<select name='opt' class='form-control selectpicker'  >";
        echo "<option value=' ' >Seleccione su solicitud</option>";
        echo "<option value='Peticion' >Petición</option>";
        echo "<option value='Queja' >Queja</option>";
        echo "<option value='Reclamo' >Reclamo</option>";
        echo "<option value='Felicitaciones' >Felicitaciones/Agradecimientos</option>";
        echo "</select>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

        echo "<!-- Text input-->";

        echo "<div class='form-group'>";
        echo "<label class='col-md-4 control-label'>Nombre</label>";
        echo "<div class='col-md-4 inputGroupContainer'>";
        echo "<div class='input-group'>";
        echo "<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>";
        echo "<input  name='first_name' placeholder='Nombre' id='first_name' class='form-control' data-toggle='tooltip' title='Este campo es para su nombre'  type='text' pattern='[a-zA-Z0-9._\s]+'>";
        echo "</div>";
        echo "</div>";
        echo "</div>";





        echo "<!-- Text input-->";
        echo "<div class='form-group'>";
        echo "<label class='col-md-4 control-label' >Apellido</label>";
        echo "<div class='col-md-4 inputGroupContainer'>";
        echo "<div class='input-group'>";
        echo "<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>";
        echo "<input name='last_name' placeholder='Apellido' class='form-control' data-toggle='tooltip' title='Este campo es para su apellido'  type='text'>";
        echo "  </div>";
        echo "</div>";
        echo "</div>";



        echo "<!-- Text input-->";

        echo "<div class='form-group'>";
        echo "<label class='col-md-4 control-label' >Identificación</label>";
        echo "<div class='col-md-4 inputGroupContainer'>";
        echo "<div class='input-group'>";
        echo "<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>";
        echo "<input name='identificacion' placeholder='Identificación' class='form-control' data-toggle='tooltip' title='Este campo es para su identificación' type='text'>";
        echo "</div>";
        echo "</div>";
        echo "</div>";


                echo "<div class='form-group'>";
                echo "<label class='col-md-4 control-label'>Genero</label>";
                echo "<div class='col-md-4 selectContainer'>";
                echo "<div class='input-group'>";
                echo "<span class='input-group-addon'><i class='glyphicon glyphicon-list' data-toggle='tooltip' title='Este campo es para su genero'></i></span>";
                echo "<select name='optG' class='form-control selectpicker' >";
                echo "<option value=' ' >Seleccione su genero</option>";
                echo "<option value='Hombre' >Hombre</option>";
                echo "<option value='Mujer' >Mujer</option>";
                echo "<option value='Otro' >Otro</option>";
                echo "</select>";
                echo "</div>";
                echo "</div>";
                echo "</div>";

        echo "<!-- Select Basic -->";

        echo "<div class='form-group'>";
        echo "<label class='col-md-4 control-label'>Medio de contacto</label>";
        echo "<div class='col-md-4 selectContainer'>";
        echo "<div class='input-group'>";
        echo "<span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>";
        echo "<select name='optC' class='form-control selectpicker' >";
        echo "<option value=' ' >Como desea que lo contactemos</option>";
        echo "<option value='Email' >Email</option>";
        echo "<option value='Celular' >Telefono celular</option>";
        echo "<option value='Telefono' >Telefono fijo</option>";
        echo "</select>";
        echo "</div>";
        echo "</div>";
        echo "</div>";



        echo "<!-- Text input-->";
        echo "<div class='form-group' name='divc' id='divc'>";
        echo "<label class='col-md-4 control-label'>Contacto</label>";
        echo "<div class='col-md-4 inputGroupContainer'>";
        echo "<div class='input-group'>";
        echo "<span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span>";
        echo "<input name='contact1' placeholder=' Contacto' class='form-control'  type='text' >";
        echo "</div>";
        echo "</div>";
        echo "</div>";



        echo "<!-- Text input-->";

        echo "<div class='form-group'>";
        echo "<label class='col-md-4 control-label'>Dirección</label>";
        echo "  <div class='col-md-4 inputGroupContainer'>";
        echo "  <div class='input-group'>";
        echo "    <span class='input-group-addon'><i class='glyphicon glyphicon-home'></i></span>";
        echo "  <input name='address' placeholder='Dirección' class='form-control' type='text'>";

        echo "</div>";
        echo "</div>";
        echo "</div>";


        echo "<!-- Text input-->";

        echo "<div class='form-group'>";
        echo "  <label class='col-md-4 control-label'>Ciudad</label>";
        echo " <div class='col-md-4 inputGroupContainer'>";
        echo "   <div class='input-group'>";
        echo "   <span class='input-group-addon'><i class='glyphicon glyphicon-home'></i></span>";
        echo " <input name='city' placeholder='Ciudad' class='form-control'  type='text'>";

        echo "</div>";
        echo "</div>";
        echo "</div>";


        echo "<!-- Text input-->";


        echo "  <div class='form-group'>";
        echo " <label class='col-md-4 control-label'>Asunto</label>";
        echo "<div class='col-md-4 inputGroupContainer'>";
        echo "<div class='input-group'>";
        echo "<span class='input-group-addon'><i class='glyphicon glyphicon-globe'></i></span>";
        echo "<input name='asunt' placeholder='Asunto' class='form-control' type='text'>";
        echo "</div>";
        echo "</div>";
        echo "</div>";



        echo "<!-- Text input-->";

        echo "<div class='form-group'>";
        echo " <label class='col-md-4 control-label'>Descripción</label>";
        echo "  <div class='col-md-4 inputGroupContainer'>";
        echo "    <div class='input-group'>";
        echo "   <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>";
        echo "<textarea class='form-control' name='comment' placeholder='Descripción'></textarea>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

        echo "<div class='control-group text-center'>";
        echo "<label class='control-label' for='filebutton'>Archivos adjuntos</label>";
        echo "<div class='controls'>";
        echo "<center><input id='file' name='file' class='input-file' type='file'></center>";
        echo "<br>";
        echo "</div>";
        echo "</div>";


        echo "<!-- Success message -->";
        echo "<div class='alert alert-success' hidden='true' role='alert' id='success_message'>   Envio exitosamente    <i class='glyphicon glyphicon-thumbs-up'></i> Gracias por usar nuestro servicio, este es el número radicado #1312393 conservelo!</div>";








        echo " <!-- Button -->";
        echo "   <div class='form-group'>";
        echo "  <label class='col-md-4 control-label'></label>";
        echo "<div class='col-md-4'>";
        echo "<input type='hidden' name='categoria' value='normal'><button type='submit' class='btn btn-success' >Enviar<span class='glyphicon glyphicon-send'></span></button>";
        echo "</div>";
        echo "</div>";

        echo "</fieldset>";
        echo "</form>";
        echo "</div>";

        echo "</div>";

        echo "<div class='col-md-2'>";
          include("login.php");
        echo "</div>";






    } else {

        echo "<div class='container'>";

        echo "<form class='well form-horizontal' action='php/enviar.php'  method='post'  id='contact_form'>";
        echo "<fieldset>";

        echo "<!-- Form Name -->";
        echo "<legend>Ingrese la información siguiente</legend>";


        echo "<!-- Select Basic -->";

        echo "<div class='form-group'>";
        echo "<label class='col-md-4 control-label'>Tipo</label>";
        echo "<div class='col-md-4 selectContainer'>";
        echo "<div class='input-group'>";
        echo "<span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>";
        echo "<select name='opt' class='form-control selectpicker' >";
        echo "<option value=' ' >Seleccione su solicitud</option>";
        echo "<option value='Queja' >Queja</option>";
        echo "<option value='Felicitaciones' >Felicitaciones/Agradecimientos</option>";
        echo "</select>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

        echo "  <div class='form-group'>";
        echo " <label class='col-md-4 control-label'>Asunto</label>";
        echo "<div class='col-md-4 inputGroupContainer'>";
        echo "<div class='input-group'>";
        echo "<span class='input-group-addon'><i class='glyphicon glyphicon-globe'></i></span>";
        echo "<input name='asunt' placeholder='Asunto' class='form-control' type='text'>";
        echo "</div>";
        echo "</div>";
        echo "</div>";



        echo "<!-- Text input-->";

        echo "<div class='form-group'>";
        echo " <label class='col-md-4 control-label'>Descripción</label>";
        echo "  <div class='col-md-4 inputGroupContainer'>";
        echo "    <div class='input-group'>";
        echo "   <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>";
        echo "<textarea class='form-control' name='comment' placeholder='Descripción'></textarea>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

        echo " <!-- Button -->";
        echo "   <div class='form-group'>";
        echo "  <label class='col-md-4 control-label'></label>";
        echo "<div class='col-md-4'>";
        echo "  <input type='hidden' name='categoria' value='anonimo'><button type='submit' class='btn btn-success' > Enviar <span class='glyphicon glyphicon-send'></span></button>";
        echo "</div>";
        echo "</div>";

        echo "</fieldset>";
        echo "</form>";
        echo "</div>";
        echo "</div><!-- /.container -->";

    }
}

?>
