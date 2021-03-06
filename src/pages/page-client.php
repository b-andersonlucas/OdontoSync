<?php
session_start(); 
$p = true;
include('../assets/php/fetchs/authenticate-priv.php');
include('../assets/php/fetchs/get_dataHorario.php');
?>
<!DOCTYPE html>
<html style="background: #f6f6f6;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Página do Cliente | OdontoSync</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="../assets/css/forms-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/css/pages-client-styles.css">
    <link rel="stylesheet" href="../assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="../assets/css/smoothproducts.css">
    <link rel="shortcut icon" href="../assets/img/favicon-96x96.png" type="image/x-icon">
</head>

<body style="background: #f6f6f6;">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top text-white bg-white clean-navbar">
        <div class="container"><a class="navbar-brand text-white logo" href="../">OdontoSync</a><button data-toggle="collapse" class="navbar-toggler text-white" data-target="#navcol-1"><span class="text-white sr-only">Toggle navigation</span><span class="navbar-toggler-icon text-white"></span></button>
            <div class="collapse navbar-collapse text-white" id="navcol-1">
                <ul class="nav navbar-nav text-white ml-auto">
                    <li class="nav-item text-white"><a class="nav-link text-white" href="../">início</a></li>
                    <li class="nav-item text-white"><a class="nav-link text-white" href="pages/about-us.html">sobre</a></li>
                    <li class="nav-item text-white"><a class="nav-link text-white" href="contact-us.html">contato</a></li>
                    <li class="nav-item"><a class="nav-link btn bg-white btn-acess" href="../assets/php/logout.php">sair</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page payment-page">
        <section class="clean-block payment-form dark" style="padding-bottom: 70px;">
            <div class="container">
                <div class="d-flex justify-content-between block-heading">
                    <h2 class="title-client">Olá, <?php echo $_SESSION["primeiroNome"];?></h2>
                    <div><a class="btn btn-primary btn-lg btn-main" role="button" data-toggle="modal" href="#myModal">Agendar</a><div role="dialog" tabindex="-1" class="modal fade" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title-table">Agendar Horário</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="../assets/php/cadastrarHorario.php" method="POST" class="form-default p-3" id="form-schedule">
                    <div class="form-group  mt-3 mb-2">
                        <label for="user">Seu email</label>
                        <input class="form-control item" type="text" id="emailCliente" name="email" value="<?php echo $_SESSION["email"] ?>" readonly required>
                    </div>
                    <div class="form-group mt-2 mb-2">
                        <label for="inputDate">Data</label>
                        <select class="form-control" name="dia" id="inputDia" required> 
                            <option value="" selected>Selecione</option>
                            <?php echo diasAtendimento(); ?>
                        </select>
                    </div>
                    <div class="form-group mt-3 mb-2">
                        <label for="inputDentista">Dentista</label>
                        <select name="dentista" id="inputDentista" class="form-control" required>
                            <option value="#" selected>Dentista</option>
                        </select>
                    </div>
                    <div class="form-group mt-3 mb-2">
                        <label for="inputHora">Horário</label>
                        <select name="hora" id="inputHora" class="form-control" required>
                            <option value="#" selected>Selecione</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" data-dismiss="modal" type="button">Close</button>
                <button class="btn btn-primary btn-main" type="submit" form="form-schedule" name="agendar">Agendar</button>
            </div>
        </div>
    </div>
</div></div>
                </div>
                <div class="text-left" style="background: white;border-radius: 10px;padding-top: 15px;padding-bottom: 15px;padding-right: 12px;padding-left: 12px;">
                    <h3 class="title-table" style="margin-bottom: 22px;">Dados gerais</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>
                                         <?php echo $_SESSION["nome"];?><br>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nome de usuário</td>
                                    <td><?php echo $_SESSION["usuario"];?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td id="email"><?php echo $_SESSION["email"];?></td>
                                </tr>
                                <tr>
                                    <td>Data de nascimento</td>
                                    <td><?php echo date("d/m/Y", strtotime($_SESSION["data_nascimento"]));?><br></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>Telefone</td>
                                    <td><?php echo $_SESSION["telefone"];?><br></td>
                                </tr>
                                <tr>
                                    <td>Cidade/UF</td>
                                    <td><?php echo $_SESSION["cidade"];?>/RN</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block payment-form dark" style="padding-bottom: 70px;">
            <div class="container">
                <div class="text-left" style="background: white;border-radius: 10px;padding-top: 15px;padding-bottom: 15px;padding-right: 12px;padding-left: 12px;">
                    <h3 class="title-table" style="margin-bottom: 22px;">Horário Agendado</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Dia</th>
                                    <th>Hora</th>
                                </tr>
                            </thead>
                            <tbody id="horarioAgendado">
                                <tr>
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
            <div class="container">
                <div class="text-left" style="background: #ffffff;border-style: none;border-radius: 10px;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 15px;">
                    <h3 class="title-table" style="margin-bottom: 22px;">Histórico</h3>
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
                            <tbody id="tabelaHistorico">
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
    <script src="../assets/js/page-client-scripts.js"></script>
</body>

</html>