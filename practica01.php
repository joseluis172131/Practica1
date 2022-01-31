<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
	<!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
	<body>

		<section class="hero is-primary">
  			<div class="hero-body">
    				<p class="title">
      					Datos
    				</p>
  			</div>
		</section>
			<section class="section is-medium columns">
  			<div class="column"></div>
  			<div class="column is-five-fifths">
			<form action="Cuestionario.php" method="post">
			<div class="box">
				<div>
				<label class="label">Nombre:</label>
				<input class="input is-primary" type="text" name="Nombre" required>
				</div>

				<div>
				<label class="label">Apellido Paterno:</label>
				<input class="input is-primary" type="text" name="ApellidoPaterno" required>
				</div>

				<div>
				<label class="label">Apellido Materno:</label>
				<input class="input is-primary" type="text" name="ApellidoMaterno" required>
				</div>

				<div>
				<label class="label">Cargo:</label>
				<input class="input is-primary" type="text" name="Cargo" required>
				</div>

				<div>
				<label class="label">RFC:</label>
				<input class="input is-primary" type="text" name="RFC" required>
				</div>

				<div>
				<label class="label">CURP:</label>
				<input class="input is-primary" type="text" name="Curp" required>
				</div>

				<div>
				<label class="label">Domicilio:</label>
				<input class="input is-primary" type="text" name="Domicilio" required>
				</div>

				<div>
				<label class="label">Telefono:</label>
				<input class="input is-primary" type="tel" name="Telefono" required>
				</div>

				<div>
            	<label class="label">Email:</label>
        		<input class="input is-primary" type="email" name="Correo" value="example@gmail.com">

				</div>

				<div>
				<label class="label">Sexo:</label>
				<div class="control">
  				<label class="radio" >										 
   			    <input type="radio" name="Sexo" value="Hombre"> Hombre
  				</label>
 				<label class="radio" >										
     	 		 <input type="radio" name="Sexo" value="Mujer"> Mujer
  				</label>
	    		  <label class="radio">										 
 				 <input type="radio" name="Sexo" value="Otros"> Otro
  				</label>
				</div>
               	</div>
					<div>
                	<label class="label">Fecha de Nacimiento:</label>
                    <input class="input is-primary" type="date" name="FechadeNacimiento">
               		</div>
                     <div>
                    <label class="label">Estado Civil:</label>
                  	<div class="select is-primary">
  					<select name="EstadoCivil">
    				<option>Casado</option>
   					<option>Soltero</option>
                    <option>Divorciado</option>
                    <option>Separacion </option>
					<option>Viudo</option>
                    <option>Concubinado</option>
 					</select>
					</div>
             		</div>
					<div>
	    		     <label class="label">Escolaridad:</label>
                	  <input class="input is-primary" type="text" name="Escolaridad">
            	      </div>
                      <div>
                 	  <label class="label">Referencia Familiar:</label>
                	  <input class="input is-primary" type="text" name="ReferenciaFamiliar">      
             		 </div>
                     <div>
					 <label class="label">Observaciones:</label>
					 <textarea class="textarea is-primary" name="Observaciones"></textarea>
					 </div>
                     <br>          
					 <div>
					 <input class="button is-primary" type="submit" value="Enviar">
					 </div>
					 </div>
					 </form>
				</div>
		<div class="column"></div>
		</section>
     </body>
</html>