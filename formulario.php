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
<div class="container">
<section class="section">
<article class="article">
<form class="caja" action="https://www.biztree.com/es/doc/gracias-por-confiar-en-nosotros-empresa-de-servicios-D3882" method="post">
	<div>
		<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre de usuario" required>
	</div>
	<div>
		<input type="password" class="form-control" id="inputPassword" placeholder="Password">
	</div>
    <div>
  	<div class="form-group">
    <label for="formControlRange">Precio maximo de entrada</label>
    <input type="range" class="form-control-range" id="formControlRange">
  	</div>
  	</div>

    <div>
    	<label>Seleccione sus preferencias de eventos</label>
    	<br>
		<input type="checkbox" name="servicio" value="1">Recitales
		<br>
		<input type="checkbox" name="servicio" value="1">Boliches
		<br>
		<input type="checkbox" name="servicio" value="1">Fiestas tematicas
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
    <button type="reset" name="button">Reiniciar</button>
       <button type="submit" name="button">Enviar</button>
    </div>


</form>
</article>
</section>
</div>


<article>
	<img src="">
</article>
</body>
</html>