<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - ETEC Zona Leste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/home.css">
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
                            <li><a class="dropdown-item" href="#">Administração</a></li>
                            <li><a class="dropdown-item" href="#">Contabilidede</a></li>
                            <li><a class="dropdown-item" href="#">Novotec Desenvolvimento de Sistemas AMS</a></li>
                            <li><a class="dropdown-item" href="#">Desenvolvimento de Sistemas</a></li>
                            <li><a class="dropdown-item" href="#">Logística</a></li>
                            <li><a class="dropdown-item" href="#">Recursos Humanos</a></li>
                            <li><a class="dropdown-item" href="#">Serviços Jurídicos</a></li>
                        </ul>
                    </li>

                    <!-- Instituição -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" data-bs-toggle="dropdown" aria-expanded="false">
                            Instituição
                        </a>

                        <!-- Opções -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Nossa história</a></li>
                            <li><a class="dropdown-item" href="#">Infraestrutura</a></li>
                            <li><a class="dropdown-item" href="#">Plano Plurianual de Gestão</a></li>
                            <li><a class="dropdown-item" href="#">Manual do Aluno</a></li>
                            <li><a class="dropdown-item" href="#">Logística</a></li>
                            <li><a class="dropdown-item" href="#">Regimento Comum das Etecs</a></li>
                        </ul>
                    </li>

                    <!-- Departamentos -->
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" role="button" style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" data-bs-toggle="dropdown" aria-expanded="false">
                            Departamentos
                        </a>

                        <!-- Cursos da ETEC -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">APM - Associação de Pais e Mestres</a></li>
                            <li><a class="dropdown-item" href="#">Coordenação de Cursos</a></li>
                            <li><a class="dropdown-item" href="#">Direção</a></li>
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
    <img src="/img/home.etec.webp" class="img-fluid" width="100%;" height="100%;"></img>
    
    <!-- <div class="position-relative overflow-hidden text-center"> p-3 p-md-5 m-md-3 -->
        <!-- <img src="/img/home.etec.webp" class="img-fluid" width="100%;" height="100%;"></img>
    </div> -->

    <!-- Barra de pesquisa:  -->
    <div class="container bg-body-tertiary">
        <div class="row bg-body-tertiary"> <!-- align-items-center -->
            <div class="col">&nbsp;</div>
            <div class="col bg-body-tertiary">
                <div class="container-fluid mt-5 mb-5 bg-body-tertiary">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="O que está buscando?" aria-label="Search" height="65px;">
                    </form>
                </div>
            </div>
            <div class="col">&nbsp;</div>
        </div>
    </div>

    <!-- Texto e imagem: -->
    <div class="row featurette mt-5">
        <div class="col-md-7 order-md-2 mt-5">
            <h3 class="featurette-heading fw-bold lh-1">O que a ETEC pode fazer pelo seu FUTURO ainda HOJE?</h3>
            <p class="lead lh-base fw-normal text-justify mt-4">Sabemos que às vezes pensar no futuro pode parecer assustador. Traçamos carreiras e planos 
                profissionais a todo momento em nossos pensamentos, numa busca constante pelo caminho que nos trará o melhor. Mas saiba que a ETEC Zona Leste conhece 
                os seus anseios e, está aqui, disposta a te apresentar um novo caminho! O futuro não precisa ser assustador. Suas habilidades técnicas e profissionais 
                podem ser desenvolvidas enquanto você aprende com a gente. Em nossa instituição, nós valorizamos os pequenos passos. 
                Dê o seu primeiro passo hoje em direção ao futuro. Faça parte da ETEC!</p>
        </div>
        <div class="col-md-5 order-md-1 mt-5">
            <img src="/img/image.png" class="rounded float-start"></img>
        </div>
    </div>

</body>

</html>