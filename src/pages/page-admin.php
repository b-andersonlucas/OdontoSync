<?php include '../assets/php/fetchs/get_dentista.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pagina Administrador | OdontoSync</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="../assets/css/forms-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/css/pages-client-styles.css">
    <link rel="stylesheet" href="../assets/css/Search-Input-Responsive-with-Icon.css">
    <link rel="stylesheet" href="../assets/css/smoothproducts.css">
    <link rel="shortcut icon" href="/src/assets/img/favicon-96x96.png" type="image/x-icon">
</head>

<body style="background-color: #f6f6f6;"><nav class="navbar navbar-light navbar-expand-lg fixed-top text-white bg-white clean-navbar">
        <div class="container"><a class="navbar-brand text-white logo" href="page-admin.php">OdontoSync</a><button data-toggle="collapse" class="navbar-toggler text-white" data-target="#navcol-1"><span class="text-white sr-only">Toggle navigation</span><span class="navbar-toggler-icon text-white"></span></button>
            <div class="collapse navbar-collapse text-white" id="navcol-1">
                <ul class="nav navbar-nav text-white ml-auto">
                    <li class="nav-item text-white"><a class="nav-link text-white" href="#service-calendar">Atendimento</a></li>
                    <li class="nav-item text-white"><a class="nav-link text-white" href="#procedure">Procedimento</a></li>
                    <li class="nav-item text-white"><a class="nav-link text-white" href="#register-user">Cadastro</a></li>
                    <li class="nav-item"><button class="btn btn-primary btn-acess bg-white" type="submit" style="border-style: none;">Sair</button></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page">
        <section id="service-calendar" class="clean-block payment-form dark" style="padding-bottom: 50px;">
            <div class="container">
                <div class="block-heading" style="margin-bottom: 40px;">
                    <h2 class="d-flex justify-content-between title-client" style="padding-right: 12px; ">Olá, Administrador<a href="./page-search.html" style="font-size: 18px;">Pesquisar cliente&nbsp;<i class="fa fa-long-arrow-right"></i></a></h2>
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
                            <div class="form-group"><label>Dentista</label><select class="form-control" name="dentist">
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
                                <div class="form-group"><label>Nome</label><input class="form-control" type="text" required=""></div>
                                <div class="form-group"><label>Data de nascimento</label><input class="form-control" type="date" required=""></div>
                                <div class="form-group"><label>Telefone</label><input class="form-control" type="tel" required=""></div>
                                <div class="form-group"><label>Cidade</label><select class="form-control" required="">
                                            <optgroup label="">
                                                <option value="12" selected="">Selecione a cidade</option>
                                                
                                                <option value="Acari">Acari</option>
        
                                                <option value="Açu">Açu</option>
        
                                                <option value="Afonso Bezerra">Afonso Bezerra</option>
        
                                                <option value="Água Nova">Água Nova</option>
        
                                                <option value="Alexandria">Alexandria</option>
        
                                                <option value="Almino Afonso">Almino Afonso</option>
        
                                                <option value="Alto do Rodrigues">Alto do Rodrigues</option>
        
                                                <option value="Angicos">Angicos</option>
        
                                                <option value="Antônio Martins">Antônio Martins</option>
        
                                                <option value="Apodi">Apodi</option>
        
                                                <option value="Areia Branca">Areia Branca</option>
        
                                                <option value="Arês">Arês</option>
        
                                                <option value="Campo Grande">Campo Grande</option>
        
                                                <option value="Baía Formosa">Baía Formosa</option>
        
                                                <option value="Baraúna">Baraúna</option>
        
                                                <option value="Barcelona">Barcelona</option>
        
                                                <option value="Bento Fernandes">Bento Fernandes</option>
        
                                                <option value="Bodó">Bodó</option>
        
                                                <option value="Bom Jesus">Bom Jesus</option>
        
                                                <option value="Brejinho">Brejinho</option>
        
                                                <option value="Caiçara do Norte">Caiçara do Norte</option>
        
                                                <option value="Caiçara do Rio do Vento">Caiçara do Rio do Vento</option>
        
                                                <option value="Caicó">Caicó</option>
        
                                                <option value="Campo Redondo">Campo Redondo</option>
        
                                                <option value="Canguaretama">Canguaretama</option>
        
                                                <option value="Caraúbas">Caraúbas</option>
        
                                                <option value="Carnaúba dos Dantas">Carnaúba dos Dantas</option>
        
                                                <option value="Carnaubais">Carnaubais</option>
        
                                                <option value="Ceará-Mirim">Ceará-Mirim</option>
        
                                                <option value="Cerro Corá">Cerro Corá</option>
        
                                                <option value="Coronel Ezequiel">Coronel Ezequiel</option>
        
                                                <option value="Coronel João Pessoa">Coronel João Pessoa</option>
        
                                                <option value="Cruzeta">Cruzeta</option>
        
                                                <option value="Currais Novos">Currais Novos</option>
        
                                                <option value="Doutor Severiano">Doutor Severiano</option>
        
                                                <option value="Parnamirim">Parnamirim</option>
        
                                                <option value="Encanto">Encanto</option>
        
                                                <option value="Equador">Equador</option>
        
                                                <option value="Espírito Santo">Espírito Santo</option>
        
                                                <option value="Extremoz">Extremoz</option>
        
                                                <option value="Felipe Guerra">Felipe Guerra</option>
        
                                                <option value="Fernando Pedroza">Fernando Pedroza</option>
        
                                                <option value="Florânia">Florânia</option>
        
                                                <option value="Francisco Dantas">Francisco Dantas</option>
        
                                                <option value="Frutuoso Gomes">Frutuoso Gomes</option>
        
                                                <option value="Galinhos">Galinhos</option>
        
                                                <option value="Goianinha">Goianinha</option>
        
                                                <option value="Governador Dix-Sept Rosado">Governador Dix-Sept Rosado</option>
        
                                                <option value="Grossos">Grossos</option>
        
                                                <option value="Guamaré">Guamaré</option>
        
                                                <option value="Ielmo Marinho">Ielmo Marinho</option>
        
                                                <option value="Ipanguaçu">Ipanguaçu</option>
        
                                                <option value="Ipueira">Ipueira</option>
        
                                                <option value="Itajá">Itajá</option>
        
                                                <option value="Itaú">Itaú</option>
        
                                                <option value="Jaçanã">Jaçanã</option>
        
                                                <option value="Jandaíra">Jandaíra</option>
        
                                                <option value="Janduís">Janduís</option>
        
                                                <option value="Januário Cicco">Januário Cicco</option>
        
                                                <option value="Japi">Japi</option>
        
                                                <option value="Jardim de Angicos">Jardim de Angicos</option>
        
                                                <option value="Jardim de Piranhas">Jardim de Piranhas</option>
        
                                                <option value="Jardim do Seridó">Jardim do Seridó</option>
        
                                                <option value="João Câmara">João Câmara</option>
        
                                                <option value="João Dias">João Dias</option>
        
                                                <option value="José da Penha">José da Penha</option>
        
                                                <option value="Jucurutu">Jucurutu</option>
        
                                                <option value="Jundiá">Jundiá</option>
        
                                                <option value="Lagoa d&#39;Anta">Lagoa d&#39;Anta</option>
        
                                                <option value="Lagoa de Pedras">Lagoa de Pedras</option>
        
                                                <option value="Lagoa de Velhos">Lagoa de Velhos</option>
        
                                                <option value="Lagoa Nova">Lagoa Nova</option>
        
                                                <option value="Lagoa Salgada">Lagoa Salgada</option>
        
                                                <option value="Lajes">Lajes</option>
        
                                                <option value="Lajes Pintadas">Lajes Pintadas</option>
        
                                                <option value="Lucrécia">Lucrécia</option>
        
                                                <option value="Luís Gomes">Luís Gomes</option>
        
                                                <option value="Macaíba">Macaíba</option>
        
                                                <option value="Macau">Macau</option>
        
                                                <option value="Major Sales">Major Sales</option>
        
                                                <option value="Marcelino Vieira">Marcelino Vieira</option>
        
                                                <option value="Martins">Martins</option>
        
                                                <option value="Maxaranguape">Maxaranguape</option>
        
                                                <option value="Messias Targino">Messias Targino</option>
        
                                                <option value="Montanhas">Montanhas</option>
        
                                                <option value="Monte Alegre">Monte Alegre</option>
        
                                                <option value="Monte das Gameleiras">Monte das Gameleiras</option>
        
                                                <option value="Mossoró">Mossoró</option>
        
                                                <option value="Natal">Natal</option>
        
                                                <option value="Nísia Floresta">Nísia Floresta</option>
        
                                                <option value="Nova Cruz">Nova Cruz</option>
        
                                                <option value="Olho d&#39;Água do Borges">Olho d&#39;Água do Borges</option>
        
                                                <option value="Ouro Branco">Ouro Branco</option>
        
                                                <option value="Paraná">Paraná</option>
        
                                                <option value="Paraú">Paraú</option>
        
                                                <option value="Parazinho">Parazinho</option>
        
                                                <option value="Parelhas">Parelhas</option>
        
                                                <option value="Rio do Fogo">Rio do Fogo</option>
        
                                                <option value="Passa e Fica">Passa e Fica</option>
        
                                                <option value="Passagem">Passagem</option>
        
                                                <option value="Patu">Patu</option>
        
                                                <option value="Santa Maria">Santa Maria</option>
        
                                                <option value="Pau dos Ferros">Pau dos Ferros</option>
        
                                                <option value="Pedra Grande">Pedra Grande</option>
        
                                                <option value="Pedra Preta">Pedra Preta</option>
        
                                                <option value="Pedro Avelino">Pedro Avelino</option>
        
                                                <option value="Pedro Velho">Pedro Velho</option>
        
                                                <option value="Pendências">Pendências</option>
        
                                                <option value="Pilões">Pilões</option>
        
                                                <option value="Poço Branco">Poço Branco</option>
        
                                                <option value="Portalegre">Portalegre</option>
        
                                                <option value="Porto do Mangue">Porto do Mangue</option>
        
                                                <option value="Serra Caiada">Serra Caiada</option>
        
                                                <option value="Pureza">Pureza</option>
        
                                                <option value="Rafael Fernandes">Rafael Fernandes</option>
        
                                                <option value="Rafael Godeiro">Rafael Godeiro</option>
        
                                                <option value="Riacho da Cruz">Riacho da Cruz</option>
        
                                                <option value="Riacho de Santana">Riacho de Santana</option>
        
                                                <option value="Riachuelo">Riachuelo</option>
        
                                                <option value="Rodolfo Fernandes">Rodolfo Fernandes</option>
        
                                                <option value="Tibau">Tibau</option>
        
                                                <option value="Ruy Barbosa">Ruy Barbosa</option>
        
                                                <option value="Santa Cruz">Santa Cruz</option>
        
                                                <option value="Santana do Matos">Santana do Matos</option>
        
                                                <option value="Santana do Seridó">Santana do Seridó</option>
        
                                                <option value="Santo Antônio">Santo Antônio</option>
        
                                                <option value="São Bento do Norte">São Bento do Norte</option>
        
                                                <option value="São Bento do Trairí">São Bento do Trairí</option>
        
                                                <option value="São Fernando">São Fernando</option>
        
                                                <option value="São Francisco do Oeste">São Francisco do Oeste</option>
        
                                                <option value="São Gonçalo do Amarante">São Gonçalo do Amarante</option>
        
                                                <option value="São João do Sabugi">São João do Sabugi</option>
        
                                                <option value="São José de Mipibu">São José de Mipibu</option>
        
                                                <option value="São José do Campestre">São José do Campestre</option>
        
                                                <option value="São José do Seridó">São José do Seridó</option>
        
                                                <option value="São Miguel">São Miguel</option>
        
                                                <option value="São Miguel do Gostoso">São Miguel do Gostoso</option>
        
                                                <option value="São Paulo do Potengi">São Paulo do Potengi</option>
        
                                                <option value="São Pedro">São Pedro</option>
        
                                                <option value="São Rafael">São Rafael</option>
        
                                                <option value="São Tomé">São Tomé</option>
        
                                                <option value="São Vicente">São Vicente</option>
        
                                                <option value="Senador Elói de Souza">Senador Elói de Souza</option>
        
                                                <option value="Senador Georgino Avelino">Senador Georgino Avelino</option>
        
                                                <option value="Serra de São Bento">Serra de São Bento</option>
        
                                                <option value="Serra do Mel">Serra do Mel</option>
        
                                                <option value="Serra Negra do Norte">Serra Negra do Norte</option>
        
                                                <option value="Serrinha">Serrinha</option>
        
                                                <option value="Serrinha dos Pintos">Serrinha dos Pintos</option>
        
                                                <option value="Severiano Melo">Severiano Melo</option>
        
                                                <option value="Sítio Novo">Sítio Novo</option>
        
                                                <option value="Taboleiro Grande">Taboleiro Grande</option>
        
                                                <option value="Taipu">Taipu</option>
        
                                                <option value="Tangará">Tangará</option>
        
                                                <option value="Tenente Ananias">Tenente Ananias</option>
        
                                                <option value="Tenente Laurentino Cruz">Tenente Laurentino Cruz</option>
        
                                                <option value="Tibau do Sul">Tibau do Sul</option>
        
                                                <option value="Timbaúba dos Batistas">Timbaúba dos Batistas</option>
        
                                                <option value="Touros">Touros</option>
        
                                                <option value="Triunfo Potiguar">Triunfo Potiguar</option>
        
                                                <option value="Umarizal">Umarizal</option>
        
                                                <option value="Upanema">Upanema</option>
        
                                                <option value="Várzea">Várzea</option>
        
                                                <option value="Venha-Ver">Venha-Ver</option>
        
                                                <option value="Vera Cruz">Vera Cruz</option>
        
                                                <option value="Viçosa">Viçosa</option>
        
                                                <option value="Vila Flor">Vila Flor</option>
        
                                            </optgroup>
                                        
                                    </select></div>
                            </div>
                            <div class="col" id="col-right-form" style="width: 45%;min-width: 250px;max-width: 100%;">
                                <h1 class="title-col-form">Dados de acesso</h1>
                                <div class="form-group"><label>Usuário</label><input class="form-control" type="text" required=""></div>
                                <div class="form-group"><label>Email</label><input class="form-control" type="email" required=""></div>
                                <div class="form-group"><label>Senha</label><input class="form-control" type="password" required=""></div>
                                <div class="form-group"><label>Confirmar senha</label><input class="form-control" type="password" required="">
                                </div><button class="btn btn-primary btn-main btn-block" type="button">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
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
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="../assets/js/smoothproducts.min.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="https://kit.fontawesome.com/1404112e2c.js" crossorigin="anonymous"></script>
    <script src="../assets/js/visualizarAtendimentos.js"></script>
</body>

</html>