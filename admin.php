<?php 

	$conexion=mysqli_connect('localhost','root','root','barberia');

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mas Equipo Medico de Mexico</title>
    <!-- CODIGO CSS carpeta de STLY CSS -->
    <link rel="preload" href="STYLE CSS/Normalize.css" as="style">
    <link rel="stylesheet" href="STYLE CSS/Normalize.css">
    <link rel="preload" href="STYLE CSS/style.css" as="style">
    <link  href="STYLE CSS/style.css" rel="stylesheet">
<!-- TERMINA CODIGO CSS -->
</head>
<body>
        <header>
    <h1 class="titulo1"></h1>
</header>
<nav class="navegacion">
      
      <span> <a class="navegacion__enlace" href="inicio.php">???</a></span>
      <span><a class="navegacion__enlace" href="clientes.php">????</a></span>

    </nav>
    <main class="contenedor sombra">
       <!-- llenado de campos -->
<section>
    <h1>REPORTES</h1>

<br>
   <div class='formulario1'>

	<table  border="1" >
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>corte</td>
			<td>costo</td>
				
		</tr>

		<?php 
		$sql="SELECT * from Producto";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['corte'] ?></td>
			<td><?php echo $mostrar['costo'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>
    </div>
</main>


</body>
</html>