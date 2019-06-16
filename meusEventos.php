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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
</head>

<body id="page-top" class="sidebar-toggled">
        <?= incluiSidebarMobileLogado(); ?>
            <div id="wrapper">
                <?= incluiSidebarLogado(); ?>
        
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
                    <h2 class="text-white section-heading">Seus eventos</h2>
                    <hr class="light my-4">
                    <a href="pagina-durante-evento.php">
                        <div class="col-8 offset-2 botaoEvento">
                            Empreenda Poços<br>
                            Data: 02/11/2019<br>
                            Status: <b>Acontecendo</b>
                        </div>
                    </a>
                    <br>
                    <a href="#">
                        <div class="col-8 offset-2 botaoEvento">
                            De Bike em Poços<br>
                            Data: 07/11/2019<br>
                            Status: <b>Em 5 dias</b>
                        </div>
                    </a>
                    <br>

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
    <script src="assets/js/script.min.js"></script>
</body>

</html>