<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Servicios</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/full-slider.css" rel="stylesheet">

</head>
<body>
	
	<?php 
		include ('menu.php');
	 ?>
<hr>
	<div class="container">
	<div class="row">
        <div class="col-md-12">
          <a href="">
            	<img class="img-responsive" alt="Automotriz" src="img/contacto/foto-mapa.jpg" style="width: 100%">
            </a>
        </div>
      </div>
    </div>
    <hr>

    <div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3" style="width: 100%; margin-left: 0px;">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post" style="width: 100%;">
          <fieldset>
            <legend class="text-center">Contacto</legend>
    
            <!-- Name input-->
            <div class="form-group">
              
              <div class="col-md-4">
                <input id="name" name="name" type="text" placeholder="Nombre: " class="form-control-contac">
              </div>
              <div class="col-md-4">
                <input id="name" name="name" type="text" placeholder="Correo: " class="form-control-contac">
              </div>
              <div class="col-md-4">
                <input id="name" name="name" type="text" placeholder="Telefono: " class="form-control-contac">
              </div>
            </div>

            <!-- Message body -->
            <div class="form-group">
              
              <div class="col-md-12">
                <textarea class="form-control-contac" id="message" name="message" placeholder="Mensaje: " rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>


<?php 
		include ('footer.php');
	 ?>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>