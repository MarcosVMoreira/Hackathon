<?php

require_once("funcoes.php");

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Home - OnTrack</title>

	<link rel="stylesheet" href="assets/vendor/fontawesome-free/css/all.min.css" type="text/css">
	<link rel="stylesheet" href="assets/css/navbar.css" type="text/css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet"
		  href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
	<link rel="stylesheet"
		  href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
	<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
</head>

<body id="page-top" class="sidebar-toggled">
<?= incluiSidebarMobileLogado(); ?>
<div id="wrapper">
	<?= incluiSidebarLogado() ?>

	<div id="content-wrapper">
		<div class="row">
			<div class="header-feedback">
				<div class="col-8 mx-auto ">
					Você acabou de concluir
				</div>
				<div class="col-8 mx-auto">
					Palestra 5G
				</div>
			</div>

			<div class="col-8 mx-auto">
				O que você achou?
			</div>
			<div class="col-8 mx-auto"">
				<img src="img/bad.png" class="img-fluid">
				<img src="img/neutral.png" class="img-fluid">
				<img src="img/good.png" class="img-fluid">
			</div>
		</div>
	</div>

</div>
<!-- Login Modal -->
<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Login</h3>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<form class="form" action="dashboard.php" role="form" autocomplete="off" id="formLogin" novalidate=""
					  method="POST">
					<div class="form-group">
						<!--<a href="" class="float-right">Novo usuário?</a>-->
						<label for="">Usuário</label>
						<input type="text" class="form-control form-control-lg" name="usuarioLogin" id="usuarioLogin"
							   required>
						<div class="invalid-feedback">Oops, você esqueceu esse campo.</div>
					</div>
					<div class="form-group">
						<label>Senha</label>
						<input type="password" class="form-control form-control-lg" id="senhaLogin" name="senhaLogin"
							   required autocomplete="new-password">
						<div class="invalid-feedback">Entre sua senha também!</div>
					</div>
					<div class="form-group py-4" style="text-align: center;">
						<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Cancelar</button>
						<button type="submit" class="btn btn-primary" id="btnCadastro">Cadastrar-se</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Cadastro Modal -->
<div id="cadastroModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Criar conta</h3>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<form class="form" action="dashboard.php" role="form" autocomplete="off" id="formCadastro"
					  novalidate="" method="POST">
					<div class="form-group">
						<!--<a href="" class="float-right">Novo usuário?</a>-->
						<label for="nomeCompletoCadastro">Nome Completo</label>
						<input type="text" class="form-control form-control-lg" name="nomeCompletoCadastro"
							   id="nomeCompletoCadastro" required>
						<div class="invalid-feedback">Oops, você esqueceu esse campo.</div>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="password" class="form-control form-control-lg" id="emailCadastro"
							   name="senhaCadastro" required autocomplete="new-password">
						<div class="invalid-feedback">Entre sua senha também!</div>
					</div>
					<div class="form-group">
						<label>Senha</label>
						<input type="password" class="form-control form-control-lg" id="senhaCadastro"
							   name="senhaCadastro" required autocomplete="new-password">
						<div class="invalid-feedback">Entre sua senha também!</div>
					</div>
					<div class="form-group">
						<label>Confirmação de senha</label>
						<input type="password" class="form-control form-control-lg" id="confirmaSenhaCadastro"
							   name="senhaCadastro" required autocomplete="new-password">
						<div class="invalid-feedback">Entre sua senha também!</div>
					</div>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="rememberMe">
						<label class="custom-control-label" for="rememberMe">Lembrar-se</label>
					</div>
					<div class="form-group py-4" style="text-align: center;">
						<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Cancelar</button>
						<button type="submit" class="btn btn-primary" id="btnLogin">Entrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
<script src="assets/js/floatLabels.js"></script>
<script src="assets/js/script.min.js"></script>
</body>

</html>