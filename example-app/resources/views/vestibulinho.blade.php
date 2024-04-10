<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vestibulinho - ETEC Zona Leste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" ] integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                        <a class="nav-link dropdown-toggle" href="home" role="button" style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" data-bs-toggle="dropdown" aria-expanded="false">Departamentos</a>

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
    <div class="container-fluid bg-body-primary">
        <img class="img-fluid" src="/img/vestibular.webp" width="100%" height="auto"></img>
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

    <!-- Vestibulinho -->
    <div class="container-fluid bg-body-primary">
        <div class="row mt-5">
            <div class="col-md-7 order-md-2 mt-3 ms-5">
                <h3 class="featurette-heading fw-bold lh-base ms-5">O Vestibulinho</h3>
                <p class="lead lh-base fw-normal justify-content-between align-items-center mt-4 ms-5">O processo de vestibulinho na ETEC, segue um padrão definido
                    pelo Centro Paula Souza. Primeiramente, é divulgado um edital contendo todas as informações essenciais, como datas, locais de prova, cursos
                    oferecidos, requisitos de inscrição e documentação necessária.</p>
                <p class="lead lh-base fw-normal justify-content-between align-items-center mt-4 ms-5">Os candidatos devem então se inscrever dentro do prazo estipulado,
                    geralmente de forma online através do site oficial do vestibulinho da ETEC, e pagar uma taxa de inscrição conforme especificado no edital. </p>
            </div>
            <div class="col-md-3 order-md-1 mt-3 ms-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto ms-5" src="/img/prova.webp"></img>
            </div>
        </div>
    </div>

    <!-- Prova -->
    <div class="container-fluid bg-body-primary">
        <div class="row mt-5">
            <div class="col mt-1 ms-3">
                <h3 class="featurette-heading fw-bold lh-base ms-2 text-center">A Prova</h3>
                <p class="lead lh-base fw-normal justify-content-between align-items-center mt-4 ms-5">A prova do vestibulinho consiste em 50 questões de múltipla
                    escolha, abrangendo várias áreas do conhecimento, incluindo Língua Portuguesa, Matemática, Ciências e questões específicas relacionadas ao
                    curso técnico escolhido. Após a correção das provas, os resultados são divulgados dentro do prazo estabelecido, permitindo que os candidatos
                    verifiquem sua pontuação e classificação. Os aprovados devem então proceder com a matrícula dentro do prazo estabelecido, seguindo as orientações
                    fornecidas pela ETEC, o que inclui a apresentação de documentos e o preenchimento de formulários específicos. </p>
                <p class="lead lh-base fw-normal justify-content-between align-items-center ms-5">É fundamental que você, candidato, esteja atento à modalidade de
                    curso que escolheu, pois o Centro Paula Souza não assume responsabilidade por inscrições em cursos incorretos ou modalidades não desejadas.
                    Certifique-se de selecionar cuidadosamente o curso e a modalidade desejados durante o processo de inscrição, garantindo assim uma participação
                    adequada e de acordo com suas preferências e objetivos educacionais. </p>
            </div>
        </div>
    </div>

    <!-- Informações Importantes sobre o exame do Vestibulinho ETEC -->
    <div class="container-fluid bg-body-primary">
        <div class="row mt-5">
            <div class="col mt-1 ms-3">
                <h3 class="featurette-heading fw-bold lh-base ms-2 text-center">Informações Importantes sobre o exame do Vestibulinho ETEC</h3>
                <p class="lead lh-base fw-normal justify-content-between align-items-center mt-4 ms-5">
                    <b>01 - </b> A prova avalia conhecimentos nas principais matérias da Base Nacional Comum Curricular (BNCC) do Ensino
                    Fundamental II, incluindo Linguagens (Língua Portuguesa), Matemática, Ciências Humanas (Geografia e História) e Ciências da Natureza;
                </p>
                <p class="lead lh-base fw-normal justify-content-between align-items-center mt-1 ms-5">
                    <b>02 - </b>As questões não são separadas por disciplinas, podendo ser multidisciplinares ou específicas;</br>
                </p>
                <p class="lead lh-base fw-normal justify-content-between align-items-center mt-1 ms-5">
                    <b>03 - </b>Valores e ações que promovam uma sociedade mais humana, justa e sustentável são avaliados, exigindo atenção a temas atuais
                    relacionadosa esses tópicos;</br>
                </p>
                <p class="lead lh-base fw-normal justify-content-between align-items-center mt-4 ms-5">
                    <b>04 - </b> As questões abordam competências como interpretação de diversos tipos de texto, aplicação de conhecimentos do Ensino Fundamental
                    para resolver problemas, análise crítica de argumentos, reconhecimento de diferentes formas de linguagem e avaliação de ações de acordo com
                    critérios estabelecidos.
                </p>
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