<body style="background-color:white;">

<h2 class="titulo">Gestion de gastos</h2>

	<form method="POST" action="editar" class="formulario" style="background-color:white;">
	
	<label class="label" for="monto"> Monto del Gasto: </label>
	<input type="text" class="input" name="monto" id="monto" value="<?php echo $monto; ?>">
	<br/>
	<label class="label" for="fecha">Fecha de compra: </label> 
	<input type="date" class="input" name="fecha" id="fecha" value="<?php echo $fecha; ?>">
	<br/>
	<label class="label" for="descripcion">Descripcion del gasto: </label> 
	<input type="text" class="input" name="descripcion" id="descripcion" value="<?php echo $descripcion; ?>">
	<br/>
	<label class="label" for="categoria">Categoria: </label> 
	<select name="categoria" class="input" value="<?php echo $categoria; ?>">
  <option value="Alimentacion">Alimentacion</option>
  <option value="Vestimenta">Vestimenta</option>
  <option value="Transporte">Transporte</option>
  <option value="Entretenimiento">Entretenimiento</option>
  <option value="Salud">Salud</option>
</select>
		
	<br><br>
	<button class="submit" style="background-color:#A82E1E;">Editar</button>
</form>

	
	<style type="text/css">
 .formulario{
width: 400px;
position: center;
color: #3ED1DB;
color-rendering: #3ED1DB;
left: -300px;
margin: auto;
margin-top: 40px;
padding: 25px;
box-shadow: 0 0 10px;
}
.titulo{
color: #1E56A8;
text-align: center;
font-size: 30px;
font-family: fantasy;
}
.input, .label, .submit{
display: black;
width:100%;
font-size: 1em;
border-radius: 60px,
}
.input{
padding: 10px;
font-size: 20px;
border: 1px solid rgba(0,0,0,.3);
margin-bottom: 10px;
background: rgba(0,0,0,.2);
}
.input:focus + .label{
margin-top: -160;
}
.submit{
background-color: #A82E1E;
border: none; 
border-radius: 25px;
color: white;
padding: 20px;
cursor: pointer;
}
.label{
padding: 15px;
font-family: fantasy;
color: #505F75;
}
</style>