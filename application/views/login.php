
		
		<style type="text/css">
			body {
				padding-top: 40px;
				padding-bottom: 40px;
				
				}


		</style>

	</head>
	<body>

		<div class="container">
			<form class="form-horizontal" method="post">
				<div class="row">
					<div class="col-md-3 col-md-offset-5">
						<h2 class="form-signin-heading text-center text-uppercase"><strong>Login</strong></h2>
						<div class="form-group">
							<label for="userName" class="sr-only">Usuari</label>
							<input type="text" id="userName" class="form-control" placeholder="Usuari">
						</div><!--fi form-group-->
						<div class="form-group">
							<label for="inputPassword" class="sr-only">Password</label>
							<input type="password" id="inputPassword" class="form-control" placeholder="Password">
						</div><!--fi form-group-->
						<div class="form-group">
							<button class="btn btn-lg btn-primary btn-block" type="submit">Inicia Sessi&oacute;</button>
						</div><!--fi form-group-->
						<div class="form-group text-right">
							<a href="<?php echo base_url();?>index.php/main/usuaris">Registrat</a>

						</div><!--fi form-group-->
					</div><!--fi col-md-->
				</div><!--fi row-->

			</form>
		</div>
		

	</body>
</html>