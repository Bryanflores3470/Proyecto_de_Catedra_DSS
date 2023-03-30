<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</head>

<div class="container">
		<form action ="../controller/registrar_controller.php" method="POST">
			<h2>Registro de nuevo usuario</h2>
          <br>
			 <div class="input-field">
				<input type="text" id="nombres" name="nombres" placeholder="nombres" required>
			</div>
			<div class="input-field">
				<input type="text" id="apellidos" name="apellidos" placeholder="apellidos" required>
			</div>
			<div class="input-field">
				<input type="text" id="telefono" name="telefono" placeholder="telefono" required>
			</div>
			<div class="input-field">
				<input type="text" id="direccion" name="direccion" placeholder="direccion" required>
			</div>
			<div class="input-field">
				<input type="text" id="DUI" name="DUI" placeholder="DUI" required>
			</div>
			<div class="input-field">
				<input type="text" id="correo_electronico" name="correo_electronico" placeholder="Email" required>
			</div>
			<div class="input-field">
				<input type="password" id="contrasena" name="contrasena" placeholder="password" required>	
			<button type="submit" >Guardar</button>
		</form>
	</div>