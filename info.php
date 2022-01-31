<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Informacion Almacenada</title>
	<!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>
			<section class="hero is-info">
  				<div class="hero-body">
   				 <p class="title">
     			 Informacion guardada
   				 </p>
				  </div>
			</section>

	<section class="section is-medium columns">
    <div class="column"></div>
    <div class="column is-two-fifths">
           <?php
	
				$Nombre = $_POST['Nombre'];
				$AP = $_POST['ApellidoPaterno'];
				$AM = $_POST['ApellidoMaterno'];
				$Cargo = $_POST['Cargo'];
				$RFC = $_POST['RFC'];
				$Curp = $_POST['Curp'];
				$Domicilio = $_POST['Domicilio'];
				$Telefono = $_POST['Telefono'];
				$Correo = $_POST['Correo'];
				$Sexo = $_POST['Sexo'];
				$Fnacimiento = $_POST['FechadeNacimiento'];
				$EstadoCivil = $_POST['EstadoCivil'];
				$Escolaridad = $_POST['Escolaridad'];
				$RFamiliar = $_POST['ReferenciaFamiliar'];
				$Observaciones = $_POST['Observaciones'];
				echo "<h1 class='is-subtitle'>";
				echo "<strong> Hola " .  $Nombre ." " . $AP . " " . $AM . "</strong>";
				echo "<strong> <br>Cargo: </strong>" . $Cargo;
				echo "<strong> <br>RFC: </strong>" . $RFC;
				echo "<strong> <br>CURP: </strong>" . $Curp;
				echo "<strong> <br>Dirección es: </strong>" . $Domicilio;
				echo "<strong> <br>Télefono: </strong>" . $Telefono;
				echo "<strong> <br>Correo: </strong>" . $Correo;
				echo "<strong> <br>Genero: </strong>" . $Sexo;
				echo "<strong> <br>Fecha de Nacimiento: </strong>" . $Fnacimiento;
				echo "<strong> <br>Estado Civil: </strong>" . $EstadoCivil;
				echo "<strong> <br>Escolaridad: </strong>" . $Escolaridad;
				echo "<strong> <br>Referencia Familiar: </strong>" . $RFamiliar;
				echo "<strong> <br>Observaciones: </strong>" . $Observaciones;
				echo "</h1>";
			?>

		</div>
		<div class="column"></div>

	</section>
</body>
</html>