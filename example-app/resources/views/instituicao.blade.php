<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - ETEC Zona Leste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
</head>

<body>

    <!-- Barra de navegação: -->
    <nav class="navbar navbar-expand-lg bg-body-white">
        <div class="container-fluid ">

            <!-- Navbar com a logo da ETEC -->
            <a class="navbar-brand ms-5" href="#">
                <img src="/img/eteclogo.png" alt="Logomarca da ETEC da Zona Leste" style="margin-left: 200px;" width="100px;" height="94px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse align-items-right" id="navbarSupportedContent">
                <ul class="navbar-nav nav nav-underline ms-auto mb-2 mb-lg-0">

                    <!-- Início -->
                    <li class="nav-item">
                        <a class="nav-link " style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" aria-current="page" href="home">Início</a>
                    </li>

                    <!-- <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a> -->

                    <!-- Cursos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="cursos" style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cursos
                        </a>

                        <!-- Cursos da ETEC -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#secao-adm">Administração</a></li>
                            <li><a class="dropdown-item" href="#secao-contabilidade">Contabilidede</a></li>
                            <li><a class="dropdown-item" href="#secao-ds">Desenvolvimento de Sistemas</a></li>
                            <li><a class="dropdown-item" href="#secao-log">Logística</a></li>
                            <li><a class="dropdown-item" href="#secao-rh">Recursos Humanos</a></li>
                            <li><a class="dropdown-item" href="#secao-jur">Serviços Jurídicos</a></li>
                        </ul>
                    </li>

                    <!-- Instituição -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="instituicao" role="button" style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" data-bs-toggle="dropdown" aria-expanded="false">
                            Instituição
                        </a>

                        <!-- Opções -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#nossa-his-infra">História & Infraestrutura</a></li>
                            <li><a class="dropdown-item" href="#plano-plurianual-de-gestao">Plano Plurianual de Gestão</a></li>
                            <li><a class="dropdown-item" href="#manual-do-aluno">Manual do Aluno</a></li>
                            <li><a class="dropdown-item" href="#regimento-comum-das-etecs">Regimento Comum das Etecs</a></li>
                        </ul>
                    </li>

                    <!-- Departamentos -->
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="home" role="button" style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" data-bs-toggle="dropdown" aria-expanded="false">
                            Departamentos
                        </a>

                        <!-- Cursos da ETEC -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="departamentos/#apm">APM - Associação de Pais e Mestres</a></li>
                            <li><a class="dropdown-item" href="departamentos/#coor-de-cursos">Coordenação de Cursos</a></li>
                            <li><a class="dropdown-item" href="departamentos/#direcao">Direção</a></li>
                        </ul>
                    </li>

                    <!-- Oportunidades -->
                    <li class="nav-item">
                        <a class="nav-link" style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" aria-current="page" href="index">Oportunidades</a>
                    </li>

                    <!-- Vestibulinho -->
                    <li class="nav-item">
                        <a class="nav-link" style="margin-top: 5px; margin-left: 10px; margin-right: 300px;" aria-current="page" href="index">Vestibulinho</a>
                    </li>
            </div>
        </div>
    </nav>

    <!-- Imagem: -->
    <img class="img-fluid" src="/img/adm.png" style="width: 100%; height: 75%;"></img>

    <!-- Barra de pesquisa:  -->
    <div class="container-fluid bg-body-tertiary">
        <div class="row bg-body-tertiary">
            <div class="col">&nbsp;</div>
            <div class="col bg-body-tertiary">
                <div class="container-fluid mt-5 mb-5 bg-body-tertiary">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="O que está buscando?" aria-label="Search" style="height: 60px; width: 500px;">
                    </form>
                </div>
            </div>
            <div class="col">&nbsp;</div>
        </div>
    </div>

    <!-- (1) Texto e imagem: -->
    <div class="row featurette mt-5">
        <div class="col-md-3 order-md-1 mt-5 ms-5 ">
            <h3 class="featurette-heading fw-bold lh-base ms-5 text-center" id="nossa-his-infra">História e Infraestrutura</h3>
            <p class="lead lh-base fw-normal text-justify mt-4 ms-5">Implantada no ano de 2008, na Avenida Águia de Haia, localizada na Zona Leste da cidade de São Paulo, 
                a ETEC Zona Leste, atualmente se destaca como um ponto de referência em educação e infraestrutura. 
                Sua história, desde o início, contou com o apoio e o compromisso da comunidade que a permeia.</p></br>
            <p class="lead lh-base fw-normal text-justify ms-5">Inicialmente abandonado, o espaço que hoje comporta as respectivas instituições de ensino ETEC 
                e FATEC Zona Leste, seria utilizado para a construção de um presídio. A comunidade ao redor, ao receber a informação, logo prontificou-se a ir 
                contra a ideia. Como moradores das redondezas, sentiam a necessidade da implantação de um ambiente voltado à educação, pela valorização do local e, 
                conclusivamente pela possibilidade de ingresso de seus filhos em uma escola próxima, caso o pedido fosse realizado. Abaixo-assinados percorreram as 
                proximidades de todo o terreno que, graças ao bom número de assinaturas colhidas, atualmente são localizadas as duas instituições pertencentes ao 
                Centro Paula Souza.</p></br>
            <p class="lead lh-base fw-normal text-justify ms-5"></p></br>
            <p class="lead lh-base fw-normal text-justify ms-5"></p>
        </div>
    </div>

    <!-- (2) Texto e imagem: -->
    <div class="row featurette mt-5">
        <div class="col-md-7 order-md-1 mt-5 ms-5">
            <h3 class="featurette-heading fw-bold lh-base ms-5" id="plano-plurianual-de-gestao">Plano Plurianual de Gestão</h3>
            <p class="lead lh-base fw-normal text-justify mt-5 ms-5"></p>
        </div>
        <div class="col-md-3 order-md-2 mt-5 ms-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="width: 100%; height: 75%; margin-top: 45px;" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" src="/img/cont.png"></img>
        </div>
    </div>

    <!-- (3) Texto e imagem: -->
    <div class="row featurette mt-5">
        <div class="col-md-7 order-md-2 mt-3 ms-5">
            <h3 class="featurette-heading fw-bold lh-base ms-5" id="manual-do-aluno">Manual do Aluno</h3>
            <p class="lead lh-base fw-normal mt-4 ms-5">
            </p></br>
        </div>
        <div class="col-md-3 order-md-1 ms-5" style="margin-top: 150px;">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto ms-5" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" src="/img/image4.png"></img>
        </div>
    </div>

    <!-- (4) Texto e imagem: -->
    <div class="row featurette mt-5">
        <div class="col-md-7 order-md-1 mt-5 ms-5">
            <h3 class="featurette-heading fw-bold lh-base ms-5" id="regimento-comum-das-etecs">Regimento Comum das ETECs</h3>
            <p class="lead lh-base fw-normal text-justify mt-3 ms-5"></p></br>
        </div>
        <div class="col-md-3 order-md-2 mt-5 ms-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="margin-top: 75px;" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" src="/img/log.png"></img>
        </div>
    </div>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-body-secondary">&copy; 2024 ETEC Zona Leste</p>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="/home" class="nav-link px-2 text-body-secondary">Inicio</a></li>
                <li class="nav-item"><a href="/cursos" class="nav-link px-2 text-body-secondary">Cursos</a></li>
                <li class="nav-item"><a href="/instituicao" class="nav-link px-2 text-body-secondary">Instituição</a></li>
                <li class="nav-item"><a href="/departamentos" class="nav-link px-2 text-body-secondary">Departamentos</a></li>
                <li class="nav-item"><a href="/oportunidades" class="nav-link px-2 text-body-secondary">Oportunidades</a></li>
                <li class="nav-item"><a href="/vestibulinho" class="nav-link px-2 text-body-secondary">Vestibulinho</a></li>
            </ul>
        </footer>
    </div>

</body>

</html>