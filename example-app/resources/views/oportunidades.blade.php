<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oportunidades - ETEC Zona Leste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse align-items-right" id="navbarSupportedContent">
                <ul class="navbar-nav nav nav-underline ms-auto mb-2 mb-lg-0">

                    <!-- Início -->
                    <li class="nav-item">
                        <a class="nav-link " style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" aria-current="page" href="home">Início</a>
                    </li>
                    
                    <!-- Cursos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="cursos" style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" 
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">Cursos</a>

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
                        <a class="nav-link dropdown-toggle" href="instituicao" role="button" style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" 
                        data-bs-toggle="dropdown" aria-expanded="false">Instituição</a>

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
                        <a class="nav-link dropdown-toggle" href="departamentos" role="button" style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" 
                        data-bs-toggle="dropdown" aria-expanded="false">Departamentos</a>

                        <!-- Cursos da ETEC -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="departamentos/#apm">APM - Associação de Pais e Mestres</a></li>
                            <li><a class="dropdown-item" href="departamentos/#coor-de-cursos">Coordenação de Cursos</a></li>
                            <li><a class="dropdown-item" href="departamentos/#direcao">Direção</a></li>
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
    <div class="container-fluid bg-body-tertiary">
        <img class="img-fluid" src="/img/buildings2.webp" width="100%" height="auto"></img>
    </div>

    <!-- Barra de pesquisa:  -->
    <div class="container-fluid bg-body-tertiary">
        <div class="row bg-body-tertiary">
            <div class="col">&nbsp;</div>
            <div class="col bg-body-tertiary">
                <div class="container-fluid mt-5 mb-5 bg-body-tertiary">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="O que está buscando?" aria-label="Search" 
                        style="height: 60px; width: 500px;">
                    </form>
                </div>
            </div>
            <div class="col">&nbsp;</div>
        </div>
    </div>

    <!-- Concurso Público -->
    <div class="container-fluid bg-body-primary">
        <div class="row featurette mt-5">
            <div class="col-md-7 order-md-1 mt-3 ms-5">
                <h3 class="featurette-heading fw-bold lh-base ms-5">Concurso Público</h3>
                <p class="lead lh-base fw-normal justify-content-between align-items-center mt-4 ms-5">Estão em andamento concursos públicos para contratação de 2,7 mil
                    docentes e servidores administrativos para atuar em Escolas Técnicas (Etecs), Faculdades de Tecnologia (Fatecs) do Estado e na Administração Central 
                    do Centro Paula Souza (CPS). Os certames foram autorizados em junho de 2022 e as admissões ocorrem em 2023. O calendário do concurso 
                    para os cargos administrativos e os editais para docentes, que são liberados em lotes, estão disponíveis nos links abaixo.</p>
                <p class="lead lh-base fw-normal justify-content-between align-items-center ms-5">A previsão é contratar 993 professores de Ensino Médio 
                    e Técnico, 594 docentes de Ensino Superior, 887 agentes técnicos e administrativos, 227 bibliotecários e 6 especialistas em planejamento
                    educacional. Foi autorizado, ainda, o aproveitamento de 80 vagas de professores remanescentes de concursos anteriores.</p>
            </div>
            <div class="col-md-3 order-md-2 mt-3 ms-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="/img/vestibulinho.webp" style="margin-top: 50px;"></img>
            </div>
        </div>
    </div>

    <!-- Processo Seletivo Simplificado para Auxiliar de Docente -->
    <div class="container-fluid bg-body-primary">
        <div class="row mt-5">
            <div class="col-md-7 order-md-2 mt-3 ms-5">
                <h3 class="featurette-heading fw-bold lh-base ms-5">Processo Seletivo Simplificado para Auxiliar de Docente</h3>
                <p class="lead lh-base fw-normal justify-content-between align-items-center mt-4 ms-5">Prepare-se para embarcar em uma jornada de ensino e aprendizado! 
                    O Processo Seletivo Simplificado para Auxiliar de Docente nas renomadas Escolas Técnicas Estaduais (ETECs) ou Faculdades de Tecnologia 
                    (FATECs) está com inscrições abertas.</p>
                <p class="lead lh-base fw-normal justify-content-between align-items-center mt-4 ms-5">Participe deste processo seletivo e compartilhe seu conhecimento, experiência 
                    e paixão pelo ensino. As inscrições estão disponíveis para aqueles que desejam desempenhar um papel fundamental na educação técnica do Estado de São Paulo.</p>
            </div>
            <div class="col-md-3 order-md-1 mt-3 ms-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto ms-5" src="/img/buildings.webp"></img>
            </div>
        </div>
    </div>

    <!-- Jovem Aprendiz-->
    <div class="container-fluid bg-body-primary">
        <div class="row featurette mt-5">
            <div class="col-md-7 order-md-1 mt-3 ms-5">
                <h3 class="featurette-heading fw-bold lh-base ms-5">Programa Aprendiz Paulista</h3>
                <p class="lead lh-base fw-normal justify-content-between align-items-center mt-4 ms-5">A sua chance de ingressar no mercado de trabalho! 
                    Se você tem entre 14 e 24 anos, está matriculado em cursos técnicos profissionalizantes do Centro Estadual de Educação Tecnológica Paula Souza 
                    e reside em São Paulo, esta é a sua chance de conquistar uma vaga de aprendizagem em empresas parceiras.</p>
                <p class="lead lh-base fw-normal justify-content-between align-items-center ms-5">Benefícios incluem salário mínimo por hora, vale transporte, 
                    férias remuneradas, FGTS e registro em carteira. Esteja preparado para uma jornada de aprendizado prático e teórico. <b>Junte-se a nós e construa 
                    o seu futuro!</b></p>
            </div>
            <div class="col-md-3 order-md-2 mt-3 ms-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="/img/japrendiz.webp" style="margin-top: 40px;"></img>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <div class="container-fluid">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-body-secondary">&copy; 2024 ETEC Zona Leste</p>

            <ul class="nav col-md-7 justify-content-end">
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