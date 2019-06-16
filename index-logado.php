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
		<header class="masthead text-center text-white d-flex" style="background-image: url('assets/img/header.jpg');">
			<div class="container my-auto">
				<div class="row">
					<div class="col-lg-12 mx-auto">
						<h1 class="text-uppercase"><strong>Procure o evento ideal para você</strong></h1>
						<hr>
					</div>
				</div>
				<div class="col-lg-12 mx-auto">
					<p class="text-faded mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam
						malesuada, iaculis dui sit amet, facilisis lacus.</p>
				</div>
				<div class="row">
					<div class="col-12">
						<section class="search-sec">
							<div class="container">
								<form action="#" method="post" novalidate="novalidate">
									<div class="row">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-3 col-md-3 col-sm-12 p-0">
													<input type="text" name="evento" class="form-control search-slt"
														   placeholder="Pesquisar eventos">
												</div>
												<div class="col-lg-3 col-md-3 col-sm-12 p-0">
													<input type="text" name="cidade" class="form-control search-slt"
														   placeholder="Pesquisar por cidade">
												</div>
												<div class="col-lg-3 col-md-3 col-sm-12 p-0">
													<select class="form-control search-slt" name="data" id="selectData">
														<option>Todas as datas</option>
														<option>Hoje</option>
														<option>Amanhã</option>
														<option>Esta semana</option>
														<option>Este mês</option>
													</select>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-12 p-0">
													<button type="button" class="btn btn-danger wrn-btn">Procurar
													</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</section>
					</div>
				</div>
			</div>
		</header>
		<section id="about" class="bg-primary">
			<div class="container">
				<div class="row">
					<div class="col offset-lg-8 mx-auto text-center">
						<h2 class="text-white section-heading">Uma plataforma para eventos corporativos</h2>
						<hr class="light my-4">
						<p class="text-faded mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis
							diam
							malesuada, iaculis dui sit amet, facilisis lacus.</p><!--<a class="btn btn-light btn-xl js-scroll-trigger"
                        role="button" href="#services">Get Started!</a>--></div>
				</div>
			</div>
		</section>
		<!--
		<section id="services">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">At Your Service</h2>
						<hr class="my-4">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 text-center">
						<div class="mx-auto service-box mt-5"><i class="fa fa-diamond fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-once="true"></i>
							<h3 class="mb-3">Sturdy Templates</h3>
							<p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 text-center">
						<div class="mx-auto service-box mt-5"><i class="fa fa-paper-plane fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="200" data-aos-once="true"></i>
							<h3 class="mb-3">Ready to Ship</h3>
							<p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 text-center">
						<div class="mx-auto service-box mt-5"><i class="fa fa-newspaper-o fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="400" data-aos-once="true"></i>
							<h3 class="mb-3">Up to Date</h3>
							<p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 text-center">
						<div class="mx-auto service-box mt-5"><i class="fa fa-heart fa-4x text-primary mb-3 sr-icons" data-aos="fade" data-aos-duration="200" data-aos-delay="600" data-aos-once="true"></i>
							<h3 class="mb-3">Made with Love</h3>
							<p class="text-muted mb-0">You have to make your websites with love these days!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		</section>
		-->
		<section id="portfolio" class="p-0">
			<div class="container-fluid p-0">
				<div class="row no-gutters popup-gallery">
					<div class="col-sm-6 col-lg-4"><a href="assets/img/fullsize/1.jpg" class="portfolio-box"><img
								class="img-fluid" src="assets/img/thumbnails/1.jpg">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-category text-faded"><span>Categoria</span></div>
									<div class="project-name"><span>Nome do Evento</span></div>
								</div>
							</div>
						</a></div>
					<div
						class="col-sm-6 col-lg-4"><a href="assets/img/fullsize/2.jpg" class="portfolio-box"><img
								class="img-fluid" src="assets/img/thumbnails/2.jpg">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-category text-faded"><span>Categoria</span></div>
									<div class="project-name"><span>Nome do Evento</span></div>
								</div>
							</div>
						</a></div>
					<div
						class="col-sm-6 col-lg-4"><a href="assets/img/fullsize/3.jpg" class="portfolio-box"><img
								class="img-fluid" src="assets/img/thumbnails/3.jpg">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-category text-faded"><span>Categoria</span></div>
									<div class="project-name"><span>Nome do Evento</span></div>
								</div>
							</div>
						</a></div>
					<div
						class="col-sm-6 col-lg-4"><a href="assets/img/fullsize/4.jpg" class="portfolio-box"><img
								class="img-fluid" src="assets/img/thumbnails/4.jpg">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-category text-faded"><span>Categoria</span></div>
									<div class="project-name"><span>Nome do Evento</span></div>
								</div>
							</div>
						</a></div>
					<div
						class="col-sm-6 col-lg-4"><a href="assets/img/fullsize/5.jpg" class="portfolio-box"><img
								class="img-fluid" src="assets/img/thumbnails/5.jpg">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-category text-faded"><span>Categoria</span></div>
									<div class="project-name"><span>Nome do Evento</span></div>
								</div>
							</div>
						</a></div>
					<div
						class="col-sm-6 col-lg-4"><a href="assets/img/fullsize/6.jpg" class="portfolio-box"><img
								class="img-fluid" src="assets/img/thumbnails/6.jpg">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-category text-faded"><span>Categoria</span></div>
									<div class="project-name"><span>Nome do Evento</span></div>
								</div>
							</div>
						</a></div>
				</div>
			</div>
		</section>
		<!--
		<section class="bg-dark text-white">
			<div class="container text-center">
				<h2 class="mb-4">Lorem Ipsum!</h2><a class="btn btn-light btn-xl sr-button" role="button" href="#" data-aos="zoom-in" data-aos-duration="400" data-aos-once="true">Download Now!</a></div>
		</section>
		-->
		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto text-center">
						<h2 class="section-heading">Entre em Contato</h2>
						<hr class="my-4">
						<p class="mb-5">Tem alguma dúvida sobre a plataforma? Fale conosco!</p>
					</div>
				</div>
				<div class="row">
					<div class="col-8 mx-auto">
						<form role="form">
							<div class="form-group float-label-control">
								<label for="">Nome completo</label>
								<input type="email" class="form-control" placeholder="Username">
							</div>
							<div class="form-group float-label-control">
								<label for="">Assunto</label>
								<input type="password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group float-label-control">
								<label for="">Mensagem</label>
								<textarea class="form-control" placeholder="Textarea" rows="1"></textarea>
							</div>
							<div class="btn-submit" style="text-align: center;">
								<button type="submit" class="btn btn-primary" style="width: 200px;">Enviar</button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</section>
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