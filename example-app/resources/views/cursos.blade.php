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
                        <a class="nav-link " style="margin-top: 5px; margin-left: 10px; margin-right: 10px;" aria-current="page" href="/home">Início</a>
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
                            <li><a class="dropdown-item" href="instituicao/#nossa-his"> História</a></li>
                            <li><a class="dropdown-item" href="instituicao/#nossa-infra"> Infraestrutura</a></li>
                            <li><a class="dropdown-item" href="instituicao/#plano-plurianual-de-gestao">Plano Plurianual de Gestão</a></li>
                            <li><a class="dropdown-item" href="instituicao/#manual-do-aluno">Manual do Aluno</a></li>
                            <li><a class="dropdown-item" href="instituicao/#regimento-comum-das-etecs">Regimento Comum das Etecs</a></li>
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
        <div class="col-md-7 order-md-2 mt-5 ms-5">
            <h3 class="featurette-heading fw-bold lh-base ms-5" style="text-align: justify;" id="secao-adm">Administração</h3>
            <p class="lead lh-base fw-normal text-justify mt-4 ms-5">Como funcionam as organizações, desde empresas privadas até ONGs, passando por
                órgãos públicos, comércio e indústria. O estudante vai precisar de conhecimentos de língua portuguesa, matemática, história e geografia
                para compreender os principais assuntos do curso, como história da administração, evolução das organizações ao longo do tempo,
                contabilidade, leis que regulam o funcionamento das empresas e redação de documentos. O aluno vai aprender ainda a analisar as chances de
                um negócio ou produto ser bem-sucedido e o comportamento do consumidor. Estudará também técnicas de atendimento ao cliente,
                empreendedorismo (iniciativas para realizar novos negócios) e como uma organização planeja alcançar seus objetivos e define suas metas
                para o futuro.O candidato que ingressar no curso técnico de Administração, na modalidade AMS, poderá prosseguir os estudos em uma Fatec
                no curso superior de tecnologia em Processos Gerenciais.</p>
        </div>
        <div class="col-md-3 order-md-1 mt-5 ms-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto ms-5" style="width: 400px; height: 300px; margin-top: 60px;" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" src="/img/adm1.png"></img>
        </div>
    </div>

    <!-- (2) Texto e imagem: -->
    <div class="row featurette mt-5">
        <div class="col-md-7 order-md-1 mt-5 ms-5">
            <h3 class="featurette-heading fw-bold lh-base ms-5" id="secao-contabilidade">Contabilidade</h3>
            <p class="lead lh-base fw-normal text-justify mt-5 ms-5">Matemática e língua portuguesa são disciplinas importantes para entender
                a contabilidade, que é a ciência responsável por organizar as contas de uma empresa e registrar seus bens patrimoniais
                (como prédios, veículos e máquinas, entre outros). Além da matemática básica, que serve como ferramenta para calcular o lucro
                ou o prejuízo de uma empresa, o estudante aprenderá matemática financeira, utilizada para operações de financiamento e cálculo
                de taxas de juros, por exemplo. O aluno também vai conhecer quais são as regras da contabilidade e todas as leis que estabelecem
                o que as empresas podem fazer e quais impostos devem pagar. Na área de Informática, o estudante vai aprender a fazer planilhas
                e a usar programas de computador específicos para a contabilidade.</p>
        </div>
        <div class="col-md-3 order-md-2 mt-5 ms-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="width: 100%; height: 75%; margin-top: 45px;" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" src="/img/cont.png"></img>
        </div>
    </div>

    <!-- (3) Texto e imagem: -->
    <div class="row featurette mt-5">
        <div class="col-md-7 order-md-2 mt-3 ms-5">
            <h3 class="featurette-heading fw-bold lh-base ms-5" id="secao-ds">Desenvolvimento de Sistemas</h3>
            <p class="lead lh-base fw-normal mt-4 ms-5">O programa AMS – Formação Articulada Médio-Técnica e Superior –
                oferece uma formação completa em cinco anos, integrando o Ensino Médio (Etec) com o Ensino Superior Tecnológico (Fatec).
            </p></br>
            <p class="lead lh-base fw-normal ms-5">O curso Novotec em Desenvolvimento de Sistemas AMS é oferecido na Etec
                e Fatec Zona Leste desde o ano de 2019, sendo esta escola pioneira na implantação deste novo modelo não só no
                Centro Paula Souza (CPS) como em São Paulo e no Brasil e conta com parceria com a IBM, que propicia mentorias aos alunos
                durante o Ensino Médio-Técnico assim como possibilita estágio aos alunos durante o Ensino Superior.
            </p></br>
            <p class="lead lh-base fw-normal ms-5">O aluno ingressa no Ensino Médio com Habilitação Profissional de Técnico
                no curso de Desenvolvimento de Sistemas (DS) na Etec da Zona Leste, cursa os 3 anos de Ensino Médio-Técnico já na Fatec Zona Leste,
                podendo, após concluir esta fase, ingressar diretamente sem processo seletivo (vestibular) no Curso Superior
                em Análise e Desenvolvimento de Sistemas (ADS-AMS) na Fatec Zona Leste.</p>
        </div>
        <div class="col-md-3 order-md-1 ms-5" style="margin-top: 150px;">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto ms-5" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" src="/img/image4.png"></img>
        </div>
    </div>

    <!-- (4) Texto e imagem: -->
    <div class="row featurette mt-5">
        <div class="col-md-7 order-md-1 mt-5 ms-5">
            <h3 class="featurette-heading fw-bold lh-base ms-5" id="secao-log">Logística</h3>
            <p class="lead lh-base fw-normal text-justify mt-3 ms-5">Logística é o planejamento do caminho feito por um produto ou serviço até
                chegar ao cliente de forma organizada, rápida e econômica. Para planejar esse caminho, o estudante vai precisar de conhecimentos
                de matemática, geografia e física. O aluno aprenderá sobre os processos de compra de matérias-primas,
                incluindo a escolha dos fornecedores, o registro dos pedidos de compra e o recebimento dos materiais adquiridos.</p></br>
            <p class="lead lh-base fw-normal text-justify ms-5">O estudante vai aprender também como se deve movimentar as cargas e os produtos
                dentro de um estoque para decidir se utilizará, por exemplo, um carrinho ou uma empilhadeira, e como se deve armazenar cada tipo
                de produto e por quanto tempo. Vai estudar ainda sobre a entrega das mercadorias compradas pelos clientes: como organizar a carga para
                o transporte, qual a embalagem mais adequada (em caixas de papelão ou madeira, em páletes ou contêineres), qual é o tipo de transporte
                mais adequado para o produto e para o cliente (caminhões, embarcações, trem ou avião), e quais são as principais rotas que podem ser
                utilizadas. Além disso, o estudante aprenderá sobre os custos envolvidos em cada uma das atividades.</p></br>
            <p class="lead lh-base fw-normal text-justify ms-5">O candidato que ingressar no curso técnico de Logística, na modalidade AMS,
                poderá prosseguir os estudos em uma Fatec no curso superior de tecnologia em Logística.</p>
        </div>
        <div class="col-md-3 order-md-2 mt-5 ms-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="margin-top: 75px;" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" src="/img/log.png"></img>
        </div>
    </div>

    <!-- (5) Texto e imagem: -->
    <div class="row featurette mt-5">
        <div class="col-md-7 order-md-2 mt-5 ms-5">
            <h3 class="featurette-heading fw-bold lh-base ms-5" id="secao-rh">Recursos Humanos</h3>
            <p class="lead lh-base fw-normal text-justify mt-4 ms-5">Anuncia vagas de emprego, descrevendo as atribuições do cargo a ser preenchido;
                aplica testes em processos seletivos; realiza cálculos para determinar os valores que serão descontados no salário dos funcionários,
                como o Imposto de Renda e a contribuição ao INSS, além de porcentagem referente a benefícios, como vale-transporte, plano de saúde etc.;
                insere informações no sistema para a geração de demonstrativos de pagamentos (holerites ou contracheques);
                cuida da documentação necessária para aposentadoria, contratação e demissão de profissionais, inclusive preenchendo informações na
                carteira de trabalho; organiza e arquiva documentos do setor; registra e controla período de férias e afastamento de funcionários; e auxilia no treinamento e capacitação dos empregados.</p>
        </div>
        <div class="col-md-3 order-md-1 mt-5 ms-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto ms-5" style="margin-top: 45px;" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" src="/img/rh.png"></img>
        </div>
    </div>

    <div class="row featurette mt-5">
        <div class="col-md-7 order-md-1 mt-3 ms-5">
            <h3 class="featurette-heading fw-bold lh-base mt-5 ms-5" id="secao-jur">Serviços Jurídicos</h3>
            <p class="lead lh-base fw-normal mt-3 ms-5">
                Como o foco do curso está nas leis e normas, o aluno vai estudar as áreas do Direito. Vai aprender sobre a Constituição Federal
                (direito constitucional), a punição aos crimes (direito penal), as regras para relações e disputas entre as pessoas e também as
                normas para disputas e questões familiares (direito civil), o funcionamento dos órgãos públicos (direito administrativo), as
                regras para os negócios entre empresas e pessoas (direito empresarial), como deve ser a relação entre patrão e empregado,
                considerando direitos e deveres de cada um (direito do trabalho), cobrança de tributos, como os impostos (direito tributário)
                e a proteção garantida aos consumidores (direito do consumidor), entre outros assuntos.</p></br>
            <p class="lead lh-base fw-normal ms-5">O estudante vai conhecer também como são elaborados e redigidos os processos,
                contratos e documentos jurídicos. Além de aprender sobre as leis, o aluno vai estudar conceitos de administração de empresas,
                matemática financeira, técnicas de atendimento ao cliente e inglês instrumental. A língua portuguesa é fundamental.</p>
        </div>
        <div class="col-md-3 order-md-2 mt-3 ms-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="margin-top: 145px;" src="/img/jur.png"></img>
        </div>
    </div>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 m text-body-secondary">&copy; 2024 ETEC Zona Leste</p>

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