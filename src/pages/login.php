<?php 
session_start();
if (isset($_SESSION["autenticado"])) {
    header("location:/odontosync/src/assets/php/process-login.php");
} else {
    session_destroy();
}
?>
<!DOCTYPE html>
<html style="background: #f6f6f6;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login | OdontoSync</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="../assets/css/forms-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/css/smoothproducts.css">
    <link rel="stylesheet" href="../assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="shortcut icon" href="../assets/img/favicon-96x96.png" type="image/x-icon">
</head>

<body style="background: #f6f6f6;">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top text-white bg-white clean-navbar">
        <div class="container"><a class="navbar-brand text-white logo" href="../">OdontoSync</a><button data-toggle="collapse" class="navbar-toggler text-white" data-target="#navcol-1"><span class="text-white sr-only">Toggle navigation</span><span class="navbar-toggler-icon text-white"></span></button>
            <div class="collapse navbar-collapse text-white" id="navcol-1">
                <ul class="nav navbar-nav text-white ml-auto">
                    <li class="nav-item text-white"><a class="nav-link text-white" href="../">início</a></li>
                    <li class="nav-item text-white"><a class="nav-link text-white" href="about-us.html">sobre</a></li>
                    <li class="nav-item text-white"><a class="nav-link text-white" href="contact-us.html">contato</a></li>
                    <li class="nav-item"><a class="nav-link active btn bg-white btn-acess" href="login.php">acessar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="title-form">Login</h2>
                </div>
                <form class="form-default" method="POST" action="../assets/php/process-login.php" >
                    <div class="form-group"><label for="user">Usuário</label><input class="form-control item" type="text" id="usuario" name="usuario" autofocus required></div>
                    <div class="form-group"><label for="password">Senha</label><input class="form-control" type="password" id="password" name="password" required></div>
                    <div class="form-group"><a href="contact-us.html">Esqueceu a senha?</a></div><input class="btn btn-primary btn-block btn-main" type="submit" name="ok">
                    <footer class="text-right" id="footerLogin"><a href="registration.php">Cadastre-se aqui</a></footer>
                </form>
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
</body>

</html>