<?php

require_once("funcoes.php");

?>
<!doctype html>
<html lang="en">

<head>
    <title>Painel do Organizador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
</head>

<body>
<div class="wrapper ">
    <?= incluiSidebarEvento(2); ?>
    <div class="main-panel">
        <!-- Navbar -->
        <?= incluiNavBarEvento(); ?>
        <!-- End Navbar -->
        <div class="content">
            <div class="row">
                <div class="col-3">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Confirmados</p>
                            <h3 class="card-title">785</h3>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Pendentes</p>
                            <h3 class="card-title">63</h3>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Preço médio por palestrante</p>
                            <h3 class="card-title">R$875,85
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Preço total pago</p>
                            <h3 class="card-title">R$7535,85
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="text-align: right;">
                    <button class="btn btn-primary"><i class="material-icons">person_add</i>  Cadastrar Novo</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">Confirmados</h4>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover">
                                <thead class="text-success">
                                <th>Nome</th>
                                <th>Nome da Palestra</th>
                                <th>Valor pago</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Dakota Rice</td>
                                    <td>Lorem Ipsum sit dolor</td>
                                    <td>$6,738</td>
                                </tr>
                                <tr>
                                    <td>Minerva Hooper</td>
                                    <td>Lorem Ipsum sit dolor</td>
                                    <td>$3,789</td>
                                </tr>
                                <tr>
                                    <td>Sage Rodriguez</td>
                                    <td>Lorem Ipsum sit dolor</td>
                                    <td>$5,142</td>
                                </tr>
                                <tr>
                                    <td>Philip Chaney</td>
                                    <td>Lorem Ipsum sit dolor</td>
                                    <td>$3,735</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-header card-header-warning">
                            <h4 class="card-title">Pendentes</h4>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                <th>Nome</th>
                                <th>Nome da Palestra</th>
                                <th>Valor proposto</th>
                                <th></th>
                                <th></th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Dakota Rice</td>
                                    <td>Lorem Ipsum sit dolor</td>
                                    <td>$6,738</td>
                                    <td><i class="material-icons">done</i></td>
                                    <td><i class="material-icons">close</i></td>
                                </tr>
                                <tr>
                                    <td>Minerva Hooper</td>
                                    <td>Lorem Ipsum sit dolor</td>
                                    <td>$3,789</td>
                                    <td><i class="material-icons">done</i></td>
                                    <td><i class="material-icons">close</i></td>
                                </tr>
                                <tr>
                                    <td>Sage Rodriguez</td>
                                    <td>Lorem Ipsum sit dolor</td>
                                    <td>$5,142</td>
                                    <td><i class="material-icons" alt="Confirmar">done</i></td>
                                    <td><i class="material-icons" alt="Cancelar">close</i></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                OnTrack
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- your footer here -->
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap-material-design.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Plugin for the momentJs  -->
<script src="assets/js/plugins/moment.min.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="assets/js/plugins/sweetalert2.js"></script>
<!-- Forms Validations Plugin -->
<script src="assets/js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="assets/js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="assets/js/plugins/jquery-jvectormap.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="assets/js/plugins/arrive.min.js"></script>
<!-- Chartist JS -->
<script src="assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
</body>

</html>