<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<?php include("includes/header.php")?>
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Mandanos un mensaje
				</span>

				<label class="label-input100" for="first-name">Dinos tu nombre *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="first-name" placeholder="Nombres">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="last-name" placeholder="Apellidos">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Dinos tu Email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" placeholder="Eg. ejemplo@email.com">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Telefono</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="phone" placeholder="Ej. +591 7000000">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Mensaje *</label>
				<div class="wrap-input100 validate-input" data-validate = "Mensaje es requerido">
					<textarea id="message" class="input100" name="message" placeholder="Escribenos un mensaje"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Enviar mensaje
					</button>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Direcion
						</span>

						<span class="txt2">
							Av. Saavedra N#200
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Hablemos
						</span>

						<span class="txt3">
							+591 6549875
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Soporte
						</span>

						<span class="txt3">
							contactos@Dr.Vet.com
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
<?php include ("includes/footer.php")?>
</html>
