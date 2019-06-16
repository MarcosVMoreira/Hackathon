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
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
	<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
	<!-- CSS -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.3/build/css/alertify.min.css"/>
	<!-- Default theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.3/build/css/themes/default.min.css"/>
</head>

<body id="page-top" class="sidebar-toggled">
<div class="mobile-menu">
	<ul class="bottom-navbar-nav">
		<li class="bottom-nav-item active">
			<a href="index.php" class="bottom-nav-link">
				<i class="fas fa-fw fa-home"></i>
				<span>Início</span>
			</a>
		</li>
		<li class="bottom-nav-item">
			<a data-toggle="modal" data-target="#loginModal" class="bottom-nav-link">
				<i class="fas fa-fw fa-handshake"></i>
				<span>Login</span>
			</a>
		</li>
		<li class="bottom-nav-item">
			<a data-toggle="modal" data-target="#cadastroModal" class="bottom-nav-link">
				<i class="fas fa-fw fa-handshake"></i>
				<span>Cadastrar-se</span>
			</a>
		</li>
		<li class="bottom-nav-item">
			<a href="cadastra-evento.html" class="bottom-nav-link">
				<i class="fas fa-fw fa-handshake"></i>
				<span>Publicar</span>
			</a>
		</li>

	</ul>
</div>
<div id="wrapper">
	<ul class="sidebar toggled navbar-nav" style="background: #f50136;">
		<li class="nav-item active">
			<a class="nav-link" href="#page-top">
				<i class="fas fa-fw fa-home"></i>
				<span>Início</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="modal" data-target="#loginModal">
				<i class="fas fa-fw fa-handshake"></i>
				<span>Login</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="modal" data-target="#cadastroModal">
				<i class="fas fa-fw fa-handshake"></i>
				<span>Cadastrar-se</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="cadastra-evento.html">
				<i class="fas fa-fw fa-handshake"></i>
				<span>Publicar evento</span>
			</a>
		</li>
	</ul>

</div>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: none;">
				<div class="row">
					<div class="col-12">
						<button type="button" style="height: 10px;" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<h5 class="modal-title" id="exampleModalLongTitle" style="font-size: 1.5em;" class="text-align:right;">Login</h5>
					</div>
				</div>
			</div>
			<div class="modal-body">
				...
			</div>
		</div>
	</div>
</div>


<section id="financiamento" class="bg-primary">
	<div class="container">
		<div class="row">
			<div class="col offset-lg-8 mx-auto text-center">
				<h2 class="text-white section-heading">Monte sua Trilha</h2>
				<hr class="light my-4">
				<div class="col-8 offset-2 horario-evento">08:00</div>
				<div class="col-8 offset-2 botaoEvento" id="evento1">
					Empreenda Poços<br>
					Sala II<br>
					Status: <b>Acontecendo</b>
				</div>
				<div class="col-8 offset-2 botaoEvento" id="evento2">
					Palestra Obama<br>
					Sala I<br>
					Status: <b>Acontecendo</b>
				</div>

				<div class="col-8 offset-2 horario-evento">10:00</div>
				<div class="col-8 offset-2 botaoEvento" id="evento3">
					Palestra - meio ambiente<br>
					Sala II<br>
					Status: <b>Iniciando em 1h</b>
				</div>
				<div class="col-8 offset-2 botaoEvento" id="evento4">
					Palestra - 5G<br>
					Sala I<br>
					Status: <b>Iniciando em 1h</b>
				</div>
				<div class="col-8 offset-2 botaoEvento" id="evento5">
					Palestra - Geradores de energia<br>
					Sala III<br>
					Status: <b>Iniciando em 1h</b>
				</div>

				<div class="col-8 offset-2 horario-evento">12:00</div>
				<div class="col-8 offset-2 botaoEvento" id="evento6">
					Almoço<br>
					Refeitório<br>
					Status: <b>Iniciando em 3h</b>
				</div>

				<div class="col-8 offset-2 horario-evento">14:00</div>
				<div class="col-8 offset-2 botaoEvento" id="evento7">
					Mini curso - Redes Neurais<br>
					Sala II<br>
					Status: <b>ESGOTADO</b>
				</div>

				<div class="col-8 offset-2 horario-evento">18:00</div>
				<div class="col-8 offset-2 botaoEvento" id="evento8">
					Mini curso - Industria 4.0<br>
					Sala II<br>
					Status: <b>Últimas vagas!</b>
				</div>
				<br>
				<a href="pagina-durante-evento.html"><button type="button" class="btn btn-primary btnSalvarTrilha">Voltar para página do evento</button></a>
				<button type="button" class="btn btn-primary btnSalvarTrilha">Salvar</button>

			</div>
		</div>
	</div>
