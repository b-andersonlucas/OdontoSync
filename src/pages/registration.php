<!DOCTYPE html>
<html style="background: #f6f6f6;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cadastrar | OdontoSync</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="../assets/css/forms-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/css/smoothproducts.css">
    <link rel="shortcut icon" href="/src/assets/img/favicon-96x96.png" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top text-white bg-white clean-navbar">
        <div class="container"><a class="navbar-brand text-white logo" href="../index.html">OdontoSync</a><button data-toggle="collapse" class="navbar-toggler text-white" data-target="#navcol-1"><span class="text-white sr-only">Toggle navigation</span><span class="navbar-toggler-icon text-white"></span></button>
            <div class="collapse navbar-collapse text-white" id="navcol-1">
                <ul class="nav navbar-nav text-white ml-auto">
                    <li class="nav-item text-white"><a class="nav-link text-white" href="../index.html">início</a></li>
                    <li class="nav-item text-white"><a class="nav-link text-white" href="about-us.html">sobre</a></li>
                    <li class="nav-item text-white"><a class="nav-link text-white" href="pricing.html">tratamentos</a></li>
                    <li class="nav-item text-white"><a class="nav-link text-white" href="contact-us.html">contato</a></li>
                    <li class="nav-item"><a class="nav-link btn bg-white btn-acess" href="login.php">acessar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page registration-page">
        <section class="d-flex flex-column justify-content-center align-items-center clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-center d-flex flex-column title-form">Cadastre-se</h2>
                </div>
                <form class="form-default" method="post" action="/odontosync/src/assets/php/process-registration.php" style="width: auto;max-width: 1100px;">
                    <header class="text-right" style="margin-bottom: 12px;"><a href="login.php">Já possui uma conta?</a></header>
                    <h6 class="text-right"></h6>
                    <div class="form-row" style="width: 100%;min-width: 250px;">
                        <div class="col" id="col-left-form" style="width: 45%;padding: 0px 5px;min-width: 250px;max-width: 100%;">
                            <h1 class="title-col-form">Dados pessoais</h1>
                            <div class="form-group"><label>Nome</label><input class="form-control" type="text" name="nome"></div>
                            <div class="form-group"><label>Data de nascimento</label><input class="form-control" type="date" name="data_nascimento"></div>
                            <div class="form-group"><label>Telefone</label><input class="form-control" type="tel" name="telefone"></div>
                            <div class="form-group"><label>Cidade</label><select class="form-control" name="cidade">
                                    <?php include('../assets/subpages/optgroup-city.php');?>
                                </select></div>
                        </div>
                        <div class="col" id="col-right-form" style="width: 45%;min-width: 250px;max-width: 100%;">
                            <h1 class="title-col-form">Dados de acesso</h1>
                            <div class="form-group"><label>Usuário</label><input class="form-control" type="text" name="usuario"></div>
                            <div class="form-group"><label>Email</label><input class="form-control" type="email" name="email"></div>
                            <div class="form-group"><label>Senha</label><input class="form-control" type="password" name="senha"></div>
                            <div class="form-group"><label>Confirmar senha</label><input class="form-control" type="password"></div><input class="btn btn-primary btn-block btn-main" type="submit" name="ok">
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer class="page-footer dark" style="padding: 0;">
        <div class="footer-copyright">
            <p>© 2021 OdontoSync</p>
        </div>
    </footer>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="../assets/js/smoothproducts.min.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>