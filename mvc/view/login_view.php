
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
		<form action ="controller/mostrar_controller.php" method="post">
			<h1>Inicio de sesion</h1>
			<div class="input-field">
				<input type="text" id="correo_electronico" name="correo_electronico" placeholder="Email" required>
			</div>
			<div class="input-field">
				<input type="password" id="contrasena" name="contrasena" placeholder="password" required>
			</div>
			<div>
				<a href="view/registarse.php">¿No tiene cuenta? Registrarte</a>
			</div>
			<br>
			<button type="submit" >Ingresar</button>
		</form>
	</div>
</body>

