<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
<br><br><br><br>
  <div class="login">
    <div class="row-divider">
      <h1 class="text-center">Login</h1>
    </div>

    <div class="row">
      <form action="php/login.php" action="php/listar" method="post">
        <div class="col-md-11">
           <label for="usr">Nombre:</label>
           <input type="text" placeholder="Nombre"class="form-control" id="usuario" name="usuario">
        </div>
      </div>
        <br><br>
      <div class="row">
        <div class="col-md-11">
             <label for="pwd">Contraseña:</label>
             <input type="password" placeholder="contraseña" class="form-control" id="password" name="password">
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="text-center">
            <button type="submit" value="Entrar" class="btn btn-success">Entrar</button>
        </div>
      </div>
      </form>

  </div>


</body>
</html>
