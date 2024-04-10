<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - ETEC Zona Leste</title>
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
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse align-items-right" id="navbarSupportedContent">
                <ul class="navbar-nav nav nav-underline ms-auto mb-2 mb-lg-0">

                    <!-- Início -->
                    <li class="nav-item">
                        <a class="nav-link " style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" aria-current="page" href="/home">Início</a>
                    </li>

                    <!-- <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a> -->

                    <!-- Cursos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/cursos" style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" role="button" 
                        data-bs-toggle="dropdown" aria-expanded="false">Cursos</a>

                        <!-- Cursos da ETEC -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="adm/#secao-adm">Administração</a></li>
                            <li><a class="dropdown-item" href="adm/#secao-contabilidade">Contabilidede</a></li>
                            <li><a class="dropdown-item" href="adm/#secao-ds">Desenvolvimento de Sistemas</a></li>
                            <li><a class="dropdown-item" href="adm/#secao-log">Logística</a></li>
                            <li><a class="dropdown-item" href="adm/#secao-rh">Recursos Humanos</a></li>
                            <li><a class="dropdown-item" href="adm/#secao-jur">Serviços Jurídicos</a></li>
                        </ul>
                    </li>

                    <!-- Instituição -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="instituicao" role="button" style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" 
                        data-bs-toggle="dropdown" aria-expanded="false">Instituição</a>

                        <!-- Opções -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#nossa-his"> História</a></li>
                            <li><a class="dropdown-item" href="#nossa-infra"> Infraestrutura</a></li>
                            <li><a class="dropdown-item" href="#plano-plurianual-de-gestao">Plano Plurianual de Gestão</a></li>
                            <li><a class="dropdown-item" href="#manual-do-aluno">Manual do Aluno</a></li>
                            <li><a class="dropdown-item" href="#regimento-comum-das-etecs">Regimento Comum das Etecs</a></li>
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
    <div class="container-fluid bg-body-primary">
        <img class="img-fluid" src="/img/image5.png" style="width: 100%;"></img>
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

    <!-- (1) Texto e imagem: -->
    <div class="container-fluid bg-body-primary">
        <div class="row mt-5">
            <div class="col mt-1 ms-3">
                <h3 class="featurette-heading fw-bold lh-base ms-2 text-center" id="nossa-his">Nossa História</h3>
                <p class="lead lh-base fw-normal justify-content-between align-items-center mt-4 ms-5">Implantada no ano de 2008, na Avenida Águia de Haia,
                    localizada na Zona Leste da cidade de São Paulo, a ETEC Zona Leste, atualmente se destaca como um ponto de referência
                    em educação e infraestrutura. Sua história, desde o início, contou com o apoio e o compromisso da comunidade que a permeia.</p></br>
                <p class="lead lh-base fw-normal justify-content-between align-items-center ms-5">Inicialmente abandonado, o espaço que hoje comporta as respectivas
                    instituições de ensino ETEC e FATEC Zona Leste, seria utilizado para a construção de um presídio. A comunidade ao redor, ao receber a informação,
                    logo prontificou-se a ir contra a ideia. Como moradores das redondezas, sentiam a necessidade da implantação de um ambiente voltado à educação,
                    pela valorização do local e, conclusivamente pela possibilidade de ingresso de seus filhos em uma escola próxima, caso o pedido fosse realizado.
                    Abaixo-assinados percorreram as proximidades de todo o terreno que, graças ao bom número de assinaturas colhidas, atualmente são localizadas as duas
                    instituições pertencentes ao Centro Paula Souza.</p></br>
                <p class="lead lh-base fw-normal justify-content-between align-items-center ms-5">Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da
                    sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários,
                    nossa escola oferece uma variedade de cursos técnicos, proporcionando aos alunos uma formação sólida e atualizada.</p></br>
            </div>
        </div>
    </div>

    <!-- (2) Texto e imagem: -->
    <div class="container-fluid bg-body-primary">
        <div class="row mt-1">
            <div class="col mt-1 ms-3">
                <h3 class="featurette-heading fw-bold lh-base mt-4 ms-5 text-center" id="nossa-infra">Nossa Infraestrutura</h3>
                <h4 class="featurette-heading fw-bold lh-base mt-4 ms-5 text-start">Patio</h4>
                <p class="lead lh-base fw-normal justify-content-between align-items-center ms-5">O pátio da instituição é um verdadeiro refúgio. Árvores, flores
                    e plantas dão ao ambiente uma atmosfera de serenidade e frescor. É um espaço que convida os alunos a desfrutarem do ar livre enquanto se dedicam às
                    suas atividades acadêmicas e sociais. O pátio principal também foi projetado para promover a interação e o convívio entre os estudantes.
                    Com mesas distribuídas, o espaço oferece oportunidades para uma variedade de atividades sociais e recreativas, desde jogos de tabuleiro
                    que estimulam o raciocínio e a cooperação, até partidas acirradas de pingue-pongue e pebolim que promovem a competição saudável
                    e o espírito de equipe.</p></br>
                <h4 class="featurette-heading fw-bold lh-base mt-4 ms-5 text-start">Sala Maker</h4>
                <p class="lead lh-base fw-normal justify-content-between align-items-center ms-5">Com seu espaço voltado à tecnologia e construção de projetos,
                    a Sala Maker possui notebooks, impressoras 3D, drones, óculos de realidade aumentada e ferramentas para a construção
                    de projetos manuais. Além de ser um ótimo ambiente para estudar com os colegas, o ambiente possui uma diversidade de
                    mesas e cadeiras dispostas, assim comportando um bom número de alunos e seus respectivos projetos.</p></br>
                <h4 class="featurette-heading fw-bold lh-base mt-4 ms-5 text-start">Quadras</h4>
                <p class="lead lh-base fw-normal justify-content-between align-items-center ms-5">O espaço oferece duas quadras poliesportivas aos estudantes, sendo
                    uma ao ar livre, para o aproveitamento de dias ensolarados e, outra coberta, garantindo a prática das atividades mesmo em condições climáticas
                    não-favoráveis. Essas instalações são utilizadas de maneira versátil, servindo como cenário nas aulas
                    dinâmicas de Educação Física ou em eventos como gincanas, interclasses, festas juninas, pós-aulas e feiras tecnológicas.
                </p></br>
            </div>
        </div>
    </div>

    <!-- (3) Texto e imagem: -->
    <div class="container-fluid bg-body-primary">
        <div class="row mt-1">
            <div class="col mt-1 ms-3">
                <h3 class="featurette-heading fw-bold lh-base ms-5 text-center" id="plano-plurianual-de-gestao">Plano Plurianual de Gestão</h3>
                <p class="lead lh-base fw-normal justify-content-between align-items-center mt-5 ms-5">O Plano Plurianual de Gestão (PPG) das Etecs
                    tem por objetivo indicar as principais ações que deverão ser norteadoras do fazer da Unidade de Ensino no próximo quinquênio.</p>
            </div>
        </div>
    </div>

    <!-- (4) Texto e imagem: -->
    <div class="container-fluid bg-body-primary">
        <div class="row mt-1">
            <div class="col mt-1 ms-3">
                <h3 class="featurette-heading fw-bold lh-base ms-5 text-center" id="manual-do-aluno">Manual do Aluno</h3>
                <p class="lead lh-base fw-normal justify-content-between align-items-center text-center mt-3 ms-5" >
                    <a href="https://www.eteczonaleste.com.br/manual-do-aluno/">Acesse aqui o Manual do Aluno.</a></p></br>
            </div>
        </div>
    </div>

    <!-- (5) Texto e imagem: -->
    <div class="container-fluid bg-body-primary">
        <div class="row mt-1">
            <div class="col mt-1 ms-3">
                <h3 class="featurette-heading fw-bold lh-base ms-5 text-center" id="regimento-comum-das-etecs">Regimento Comum das ETECs</h3>
                <p class="lead lh-base fw-normal justify-content-between align-items-center text-center mt-3 ms-5" >
                    <a href="https://www.eteczonaleste.com.br/regimento-comum-das-etecs/">Acesse aqui o Regimento Comum das ETECs.</a></p></br>
            </div>
        </div>
    </div>

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