<?php
session_start();
$ps = true; // $ps para secretária
$pd = true; // $pd para dentista
include('../assets/php/fetchs/authenticate-priv.php');
include('../assets/php/fetchs/get_dentista.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <tAdministitle>Página Administrador | OdontoSync</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="../assets/css/forms-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/css/pages-client-styles.css">
    <link rel="stylesheet" href="../assets/css/Search-Input-Responsive-with-Icon.css">
    <link rel="stylesheet" href="../assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="../assets/css/smoothproducts.css">
    <link rel="shortcut icon" href="../assets/img/favicon-96x96.png" type="image/x-icon">
</head>

<body style="background-color: #f6f6f6;"><nav class="navbar navbar-light navbar-expand-lg fixed-top text-white bg-white clean-navbar">
        <div class="container"><a class="navbar-brand text-white logo" href="page-admin.php">OdontoSync</a><button data-toggle="collapse" class="navbar-toggler text-white" data-target="#navcol-1"><span class="text-white sr-only">Toggle navigation</span><span class="navbar-toggler-icon text-white"></span></button>
            <div class="collapse navbar-collapse text-white" id="navcol-1">
                <ul class="nav navbar-nav text-white ml-auto">
                    <li class="nav-item text-white"><a class="nav-link text-white" href="#service-calendar">Atendimento</a></li>
                    <li class="nav-item text-white"><a class="nav-link text-white" href="#procedure">Procedimento</a></li>
                    <li class="nav-item text-white"><a class="nav-link text-white" href="#register-user">Cadastro</a></li>
                    <li class="nav-item"><a class="nav-link btn bg-white btn-acess" href="../assets/php/logout.php">Sair</a></li> 
                </ul>
            </div>
        </div>
    </nav>
    <main class="page">
        <section id="service-calendar" class="clean-block payment-form dark" style="padding-bottom: 50px;">
            <div class="container">
                <div class="block-heading" style="margin-bottom: 40px;">
                    <h2 class="d-flex justify-content-between title-client" style="padding-right: 12px; ">Olá, Administrador <?php echo $_SESSION["primeiroNome"]?><a href="./page-search.php" style="font-size: 18px;">Pesquisar cliente&nbsp;<i class="fa fa-long-arrow-right"></i></a></h2>
                </div>
                <div class="text-left" style="background: #ffffff;border-style: none;border-radius: 10px;padding-top: 10px;padding-right: 10px;padding-bottom: 32px;padding-left: 15px;margin-bottom: 60px;">
                    <h3 class="title-table" style="margin-bottom: 22px;">Agendamentos</h3>
                    <div>
                        <form class="form-default" style="width: 100%;min-width: 250px;max-width: none;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px;">
                            <div class="form-row d-flex justify-content-between" style="padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px;">
                                <div class="col col-md-3">
                                    <div class="form-group"><label>Dia de Atendimento</label><input id="dia_atend" class="form-control" type="date"></div>
                                </div>
                                <div class="col d-flex justify-content-end" style="height: 40px;"><button id="btn_atend" class="btn btn-primary btn-main" type="button">Visualizar</button></div>
                            </div>
                        </form>
                        <ul class="list-group" id = "listaClientes">
                            <li class="list-group-item"><span>-</span></li>
                        </ul>
                    </div>
                </div>
                <div class="text-left" style="background: #ffffff;border-style: none;border-radius: 10px;padding-top: 10px;padding-right: 10px;padding-bottom: 32px;padding-left: 15px;">
                    <h3 class="title-table" style="margin-bottom: 22px;">Calendário de Atendimento</h3>
                    <div>
                        <form class="form-default" method="POST" action="../assets/php/process_admin.php" name="schedule" style="padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px;">
                            <div class="form-group"><label>Dia de Atendimento</label><input class="form-control" type="date" name="serviceDay"></div>
                            <div class="form-group"><label>Inicio do expediente</label><input class="form-control" type="time" name="starHour"></div>
                            <div class="form-group"><label>Fim do expediente</label><input class="form-control" type="time" name="endHour"></div>
                            <div class="form-group"><label>Nº de Clientes</label><input class="form-control" type="number" name="numClients"></div>
                            <div class="form-group"><label>Dentista</label><select class="form-control" name="dentist">
                                <optgroupS>
                                    <option value="12" selected="">Selecione o dentista</option>
                                    <?php echo getDentistas(); ?>
                                </optgroup>
                            </select></div>
                            <div class="form-row">
                                <div class="col d-flex justify-content-end"><button class="btn btn-primary btn-main" type="submit" name="cadsHour">Cadastrar Horário</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section id="procedure" class="clean-block payment-form dark" style="padding-top: 7px;padding-right: 0px;padding-bottom: 65px;">
            <div class="container">
                <div class="text-left" style="background: #ffffff;border-style: none;border-radius: 10px;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 15px;">
                    <h3 class="title-table" style="margin-bottom: 22px;">Cadastrar Consulta</h3>
                    <div>
                        
                        <form class="form-default" method="POST" action="../assets/php/process_admin.php " style="padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px;">
                            <div class="form-group"><label>Nome</label><input class="form-control" type="text" name="cli_name"></div>
                            <div class="form-group"><label>E-mail</label><input class="form-control" type="email" name="cli_email"></div>
                            <div class="form-group"><label>Procedimento</label><input class="form-control" type="text" name="procedure"></div>
                            <div class="form-group"><label>Data</label><input class="form-control" type="date" name="day"></div>
                            <div class="form-group"><label>Hora</label><input class="form-control" type="time" name="hour"></div>
                            <div class="form-group"><label>Dentista</label><select class="form-control" name="dentista">
                                    <optgroup>
                                        <option value="12" selected="">Selecione o dentista</option>
                                        <?php echo getDentistas(); ?>
                                    </optgroup>
                                </select></div>
                            <div class="form-row">
                                <div class="col text-right"><button class="btn btn-primary btn-main" type="submit" name="medRecord">Cadastrar consulta</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block payment-form dark" style="padding-top: 7px;padding-right: 0px;padding-bottom: 60px;">
            <div class="container">
                <div class="text-left" id="register-user" style="background: white;border-radius: 10px;padding-top: 15px;padding-bottom: 32px;padding-right: 12px;padding-left: 12px;">
                    <h3 class="title-table" style="margin-bottom: 22px;">Cadastrar Usuário</h3>

                    <form class="form-default" method="post" action="../assets/php/process_admin.php" name="Inserts" style="width: auto;max-width: 1100px;padding-right: 10px;padding-left: 10px;padding-bottom: 10px;">
                        <h6 class="text-right"></h6>
                        <div class="form-row" style="width: 100%;min-width: 250px;padding-top: 10px;">
                            <div class="col" id="col-left-form" style="width: 45%;padding: 0px 5px;min-width: 250px;max-width: 100%;">
                                <h1 class="title-col-form">Dados pessoais</h1>
                                <div class="form-group"><label>Nome</label><input class="form-control" type="text" required name="nome"></div>
                                <div class="form-group"><label>Data de nascimento</label><input class="form-control" type="date" required name="dataNas"></div>
                                <div class="form-group"><label>Telefone</label><input class="form-control" type="tel" required name="numeroTelefone"></div>
                                <div class="form-group"><label>Cidade</label><select class="form-control" required name="cidade">
                                <?php include('../assets/subpages/optgroup-city.php');?>
                                    </select></div>
                            </div>
                            <div class="col" id="col-right-form" style="width: 45%;min-width: 250px;max-width: 100%;">
                                <h1 class="title-col-form">Dados de acesso</h1>
                                <div class="form-group"><label>Usuário</label><input class="form-control" type="text" required name="cadUser"></div>
                                <div class="form-group"><label>Email</label><input class="form-control" type="email" required name="emailA"></div>
                                <div class="form-group"><label>Senha</label><input class="form-control" type="password" required name="senha1"></div>
                                <div class="form-group"><label>Confirmar senha</label><input class="form-control" type="password" required name="senha2">
                                </div><button class="btn btn-primary btn-main btn-block" type="submit" name="cadsPe" >Cadastrar</button>
                            </div>
                        </div>
                    </form>
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
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="../assets/js/smoothproducts.min.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="https://kit.fontawesome.com/1404112e2c.js" crossorigin="anonymous"></script>
    <script src="../assets/js/visualizarAtendimentos.js"></script>
</body>

</html>