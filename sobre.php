<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <!--Cabeça do HTML -->
    <header>
        <div id = "head-parallax" class="parallax-container">
            <div class="parallax"><img src="img/teclado.jpg"></div>
            <hgroup>
                <h1 class="white-text center fadein">Elias Santana Dias</h1>
                <p class="computador white-text center sub-negrito">Criador da pagina apresentada neste momento</p>
            </hgroup>
        </div>
        <nav class="nav-color">
            <div class="nav-wrapper container-nav">
            <a href="#!" class="brand-logo">Logo</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="public.php">Profissional</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
            </div>
        </nav>
        
        <ul class="sidenav" id="mobile-demo">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="public.php">Profissional</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </header>

    <!-- Aqui vem o conteúdo do site -->
    <section class="row">
        <div class="col s12 offset-m2 m4" data-anime="left">
            <h4 class="nome-autor">Sobre</h4>
            <p class="justificado bold">
                Em minha jornada pelo meio profissional tive a oportunidade de conhecer pessoas que me ajudaram no crecimento pessoal e profissional. O meu primeiro trabalho formal foi na empresa alimenticia Panco. Atuando como aprendiz dei suporte a toda a fabrica enquanto ainda estava aprendendo a ser um profissional e de acordo com os funcionarios e líderes me sai muito bem.
            </p>
            <div>
                <button class="mybtn">Download do CV</button>
            </div>
        </div>
        <div class="col s12 m6" data-anime='right'>
            <figure>
                <img class="responsive-img" src="img/escritorio.jpg" alt="Sobre min">
            </figure>
        </div>
    </section>
    <article class="bege">
        <div class="row container">
            <aside class="col s12 m6">
                <h2 class="eventos center">Interesses e pequisas</h2>
                <p class="interesses" data-anime>
                    <span class="bold"> Ruby</span> <br/>
                    Desenvolvimento web
                </p>
                <p class="interesses" data-anime>
                    <span class="bold"> python </span> <br/>
                    Python voltado a parte de I.A
                </p>
                <p class="interesses" data-anime>
                    <span class="bold"> Unity3D</span> <br/>
                    Criação e manipulações de games
                </p>
                <p class="interesses" data-anime>
                    <span class="bold"> C# e derivados</span> <br/>
                    Criação programas windows
                </p>
            </aside>

            <aside class="col s12 m6">
                <h2 class="eventos center">Educação</h2>
                <p class="interesses" data-anime>
                    <span class="bold"> <time>2023 - 2023</time></span> <br/>
                    <span class="bold">Primeira Universidade</span> <br/>
                    Sou um título. Clique e edite
                </p>
                <p class="interesses" data-anime>
                    <span class="bold"> <time>2023 - 2023</time></span> <br/>
                    <span class="bold"> Segunda Universidade</span> <br/>
                    Sou um título. Clique e edite
                </p>
                <p class="interesses" data-anime>
                    <span class="bold"> <time>2023 - 2023</time></span> <br/>
                    <span class="bold">Terceira Universidade</span> <br/>
                    Sou um título. Clique e edite
                </p>
            </aside>

        </div>
    </article>

    <!-- Rodapé do site -->
    <?php
      require_once 'rodape/rodape.php';
    ?>

    <!-- importação de jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!-- importação JS -->
    <script src="js/script.js"></script>
</body>
</html>