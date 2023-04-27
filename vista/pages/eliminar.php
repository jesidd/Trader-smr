<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="icon" type="favicon" href="img/favicon.ico">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<title>Usuario-informacion</title>
</head>

<body>

	<div class="wrapper">
		<div class="navbar">
			<div class="logo">
				<a href="#">Información de usuario</a>
			</div>
			<div class="nav_right">
				<ul>
					<li class="nr_li">
						<a href="../inicio.php" class="home-icon"><i class="fas fa-home"></i></a>
					</li>

					<li class="nr_li dd_main">
						<img src="img/profile_pic.png" alt="profile_img">

						<div class="dd_menu">
							<div class="dd_left">
							<ul>
								<li><i class="fa fa-user"></i></li>
								<li><i class="fa fa-th-large"></i></li>
								<li><i  class="fa fa-pen"></i></li>
								<li><i class="fas fa-envelope-open-text"></i></li>
								<li><i class="fa fa-question"></i></li>
								<li><i class="fas fa-cog"></i></li>
								<li><i class="fas fa-sign-out-alt"></i></li>
							</ul>
							</div>
							<div class="dd_right">
								<ul>
									<li>Username</li>
									<li><a href="">Plataforma</a></li>
									<li><a href="modificar.php">Editar datos</a></li>
									<li><a href="">Mis mensajes</a></li>
									<li><a href="">Ayuda</a></li>
									<li><a href="">Configuración</a></li>
									<li><a href="../../controlador/action/act_logout.php">Cerrar sesión</a></li>
								</ul>
							</div>
						</div>
					</li>

				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<h2>Eliminar cuenta</h2>
		<form id="myForm" method="POST" action="../../controlador/action/act_delete.php">
			<div class="form-group">
				<label for="username">Nombre de usuario:</label>
				<input type="text" class="form-control" id="username" name="username" value=""
					placeholder="Ingrese	su nombre de usuario" required>
			</div>
			<div class="form-group">
				<label for="password">Contraseña:</label>
				<input type="password" class="form-control" id="password" name="password" value=""
					placeholder="Ingrese su contraseña" required>
			</div>
			<div class="form-group">
				<label for="confirm-password">Confirmar contraseña:</label>
				<input type="password" class="form-control" id="confirm-password" name="confirm-password" value=""
					placeholder="Confirme su contraseña" required>
			</div>
			<button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Eliminar
				cuenta</button>
		</form>
	</div>
	<script>
		var dd_main = document.querySelector(".dd_main");

		dd_main.addEventListener("click", function () {
			this.classList.toggle("active");
		})
	</script>
	<script src="./js/main.js"></script>
	<script></script>
</body>

</html>