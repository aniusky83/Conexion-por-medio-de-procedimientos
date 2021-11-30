<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Portafolio</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
		
        <style>
			fieldset{
                display: inline;
  
			}
			
			
			table *{
				border: solid 1px black;
				
				
			}			
		</style>
	</head>
	
    <body>
        <h1>ACTUALIZACIÓN DE LOS TRABAJOS REALIZADOS</h1>

		<form method="POST" action="<?php $_SERVER['PHP_SELF']?>" >
			<fieldset> 
				<legend>Fecha</legend>
				<input type="date" name="fecha">
			</fieldset>
            <fieldset> 
				<legend>Empresa</legend>
				<input type="text" name="empresa" placeholder="Nombre de empresa">
			</fieldset>
            <fieldset> 
				<legend>Cargo</legend>
				<input type="text" name="cargo" placeholder="Cargo que llevaste a cabo">
			</fieldset>
			<fieldset> 
				<legend>Contraseña</legend>
				<input type="password" name="contra" placeholder="Introduce la contraseña para poder añadir los datos">
			</fieldset>
			
			<input type="submit" name="boton"  value="Añadir">
			
        </form>

		<h2>ESTOS SON LOS DATOS QUE SE VAN ACTUALIZANDO EN MI BBDD</h2>

        <?php
        
        include "funciones.php";

        if (isset($_POST["boton"])){
			echo '<script>contraseña();</script>';
            $fecha=$_POST["fecha"];
            $empresa=$_POST["empresa"];
            $cargo=$_POST["cargo"];
			$contra=$_POST["contra"];
			if($contra=="1234"){
            insertar($fecha, $empresa, $cargo);
            header("location:index.php");
			}
        }

        mostrar();
        ?>
		
	</body>
</html> 