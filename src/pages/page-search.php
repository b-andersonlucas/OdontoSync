<?php
session_start(); 
$ps = true;
$pd = true; 
include('../assets/php/fetchs/authenticate-priv.php');
?>
<!DOCTYPE html>
<html style="background: #f6f6f6;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pesquisar Cliente | OdontoSync</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="../assets/css/forms-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/css/pages-client-styles.css">
    <link rel="stylesheet" href="../assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="../assets/css/Search-Input-Responsive-with-Icon.css">
    <link rel="stylesheet" href="../assets/css/smoothproducts.css">
    <link rel="shortcut icon" href="../assets/img/favicon-96x96.png" type="image/x-icon">
</head>

<body style="background: #f6f6f6;">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top text-white bg-white clean-navbar">
        <div class="container"><a class="navbar-brand text-white logo" href="page-admin.php">OdontoSync</a><button data-toggle="collapse" class="navbar-toggler text-white" data-target="#navcol-1"><span class="text-white sr-only">Toggle navigation</span><span class="navbar-toggler-icon text-white"></span></button>
            <div class="collapse navbar-collapse text-white" id="navcol-1">
                <ul class="nav navbar-nav text-white ml-auto">
                    <li class="nav-item text-white"><a class="nav-link text-white" href="page-admin.php">Pág. Admin</a></li>
                    <li class="nav-item text-white"><a class="nav-link text-white" href="#search-section">Pesquisar</a></li>
                    <li class="nav-item text-white"><a class="nav-link text-white" href="#view-client">Visualizar dados</a></li>
                    <li class="nav-item text-white"><a class="nav-link text-white" href="#service-return">info. retorno</a></li>
                    <li class="nav-item text-white"><a class="nav-link text-white" href="#client-historic">HISTÓRICO</a></li>
                    <li class="nav-item"><a class="nav-link btn bg-white btn-acess" href="../assets/php/logout.php">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page payment-page">
        <section id="search-section" class="clean-block payment-form dark" style="padding-bottom: 70px;">
            <div class="container">
                <div class="block-heading">
                    <h1 class="title-client">Pesquisar Cliente</h1>
                    <form style="border-style: none;">
                        <div class="form-row padMar">
                            <div class="col padMar">
                                <div class="input-group">
                                    <div class="input-group-prepend"></div><input id="pesquisarUsuario" class="form-control autocomplete" type="text" placeholder="Pesquisar">
                                    <div class="input-group-append"><button id="btn_pesquisar" class="btn btn-primary btn-main" type="button"><i class="fa fa-search"></i></button></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="text-left" style="background: white;border-radius: 10px;padding-top: 15px;padding-bottom: 15px;padding-right: 12px;padding-left: 12px;">
                    <h3 class="title-table" style="margin-bottom: 22px;">Resultado da pesquisa</h3>
                    <div class="table-responsive">
                        <table class="table" id="tabela">
                            <thead>
                                <tr>
                                    <th style="width: 350px;">Nome</th>
                                    <th>Email<br></th>
                                    <th>Visualizar dados</th>
                                </tr>
                            </thead>
                            <tbody id="tablePesquisa">
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block payment-form dark" style="padding-top: 7px;">
            <div class="block-heading" style="padding-top: 5px;padding-right: 12px;padding-left: 12px;">
                <h1 id="view-cliente" class="title-client">Visualizar Dados</h1>
                <form style="border-style: none;">
                    <div class="form-row padMar">
                        <div class="col padMar">
                            <div class="input-group">
                                <div class="input-group-prepend"></div><input id="inputEmail"  class="form-control" type="text" placeholder="E-mail do cliente">
                                <div class="input-group-append"><button id="btn_visualizar" class="btn btn-primary btn-main" type="button"><i class="fa fa-arrow-right"></i></button></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="container">
                <div class="text-left" style="background: #ffffff;border-style: none;border-radius: 10px;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 15px;">
                    <div class="row">
                        <div class="col">
                            <h3 class="d-flex justify-content-between title-table" style="margin-bottom: 22px;">Dados Gerais</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="tableDados" class="table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th id="nomePessoa"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>E-mail</td>
                                    <td id="emailPessoa"></td>
                                </tr>
                                
                                <tr>
                                    <td>Data de nascimento</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Telefone</td>
                                    <td id="telPessoa"></td>
                                </tr>
                                <tr>
                                    <td>Cidade/UF</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section id="service-return" class="clean-block payment-form dark" style="padding-top: 7px;padding-right: 0px;padding-bottom: 65px;">
            <div class="container">
                <div class="text-left" style="background: #ffffff;border-style: none;border-radius: 10px;padding-top: 10px;padding-right: 10px;padding-bottom: 32px;padding-left: 15px;">
                    <h3 class="title-table d-flex justify-content-between" style="margin-bottom: 22px;">Informar Retorno</h3>
                    <div>
                        <form class="form-default" style="padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px;">
                            <div class="form-group"><label>Nome</label><input class="form-control" type="text" id="nomeCliente"></div>
                            <div class="form-group"><label>Telefone</label><input class="form-control" type="tel" id="telefoneCliente"></div>
                            <div class="form-group"><label>Dia de retorno</label><input class="form-control" type="date" id="diaRetorno"></div>
                            <div class="form-group"><label>Mensagem</label><textarea class="form-control" id="msgRetorno"></textarea></div>
                            <div class="form-row">
                                <div class="col text-right"><a class="btn btn-primary btn-main" id="link_enviar_msg" onclick="enviar_msg_retorno()" target="blank">Enviar mensagem</a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section id="client-historic" class="clean-block payment-form dark" style="padding-top: 7px;">
            <div class="container">
                <div class="text-left" style="background: #ffffff;border-style: none;border-radius: 10px;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 15px;">
                    <div class="row">
                        <div class="col">
                            <h3 class="d-flex justify-content-between title-table" style="margin-bottom: 22px;">Histórico</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Data</th>
                                    <th>Horário</th>
                                    <th>Procedimento<br></th>
                                    <th>Dentista</th>
                                </tr>
                            </thead>
                            <tbody id="tableHistorico">
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer-basic">
        <ul class="list-inline">
            <li class="list-inline-item"></li>
            <li class="list-inline-item"><a href="../" style="font-size: 12px;">Inicio</a></li>
            <li class="list-inline-item" style="font-size: 10px;"><a href="about-us.html" style="font-size: 12px;">Sobre</a></li>
            <li class="list-inline-item" style="font-size: 10px;"><a href="contact-us.html" style="font-size: 12px;">Contato</a></li>
            <li class="list-inline-item" style="font-size: 10px;"><a href="https://github.com/b-andersonlucas/OdontoSync" target="blank" style="font-size: 12px;">Github</a></li>
            <li class="list-inline-item" style="font-size: 10px;"><a href="https://github.com/b-andersonlucas/OdontoSync/issues" target="blank" style="font-size: 12px;">Reportar Bug</a></li>
        </ul>
        <p class="copyright">OdontoSync© 2021</p>
    </footer>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="../assets/js/smoothproducts.min.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="https://kit.fontawesome.com/1404112e2c.js" crossorigin="anonymous"></script>
    <script src="../assets/js/enviarMsg.js"></script>
    <script src="../assets/js/page-search-scripts.js"></script>
    <script src="../assets/js/visualizarDados.js"></script>
</body>

</html>