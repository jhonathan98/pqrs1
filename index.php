<html>
	<head>
		<title>Bienvenido</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	</head>
	<body>
	<?php include "php/navbar.php";?>

  	<div class="row">
			<div class="col-md-2" id="listas">

				<?php include "php/listas.php";?>

			</div>


			<div class="col-md-8">
				<div class="col-md-12">
		  			<h2 class="text-center">PQRS</h2>
		  	</div>
		      <div class="introduccion">
		          <h3>Peticion:</h3>
		          <h4> la petición es un derecho que supone que toda persona puede acudir a las autoridades competentes por
		          algún motivo de interés colectivo o general.
						</h4>
		          <h3>Queja:</h3>
		           <h4>
		             Una Queja es una expresión que denota molestia, disgusto o dolor.
		             Cuando una persona o ser vivo reciben un golpe o es agredido física o moralmente,
		              la respuesta que este da es una queja inmediata con el fin de repeler y evitar el daño
		           </h4>
		           <h3>Reclamo:</h3>
		           <h4>La posibilidad de efectuar un reclamo es un derecho de los consumidores, protegido por diversas leyes y
		             normativas. Los clientes, usuarios o compradores pueden expresar su disconformidad cuando
		             consideran que el producto o servicio recibido no cumple con sus expectativas debido a errores
		             por parte de la empresa.
		           </h4>
		           <h3>Solicitud:</h3>
		           <h4>
		              Una solicitud de empleo es una carta de contacto que se envía a una empresa en la que se desea
		              ingresar a trabajar. La persona interesada debe explicar, con precisión y de manera formal,
		              cuál es el motivo de su contacto y detallar su experiencia, aptitudes, etc.
		           </h4>
		      </div>
					<div class="text-center">
						 <button class="btn btn-success btn-lg" type="submit" id="1">Peticion</button>
						 <button class="btn btn-success btn-lg" type="submit" id="2">Peticion anonima</button>
				 </div>
		  	</div>
				<div class="formulario">
				<div class="col-md-2">
					<?php include("login.php") ?>
				</div>
			</div>
			</div>





  </body>
  <script src="js/jquery.js"></script>
  <script src="js/peticion.js"></script>
</html>
