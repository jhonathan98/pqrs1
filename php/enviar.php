<?php

if (!empty($_POST)) {

    if (isset($_POST["categoria"])) {

      if ($_POST["categoria"]=="normal") {
        if(isset($_POST["opt"]) &&isset($_POST["first_name"]) &&isset($_POST["last_name"]) &&isset($_POST["identificacion"]) &&isset($_POST["optC"]) &&isset($_POST["contact1"]) &&isset($_POST["address"]) &&isset($_POST["optG"]) &&isset($_POST["city"]) &&isset($_POST["asunt"]) &&isset($_POST["comment"])){

          if($_POST["asunt"]!=""&& $_POST["comment"]!=""&&$_POST["opt"]!=" "){
      			require "conexion.php";



            $sql="insert into datos_solicitud(nombre_usuario,apellido_usuario,opcion_contacto,contacto,cedula_usuario,direccion,genero,tipo_solicitud,asunto,solicitud,fecha_radicado) values (\"$_POST[first_name]\",\"$_POST[last_name]\",\"$_POST[optC]\",\"$_POST[contact1]\",\"$_POST[identificacion]\",\"$_POST[address]\",\"$_POST[optG]\",\"$_POST[opt]\",\"$_POST[asunt]\",\"$_POST[comment]\",NOW())";

            $query = $con->query($sql);
      			if($query!=null){
      				print "Agregado exitosamente";
      			}else{
      				print "No agregado";

      			}
      		}
      	}
        else {
          echo "Error en el envio de datos";
        }
      }elseif ($_POST["categoria"]=="anonimo") {
      if($_POST["asunt"]!=""&& $_POST["comment"]!=""&&$_POST["opt"]!=" "){
        require "conexion.php";



        $sql="insert into datos_solicitud(tipo_solicitud,asunto,solicitud,fecha_radicado) values (\"$_POST[opt]\",\"$_POST[asunt]\",\"$_POST[comment]\",NOW())";

        $query = $con->query($sql);
        if($query!=null){
          print "Agregado exitosamente";
        }else{
          print "No agregado";

        }
      }

      else {
        echo "Error en el envio de datos";
      }
    }




}

    }



 ?>
