<?php

require_once("funcoes.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>OnTrack</title>

    <link rel="stylesheet" href="assets/vendor/fontawesome-free/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/navbar.css" type="text/css">
    <link rel="stylesheet" href="assets/css/snippet.css" type="text/css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/updates.css">
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
    <?= incluiSidebarLogado(); ?>

    <div id="content-wrapper">
        <header class="masthead text-center text-white d-flex"
                style="background-image: url('assets/img/header.jpg');">
            <div class="container my-auto">
                <div class="row" style="position: absolute; top: 20px; right: 30px;">
                    <div class="col-lg-12" style="right:0;">
                        <strong>OnTrack Points: 236 </strong>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <h1 class="text-uppercase"><strong>Empreenda Poços</strong></h1>
                        <hr>
                    </div>
                </div>
            </div>
        </header>

        <section id="read-qrCode" style="background: white;">
            <div class="container">
                <div class="row">
                    <div class="col offset-lg-8 mx-auto text-center">
                        <strong>Faça uma parada durante sua trilha e ganhe OnTrack Points!</strong>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col offset-lg-8 mx-auto text-center">
                        <button class="btn btn-primary" id="btnScanQr" data-toggle="modal" data-target="#qrModal">
                            Escanear
                            código
                        </button>
                    </div>
                </div>
            </div>

        </section>

        <section id="financiamento" class="bg-primary">
            <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <h4 style="color: white;">Minha trilha</h4>
                            <ul class="timeline">
                                <li>
                                    <div class="linkSnippet">08:00</div>
                                    <div class="textoSnipper">
                                        <p>Abertura do evento</p>
                                        Local: Salão II
                                    </div>
                                </li>
                                <li>
                                    <div class="linkSnippet">12:00</div>
                                    <div class="textoSnipper">
                                        <p>Almoço</p>
                                        Local: Refeitório
                                    </div>
                                </li>
                                <li>
                                    <div class="linkSnippet">14:00</div>
                                    <div class="textoSnipper">
                                        <p>Palestra Barack Obama</p>
                                        Local: Auditório IV
                                    </div>
                                </li>
                                <li>
                                    <div class="linkSnippet">20:00</div>
                                    <div class="textoSnipper">
                                        <p>Encerramento do evento</p>
                                        Local: Sala II
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <a href="monteSuaTrilha.php">
                            <button type="submit" class="btn btn-primary botaoAlteraTrilha">Alterar minha trilha</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="updates" style="background: white;">
            <div class="container">
                <div class="row">
                    <div class="col offset-lg-8 mx-auto text-center">
                        <strong>Fique por dentro do que está acontecendo!</strong>
                    </div>
                </div>
                <br>
                <div class="row">

                    <div class="col-md-4 col-12 text-center" style="padding: 10px;">
                        <!--Simple Card with Status Highlight-->
                        <div class="block-update-card">
                            <div class="v-status">
                            </div>
                            <div class="update-card-body">
                                <h4>Organização - 14:25</h4>
                                <p>Acontecerá agora o anúncio dos resultados da competição</p>
                            </div>
                        </div>
                    </div>
            </section>

            <!--<section id="financiamento" class="bg-primary">
                <div class="container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <h4 style="color: white;">Minha trilha</h4>
                                <ul class="timeline"></ul>
                            </div>
                            <div class="update-card-body">
                                <h4>Patrocinador X - 13:58</h4>
                                <p>Ao final do evento, teremos uma surpresa especial, não perca!</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <a href="monteSuaTrilha.php"><button type="button" class="btn btn-primary botaoAlteraTrilha">Alterar minha trilha</button></a>
                        </div>
                    </div>

                </div>
            </div>

        </section>-->
    </div>

</div>

<!-- QR Modal -->
<div id="qrModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Escanear QR Code</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" style="align-content: center; text-align: center;">
                <video id="preview" style="max-height: 60% !important;"></video>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
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
<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<script type="text/javascript">

    $(document).ready(function () {

        let scanner = new Instascan.Scanner({video: document.getElementById('preview')});

        scanner.addListener('scan', function (content) {

            var json = JSON.parse(content)[0];

            console.log(json);

            if (json.hasOwnProperty('idAtividade')) {
                console.log('Stand');
            } else {
                console.log('Participante');
            }

            alert("Código lido.");

        });

        $("#btnScanQr").click(function () {
            Instascan.Camera.getCameras().then(function (cameras) {

                if (cameras.length > 1) {
                    scanner.start(cameras[1]);

                } else if (cameras.length > 0) {
                    scanner.start(cameras[0]);

                } else {
                    console.error('No cameras found.');
                }

            }).catch(function (e) {
                console.error(e);
            });
        });

        $('#qrModal').on('hidden.bs.modal', function (e) {
            scanner.stop();
        });
    });

    </script>
    <script>
        let timeline = document.querySelector(".timeline");
        if (localStorage.getItem("trilha") === null) {
            console.log("entrou");
            let minhaTrilha = [
                {
                    horario: "09:00",
                    atividade: "Abertura do evento",
                    local: "Salão II"
                },
                {
                    horario: "12:00",
                    atividade: "Almoço",
                    local: "Refeitório"
                },
                {
                    horario: "14:00",
                    atividade: "Palestra Barack Obama",
                    local: "Auditório IV"
                },
                {
                    horario: "20:00",
                    atividade: "Encerramento do evento",
                    local: "Salão II"
                },
            ];
            localStorage.setItem("trilha", JSON.stringify(minhaTrilha));
        }
        console.log(localStorage.getItem("trilha"));
        let obj = JSON.parse(localStorage.getItem("trilha"));
        let string = "";
        for(let index in obj){
            string += "<li>";
            string += "<div class='linkSnippet'>" + obj[index].horario + "</div>";
            string += "<div class='textoSnipper'>";
            string += "<p>" + obj[index].atividade + "</p>";
            string += "Local: " + obj[index].local;
            string += "</div>";
            string += "</li>";
        }

        timeline.innerHTML = string;


    </script>

</body>

</html>