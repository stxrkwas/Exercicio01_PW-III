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
                        <a class="nav-link dropdown-toggle" href="institucao" role="button" style="margin-top: 5px; margin-left: 10px; 
                        margin-right: 10px;" data-bs-toggle="dropdown" aria-expanded="false">Instituição</a>

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
                        <a class="nav-link dropdown-toggle" href="departamentos" role="button" style="margin-top: 5px; margin-left: 10px; 
                        margin-right: 10px;" data-bs-toggle="dropdown" aria-expanded="false">Departamentos</a>

                        <!-- Cursos da ETEC -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="departamentos/#apm">APM - Associação de Pais e Mestres</a></li>
                            <li><a class="dropdown-item" href="departamentos/#coor-de-cursos">Coordenação de Cursos</a></li>
                            <li><a class="dropdown-item" href="departamentos/#direcao">Direção</a></li>
                        </ul>
                    </li>

                    <!-- Oportunidades -->
                    <li class="nav-item">
                        <a class="nav-link" style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" aria-current="page"
                         href="oportunidades">Oportunidades</a>
                    </li>

                    <!-- Vestibulinho -->
                    <li class="nav-item">
                        <a class="nav-link" style="margin-top: 5px; margin-left: 10px; margin-right: 300px;" aria-current="page" 
                        href="vestibulinho">Vestibulinho</a>
                    </li>
            </div>
        </div>
    </nav>

    <!-- Imagem: -->
    <div class="container-fluid bg-body-tertiary">
        <img class="img-fluid" src="/img/home.etec.webp" width="100%" height="auto"></img>
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

    <!-- O que a ETEC pode fazer pelo seu FUTURO ainda HOJE? -->
    <div class="container-fluid bg-body-primary">
        <div class="row mt-5">
            <div class="col-md-7 order-md-2 mt-3 ms-5">
                <h3 class="featurette-heading fw-bold lh-base ms-5">O que a ETEC pode fazer pelo seu FUTURO ainda HOJE?</h3>
                <p class="lead lh-base fw-normal text-justify mt-4 ms-5">Sabemos que às vezes pensar no futuro pode parecer assustador.
                    Traçamos carreiras e planos profissionais a todo momento em nossos pensamentos,
                    numa busca constante pelo caminho que nos trará o melhor. Mas saiba que a ETEC Zona
                    Leste conhece os seus anseios e, está aqui, disposta a te apresentar um novo caminho!
                    O futuro não precisa ser assustador. Suas habilidades técnicas e profissionais podem
                    ser desenvolvidas enquanto você aprende com a gente. Em nossa instituição, nós valorizamos os pequenos passos.
                    Dê o seu primeiro passo hoje em direção ao futuro. Faça parte da ETEC!</p>
            </div>
            <div class="col-md-3 order-md-1 mt-3 ms-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto ms-5" width="600" height="600" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" src="/img/image1.png"></img>
            </div>
        </div>
    </div>

    <!-- Excelência educacional -->
    <div class="container-fluid bg-body-primary">
        <div class="row featurette mt-5">
            <div class="col-md-7 order-md-1 mt-3 ms-5">
                <h3 class="featurette-heading fw-bold lh-base ms-5" style="text-align: justify;">Excelência Educacional</h3>
                <p class="lead lh-base fw-normal text-justify mt-4 ms-5">Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima.
                    Nossas aulas são ministradas por professores altamente qualificados, proporcionando uma educação satisfatória que combina
                    conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
            </div>
            <div class="col-md-3 order-md-2 mt-3 ms-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="/img/image2.png"></img>
            </div>
        </div>
    </div>

    <!-- Para além da sala de aula -->
    <div class="container-fluid bg-body-primary">
        <div class="row featurette mt-5">
            <div class="col-md-7 order-md-2 mt-3 ms-5">
                <h3 class="featurette-heading fw-bold lh-base ms-5">Para além da sala de aula</h3>
                <p class="lead lh-base fw-normal text-justify mt-4 ms-5">Buscamos levar o conhecimento para além da sala de aula tradicional.
                    Incentivamos o cultivo de conexões valiosas por meio de networking e oportunidades de carreira. Além do sucesso acadêmico,
                    nos preocupamos com o desenvolvimento pessoal de nosso corpo estudantil,
                    oferecendo suporte abrangente, orientação vocacional e programas extracurriculares.</p>
            </div>
            <div class="col-md-3 order-md-1 mt-3 ms-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto ms-5" src="/img/image3.png"></img>
            </div>
        </div>
    </div>

    <!-- Ambientes Favoráveis -->
    <div class="container-fluid bg-body-primary">
        <div class="row featurette mt-5">
            <div class="col-md-7 order-md-1 mt-3 ms-5">
                <h3 class="featurette-heading fw-bold lh-base ms-5" style="text-align: justify;">Ambientes favoráveis</h3>
                <p class="lead lh-base fw-normal text-justify mt-4 ms-5">Contamos com uma infraestrutura moderna, laboratórios e salas equipadas
                    com televisões, computadores, notebooks, impressoras 3D e muitos outros componentes propícios aos projetos que desenvolvemos
                    durante a jornada dos estudantes. Ademais, nossa instituição é envolta em um grande jardim, com árvores de pequeno e médio porte,
                    plantas e flores, provendo ao nosso corpo estudantil um ambiente mais acolhedor e aconchegante.
                    Na ETEC Zona Leste, você encontrará um espaço favorável para o impulsionar seu crescimento acadêmico e profissional.</p>
            </div>
            <div class="col-md-3 order-md-2 mt-3 ms-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="600" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" src="/img/image4.png"></img>
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