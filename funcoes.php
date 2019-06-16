<?php

function incluiSidebarEvento($menuAtivo, $nomeEvento = "Nome Evento"){
	$links = Array();
	for($i = 0; $i < 4; $i++){
		$links[$i]['classe'] = "nav-item";
	}
	$links[$menuAtivo]['classe'] = "nav-item active";

	$string =  '<div class="sidebar" data-color="purple" data-background-color="white">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                OnTrack
            </a>
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                Painel do Evento
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
            <li class="' . $links[0]["classe"] . '">
                    <a class="nav-link" href="dashboard.php">
                        <i class="material-icons">dashboard</i>
                        <p>' . $nomeEvento .'</p>
                    </a>
                </li>
                <li class="' . $links[1]["classe"] . '">
                    <a class="nav-link" href="gerenciar-participantes.php">
                        <i class="material-icons">dashboard</i>
                        <p>Gerenciar Participantes</p>
                    </a>
                </li>
                <li class="' . $links[2]["classe"] . '">
                    <a class="nav-link" href="gerenciar-palestrantes.php">
                        <i class="material-icons">dashboard</i>
                        <p>Gerenciar Palestrantes</p>
                    </a>
                </li>
                <li class="' . $links[3]["classe"] . '">
                    <a class="nav-link" href="index.html">
                        <i class="material-icons">content_paste</i>
                        <p>Logout</p>
                    </a>
                </li>
                <!-- your sidebar here -->
            </ul>
        </div>
    </div>';

	return $string;
}

function incluiNavBarEvento($nomeEvento = "Nome Evento"){
	return '<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="pagina-evento-dashboard.php">' . $nomeEvento . '</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">
                                <i class="material-icons">keyboard_backspace</i> Voltar aos meus eventos
                            </a>
                        </li>
                        <!-- your navbar here -->
                    </ul>
                </div>
            </div>
        </nav>';
}