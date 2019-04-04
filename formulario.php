<!DOCTYPE html>
<html>
<head>
	<title>FORMULARIO PARA REGISTRARSE</title>
	<meta charset="utf-8">
	<meta name="viewport"  content="width=device-width , initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles-formulario.css">

</head>
<body>
<div class="jumbotron">
  <h1 class="display-4">E-LIBRARY</h1>
  <p class="lead">Tus utiles con un solo click.</p>
  <hr class="my-4">
  <form class="caja" action="https://www.biztree.com/es/doc/gracias-por-confiar-en-nosotros-empresa-de-servicios-D3882" method="post">
	<div class="nombre" >
		<input type="text" class="form-control" placeholder="Nombre de usuario" required>
	</div>
	<div class="password">
		<input type="password" class="form-control" placeholder="Password">
	</div>
    <div>
  	<div class="form-group">
    <label for="formControlRange">Precio maximo de entrada</label>
    <input type="range" class="form-control-range" id="formControlRange">
  	</div>
  	</div>

    <div>
    	<label>Genero</label>
    	<br>
		<input type="checkbox" name="mujer" value="1">Mujer
		<br>
		<input type="checkbox" name="hombre" value="1">Hombre
		<br>
		<input type="checkbox" name="nobin" value="1">No binarie
	</div>
	<div>
    <label>
		<select  class="form-control" name="idioma">
			<option value="sp">Espanol
			</option>
			<option value="eng">Ingles
			</option>
		</select>
	</label>
    </div>
    <div>
 <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary" name="mujer">Mujer</button>
  <button type="button" class="btn btn-secondary" name="hombre">Hombre</button>
  <button type="button" class="btn btn-secondary" name="nobinarie">No binarie</button>
</div>
    <button  class="btn btn-primary btn-lg"type="reset" name="button">Reiniciar</button>
       <button class="btn btn-primary btn-lg" type="submit" name="button">Enviar</button>
    </div>
 </form>
 

</div>




<article>
	<img src="">
</article>
</body>
</html>