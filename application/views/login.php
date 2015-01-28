<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-theme.min.css">
		<script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jquery-1.11.2.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
		<style type="text/css">
			body {
				padding-top: 40px;
				padding-bottom: 40px;
				
				}


		</style>

	</head>
	<body>

		<div class="container">
			<form class="form-horizontal">
				<div class="row">
					<div class="col-md-3 col-md-offset-5">
						<h2 class="form-signin-heading text-center text-uppercase"><strong>Login</strong></h2>
						<div class="form-group">
							<label for="userName" class="sr-only">Usuari</label>
							<input type="text" id="userName" class="form-control" placeholder="Usuari">
						</div>
						<div class="form-group">
							<label for="inputPassword" class="sr-only">Password</label>
							<input type="password" id="inputPassword" class="form-control" placeholder="Password">
						</div>
						<div class="form-group">
							<button class="btn btn-lg btn-primary btn-block" type="submit">Inicia Sessi&oacute;</button>
						</div>
					</div>
				</div>

			</form>
		</div>
		

	</body>
</html>