<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Envio de Email</title>
</head>
<body>
	<h1>Correo Electronico </h1>
	<form action="{{route('seend')}}" method="get">
		<input type="text" name="name" placeholder="Nombre"><br>
		<textarea  name="message" placeholder="Mensaje"></textarea><br>
		<input type="email" name="email" placeholder="Email" class="form-control"  autocomplete="on"> 

		<button type="submit">Enviar</button>
	</form>
	

</body>
</html>