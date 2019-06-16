<?php

function incluiSidebarEvento($menuAtivo, $nomeEvento = "Empreenda Poços"){
	$links = Array();
	for($i = 0; $i < 5; $i++){
		$links[$i]['classe'] = "nav-item";
	}
	$links[$menuAtivo]['classe'] = "nav-item active";

	$string =  '<div class="sidebar" data-color="purple" data-background-color="white">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
        <div class="logo">
            <a href="#" class="simple-text logo-mini">
                OnTrack
            </a>
            <a href="#" class="simple-text logo-normal">
                Painel do Evento
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
            <li class="' . $links[0]["classe"] . '">
                    <a class="nav-link" href="pagina-evento-dashboard.php">
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
                    <a class="nav-link" href="gerenciar-palestrantes.php">
                        <i class="material-icons">dashboard</i>
                        <p>Cadastrar Stand</p>
                    </a>
                </li>
                <li class="' . $links[4]["classe"] . '">
                    <a class="nav-link" href="index.php">
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

function incluiNavBarEvento($nomeEvento = "Empreenda Poços"){
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

function incluiSidebarMobileNaoLogado(){
	return '<div class="mobile-menu">
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
    </ul>
</div>';

}

function incluiSidebarMobileLogado(){
	return '<div class="mobile-menu">
    <ul class="bottom-navbar-nav">
        <li class="bottom-nav-item active">
            <a href="index.php" class="bottom-nav-link">
                <i class="fas fa-fw fa-home"></i>
                <span>Início</span>
            </a>
        </li>
        <li class="bottom-nav-item">
            <a href="dashboard.php" class="bottom-nav-link">
                <i class="fas fa-fw fa-handshake"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="bottom-nav-item">
            <a href="meusEventos.php" class="bottom-nav-link">
                <i class="fas fa-fw fa-handshake"></i>
                <span>Meus Eventos</span>
            </a>
        </li>
    </ul>
</div>';

}

function incluiSidebarNaoLogado(){
	return '<ul class="sidebar toggled navbar-nav" style="background: #f50136;">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-home"></i>
                <span>Início</span>
            </a>
        </li>
        <li class="nav-item" style="cursor:pointer">
            <a class="nav-link" data-toggle="modal" data-target="#loginModal">
               <i class="fas fa-user"></i>
                <span>Login</span>
            </a>
        </li>
        <li class="nav-item" style="cursor:pointer">
            <a class="nav-link" data-toggle="modal" data-target="#cadastroModal">
                <i class="fas fa-user-plus"></i>
                <span>Cadastrar-se</span>
            </a>
        </li>
    </ul>';
}

function incluiSidebarLogado(){
	return '<ul class="sidebar toggled navbar-nav" style="background: #f50136;">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-home"></i>
                <span>Início</span>
            </a>
        </li>
        <li class="nav-item" style="cursor:pointer">
            <a class="nav-link" href="dashboard.php">
               <i class="fas fa-user"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item" style="cursor:pointer">
            <a class="nav-link" href="meusEventos.php">
                <i class="fas fa-user-plus"></i>
                <span>Meus Eventos</span>
            </a>
        </li>
    </ul>';
}