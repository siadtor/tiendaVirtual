<?php  	
include 'template/cabecera.php';
?>


	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Iniciar Sesión</h2>
						<form action="" method="post">
							<input type="email" name="email" id="email" placeholder="Email" />
							<input type="password" name="Contraseña" id="Contraseña" placeholder="Contraseña" />
							<span>
								<!--<input type="checkbox" class="checkbox">
								Keep me signed in-->
							</span>
							<button type="submit" name="btnSesion" class="btn btn-default">Iniciar</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">O</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>¡Nuevo registro de usuarios!</h2>
						<form action="#">
							<input type="text" placeholder="Nombre"/>
							<input type="email" placeholder="Email"/>
							<input type="password" placeholder="Contraseña"/>
							<button type="submit" class="btn btn-default">Crear Cuenta</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->


	<?php include 'template/piepagina.php'?>
