<link href="tabla.css" rel="stylesheet" type="text/css">
        <div id="main-container">

        <table border ="8" id="main-container">
        <thead>
		<tr>
			
			<th> Monto </th>
			<th> Fecha </th>
			<th> Descripcion </th>
			<th> Categoria </th>
			<th>Eliminar</th>

			</tr>

			 </thead>
			 <tbody>
       
		<tr>
			
			
			<td><?php echo $monto ?></td>
			<td><?php echo $fecha ?></td>
			<td><?php echo $descripcion ?></td>
			<td><?php echo $categoria ?></td>
			<td>
			<a href="eliminar_estudiantes.php?no_control_empleado='.$fila['no_control_empleado'].'">Eliminar</a>
			</td>
			</tr>
			
		
			</tbody>
		</table>
		<form method="POST" action="buscar">
			<input type="hidden" name="monto" value="<?php echo $monto; ?>">
			<button class="submit" style="background-color:#A82E1E;">Editar</button>
		</form>
	</div>
</body>

	<style type="text/css">
body{
	background-color: #white;
	font-family: fantasy;
}

#main-container{
	margin: 150px auto;
	width: 600px;
	position: relative;
	width: 800px;
	top:-50px;
}

table{
	background-color: white;
	text-align: left;
	border-collapse: collapse;
	width: 100%;
}

th, td{
	padding: 20px;
}

thead{
	font-family: Arial;
	background-color: #56baed;
	border-bottom: solid 5px #0F362D;
	color: white;
}

tr:nth-child(even){
	background-color: #ddd;
}

tr:hover td{
	background-color: #369681;
	color: white;
}

.titulo{
color: #1E56A8;
text-align: center;
font-size: 30px;
font-family: fantasy;
}

.submit{
background-color: #A82E1E;
border: none; 
border-radius: 25px;
color: white;
padding: 20px;
cursor: pointer;
}

.input, .label, .submit{
display: black;
width:100%;
font-size: 1em;
border-radius: 60px,
}