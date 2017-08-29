<?php


        $base = new PDO("mysql:host=localhost; dbname=prototipo4","root","");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="select * FROM  usuario WHERE usuario =:usuario and contrasena = :password";
        $resultado = $base -> prepare($sql);
        $usuario = htmlentities(addslashes($_POST["usuario"]));
        $pass = htmlentities(addslashes($_POST["password"]));
        echo "".$usuario."".$pass;
        $resultado -> bindValue(":usuario",$usuario);
        $resultado -> bindValue(":password",$pass);
        $resultado -> execute();

        $numero_registros = $resultado -> rowCount();
        if ($numero_registros != 0) {
            session_start();
            $_SESSION["usuario1"]=$_POST["usuario"];
          header("Location:../php/listar.php");
        } else {
          header("Location:../formulario.php");
        }
     ?>
