<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamentos - ETEC Zona Leste</title>
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

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
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
                        <a class="nav-link dropdown-toggle" href="cursos" style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cursos</a>

                        <!-- Cursos da ETEC -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cursos/#secao-adm">Administração</a></li>
                            <li><a class="dropdown-item" href="cursos/#secao-contabilidade">Contabilidede</a></li>
                            <li><a class="dropdown-item" href="cursos/#secao-ds">Desenvolvimento de Sistemas</a></li>
                            <li><a class="dropdown-item" href="cursos/#secao-log">Logística</a></li>
                            <li><a class="dropdown-item" href="cursos/#secao-rh">Recursos Humanos</a></li>
                            <li><a class="dropdown-item" href="cursos/#secao-jur">Serviços Jurídicos</a></li>
                        </ul>
                    </li>

                    <!-- Instituição -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="instituicao" role="button" style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" data-bs-toggle="dropdown" aria-expanded="false">Instituição</a>

                        <!-- Opções -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="instituicao/#nossa-his"> História</a></li>
                            <li><a class="dropdown-item" href="instituicao/#nossa-infra"> Infraestrutura</a></li>
                            <li><a class="dropdown-item" href="instituicao/#plano-plurianual-de-gestao">Plano Plurianual de Gestão</a></li>
                            <li><a class="dropdown-item" href="instituicao/#manual-do-aluno">Manual do Aluno</a></li>
                            <li><a class="dropdown-item" href="instituicao/#regimento-comum-das-etecs">Regimento Comum das Etecs</a></li>
                        </ul>
                    </li>

                    <!-- Departamentos -->
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="departamentos" role="button" style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" data-bs-toggle="dropdown" aria-expanded="false">Departamentos</a>

                        <!-- Cursos da ETEC -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#apm">APM - Associação de Pais e Mestres</a></li>
                            <li><a class="dropdown-item" href="#coor-de-cursos">Coordenação de Cursos</a></li>
                            <li><a class="dropdown-item" href="#direcao">Direção</a></li>
                        </ul>
                    </li>

                    <!-- Oportunidades -->
                    <li class="nav-item">
                        <a class="nav-link" style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" aria-current="page" href="oportunidades">Oportunidades</a>
                    </li>

                    <!-- Vestibulinho -->
                    <li class="nav-item">
                        <a class="nav-link" style="margin-top: 5px; margin-left: 10px; margin-right: 300px;" aria-current="page" href="vestibulinho">Vestibulinho</a>
                    </li>
            </div>
        </div>
    </nav>

    <!-- Imagem: -->
    <div class="container-fluid bg-body-primary">
        <img class="img-fluid" src="/img/image.png" style="width: 100%;"></img>
    </div>

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

    <!-- (1) APM: -->
    <div class="container-fluid bg-body-primary">
        <div class="row mt-5">
            <div class="col mt-1 ms-3">
                <h3 class="featurette-heading fw-bold lh-base ms-2 text-center" id="apm">APM - Associação de Pais e Mestres</h3>
                <p class="lead lh-base fw-normal justify-content-between align-items-center mt-4 ms-5">A Associação de Pais e Mestres (APM) é uma instituição
                    privada, auxiliar da escola, e tem por finalidade apoiar o processo de gestão escolar, a assistência ao aluno e a
                    integração escola-família-comunidade.</p>
                <p class="lead lh-base fw-normal justify-content-between align-items-center ms-5">Trata-se de uma entidade com objetivos sociais e educativos,
                    sem fins lucrativos.</p>
                <p class="lead lh-base fw-normal justify-content-between align-items-center ms-5">Para alcançar seus objetivos, as APMs desenvolvem projetos,
                    conforme plano anual, visando ao apoio nas áreas educacional, assistencial, de gestão, conservação e manutenção, convivência e comunicação.</p>
                <p class="lead lh-base fw-normal justify-content-between align-items-center ms-5">A parceria entre a APM e o CEETEPS é instrumentalizada por
                    Acordo de Cooperação e obedece a minuta-padrão do Decreto nº 67.345/2022.</p>
            </div>
        </div>
    </div>

    <!-- Coordenação de Cursos -->
    <div class="container-fluid bg-body-primary">
        <div class="row mt-5">
            <div class="col mt-1 ms-3">

                <!-- Título -->
                <h3 class="featurette-heading fw-bold lh-base ms-2 text-center" id="coor-de-cursos">Coordenação de Cursos</h3></br>

                <!-- NOVOTEC -->
                <h4 class="featurette-heading fw-bold lh-base ms-5">Coordenador NOVOTEC</h4>
                <p class="lead lh-base fw-normal justify-content-between align-items-start mt-4 ms-5">Giovanna Littiere (Novotec Administração)</br>
                    Leandro (Novotec Logística)</br>
                    Marcelo Collado (Novotec Desenvolvimento de Sistemas)</br>
                    Cibelle Ferreria Francoso (Novotec RH)</br>
                    Jeferson Roberto de Lima (Novotec Desenvolvimento de Sistemas AMS)</p></br>

                <!-- Cursos Técnicos -->
                <h4 class="featurette-heading fw-bold lh-base ms-5">Coordenador Curso Técnico</h4>
                <p class="lead lh-base fw-normal justify-content-between align-items-start mt-4 ms-5">
                    Monyse Tesser Panacci (Técnico em Adminstração / Técnico em Contabilidade)</br>
                    Ediney Ciasi Barreto (Técnico em Desenvolvimento de Sistemas)</br>
                    Silvano Lack de Brito (Técnico em Logística / Técnico em Serviços Jurídicos)
                </p>
            </div>
        </div>
    </div>

    <!-- Direção -->
    <div class="container-fluid bg-body-primary">
        <div class="row mt-5">
            <div class="col mt-1 ms-3">
                <h3 class="featurette-heading fw-bold lh-base ms-2 text-center" id="direcao">Direção da ETEC</h3></br>

                <!-- Diretora -->
                <h4 class="featurette-heading fw-bold lh-base ms-5 mt-2">Diretora da ETEC</h4>
                <p class="lead lh-base fw-normal justify-content-between align-items-start mt-1 ms-5">Amanda Bueno</p></br>

                <!-- Assessor Técnico Administrativo II -->
                <h4 class="featurette-heading fw-bold lh-base ms-5 mt-2">Assessor Técnico Administrativo II</h4>
                <p class="lead lh-base fw-normal justify-content-between align-items-start mt-1 ms-5">Patrick Moreno da Silva</p>

                <!-- Contato -->
                <h4 class="featurette-heading fw-bold lh-base ms-5 mt-2">Contato</h4>
                <p class="lead lh-base fw-normal justify-content-between align-items-start mt-1 ms-5">Patrick Moreno da Silva</p>
            </div>
        </div>
    </div>

</body>

</html>