</section>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
<script src="assets/js/floatLabels.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.3/build/alertify.min.js"></script>
<script src="assets/js/script.min.js"></script>
<script>
	let evento1 = $("#evento1");
    let evento2 = $("#evento2");
    let evento3 = $("#evento3");
    let evento4 = $("#evento4");
    let evento5 = $("#evento5");
    let evento6 = $("#evento6");
    let evento7 = $("#evento7");
    let evento8 = $("#evento8");
    let btnSalvarTrilha = $(".btnSalvarTrilha");
    let selecionados = [0,0,0,0,0,0,0,0];

    evento1.on("click", function(){
        if(selecionados[0] == 0){
            selecionados[0] = 1;
            evento1.addClass("botaoEventoSelecionado");
		}else{
            selecionados[0] = 0;
            evento1.removeClass("botaoEventoSelecionado");
		}

        evento2.removeClass("botaoEventoSelecionado");
        selecionados[1] = 0;
    });
    evento2.on("click", function(){
        evento1.removeClass("botaoEventoSelecionado");
        if(selecionados[1] == 0){
            selecionados[1] = 1;
            evento2.addClass("botaoEventoSelecionado");
        }else{
            selecionados[1] = 0;
            evento2.removeClass("botaoEventoSelecionado");
        }
        selecionados[0] = 0;
    });
    evento3.on("click", function(){
        if(selecionados[2] == 0){
            selecionados[2] = 1;
            evento3.addClass("botaoEventoSelecionado");
        }else{
            selecionados[2] = 0;
            evento3.removeClass("botaoEventoSelecionado");
        }
        evento4.removeClass("botaoEventoSelecionado");
        evento5.removeClass("botaoEventoSelecionado");
        selecionados[3] = 0;
        selecionados[4] = 0;
    });
    evento4.on("click", function(){
        if(selecionados[3] == 0){
            selecionados[3] = 1;
            evento4.addClass("botaoEventoSelecionado");
        }else{
            selecionados[3] = 0;
            evento4.removeClass("botaoEventoSelecionado");
        }
        evento3.removeClass("botaoEventoSelecionado");
        evento5.removeClass("botaoEventoSelecionado");
        selecionados[2] = 0;
        selecionados[4] = 0;
    });
    evento5.on("click", function(){
        evento3.removeClass("botaoEventoSelecionado");
        selecionados[2] = 0;
        evento4.removeClass("botaoEventoSelecionado");
        selecionados[3] = 0;
        if(selecionados[4] == 0){
            selecionados[4] = 1;
            evento5.addClass("botaoEventoSelecionado");
        }else{
            selecionados[4] = 0;
            evento5.removeClass("botaoEventoSelecionado");
        }
    });

    evento6.on("click", function(){
        if(selecionados[5] == 0){
            selecionados[5] = 1;
            evento6.addClass("botaoEventoSelecionado");
        }else{
            selecionados[5] = 0;
            evento6.removeClass("botaoEventoSelecionado");
        }
    });
    evento7.on("click", function(){
        if(selecionados[6] == 0){
            selecionados[6] = 1;
            evento7.addClass("botaoEventoSelecionado");
        }else{
            selecionados[6] = 0;
            evento7.removeClass("botaoEventoSelecionado");
        }
    });
    evento8.on("click", function(){
        if(selecionados[7] == 0){
            selecionados[7] = 1;
            evento8.addClass("botaoEventoSelecionado");
        }else{
            selecionados[7] = 0;
            evento8.removeClass("botaoEventoSelecionado");
        }
    });
    btnSalvarTrilha.on("click", function(){
        let minhaTrilha = [];
        let objAtual;
        for(let i = 0; i < 8; i++){
            if(i == 0 && selecionados[i] == 1){
                objAtual = {
                    horario: "08:00",
                    atividade: "Empreenda Poços",
                    local: "Salão II"
                };
                minhaTrilha.push(objAtual);
            }else if(i == 1 && selecionados[i] == 1){
                objAtual = {
                    horario: "08:00",
                    atividade: "Palestra Obama",
                    local: "Salão I"
                };
                minhaTrilha.push(objAtual);
            }else if(i == 2 && selecionados[i] == 1){
                objAtual = {
                    horario: "10:00",
                    atividade: "Palestra - Meio Ambiente",
                    local: "Salão I"
                };
                minhaTrilha.push(objAtual);
            }else if(i == 3 && selecionados[i] == 1){
                objAtual = {
                    horario: "10:00",
                    atividade: "Palestra - 5G",
                    local: "Salão II"
                };
                minhaTrilha.push(objAtual);
            }else if(i == 4 && selecionados[i] == 1){
                objAtual = {
                    horario: "10:00",
                    atividade: "Palestra - Geradores de energia",
                    local: "Salão III"
                };
                minhaTrilha.push(objAtual);
            }else if(i == 5 && selecionados[i] == 1){
                objAtual = {
                    horario: "12:00",
                    atividade: "Almoço",
                    local: "Refeitório"
                };
                minhaTrilha.push(objAtual);
            }else if(i == 6 && selecionados[i] == 1){
                objAtual = {
                    horario: "14:00",
                    atividade: "Mini curso - Redes Neurais",
                    local: "Salão II"
                };
                minhaTrilha.push(objAtual);
            }else if(i == 7 && selecionados[i] == 1){
                objAtual = {
                    horario: "18:00",
                    atividade: "Palestra - Industria 4.0",
                    local: "Salão II"
                };
                minhaTrilha.push(objAtual);
            }
        }
        localStorage.setItem("trilha", JSON.stringify(minhaTrilha));
        alertify.success('Trilha Salva com Sucesso!');

	});

</script>
</body>

</html>