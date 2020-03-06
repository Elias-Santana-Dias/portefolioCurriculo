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

<body id = "inicio">
    <!--Cabeça do HTML -->
    <header>
        <div id = "head-parallax" class="parallax-container">
            <div class="parallax"><img src="img/teclado.jpg"></div>
            <hgroup>
                <h1 class="white-text center fadein">Elias Santana Dias</h1>
                <p class="computador white-text center sub-negrito">Técnico em infomática e desenvolvedor de Websites</p>
            </hgroup>
        </div>
        <nav class="nav-color">
            <div class="nav-wrapper container-nav">
            <a href="#!" class="brand-logo">Logo</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Inicio</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="public.php">Profissional</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
            </div>
        </nav>
        
        <ul class="sidenav" id="mobile-demo">
            <li><a href="#">Inicio</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="public.php">Profissional</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </header>

    <!-- Aqui vem o conteúdo do site -->
    <section class="row container">
        <div class="col s12 m6">
            <figure data-anime="left">
                <img id = "autorimg" class="responsive-img" src="img/elias.PNG" alt="Autor do Site">
            </figure>
        </div>
        <div class="col s12 m6" data-anime='right'>
            <h4 class="nome-autor">Elias Santana</h4>
            <p class="justificado bold sombra">
              Oi!!! Elias ... nunca tive muita intimidade com computadores, pois desde criança não tinha uma micro para desenvolver conhecimento sobre o assunto porém passei a me interessar por causa dos games e passei a aprender cada vez mais e mais. Hoje estudoi programação na ETEC durante o periodo de 1 ano e meio e hoje estudo por conta propria #AMOTECNOLOGIA.
            </p>
            <div>
            <a href="sobre.php"><button class="mybtn"> Leia mais</button></a>
            </div>
        </div>
    </section>

      <!-- Formações -->
    <article class="row bege">
        <div class="col s12 eventos center" data-anime>
            Formações
        </div>
        <aside class="col s12 m4" data-anime='left'>
            <h2 class="center"><i class="material-icons">work</i></h2>
            <p class="sub-negrito">
                Técnico em Desenvolvimento de sistemas
            </p>
            <p class="white-text center"><time>11.12.2019</time></p>
            <div class="center">
                <button class="mybtn">Detalhes</button>
            </div>
        </aside>

        <aside class="col s12 m4" data-anime>
            <h2 class="center"><i class="material-icons">work</i></h2>
            <p class="sub-negrito">
                Curso de aperfeiçoamento de digitação
            </p>
            <p class="white-text center"><time>20.12.2018</time></p>
            <div class="center">
                <button class="mybtn">Detalhes</button>
            </div>
        </aside>

        <aside class="col s12 m4" data-anime='right'>
            <h2 class="center"><i class="material-icons">work</i></h2>
            <p class="sub-negrito">
                Curso Profissionalizante em Informática e hardware
            </p>
            <p class="white-text center"><time>30.11.2018</time></p>
            <div class="center">
                <button class="mybtn">Detalhes</button>
            </div>
        </aside>
    </article>

    <!-- Cards para linguagens -->
    <article class="row container" data-anime>
        <h2 class="eventos center">
            Linguagens
        </h2>
        <div class="col s12 m6 l4">
            <div class="card medium">
              <div class="card-image">
                <img class="responsive-img" src="img/HTMLCSS.jpg">
              </div>
              <div class="card-content">
                <span class="card-title">Linguagem HTML5 e CSS3 para estilizações</span>
              </div>
              <div class="card-action">
                <a href="#">Visitar Pagina</a>
              </div>
            </div>
        </div>

        <div class="col s12 m6 l4">
            <div class="card medium">
              <div class="card-image">
                <img class="responsive-img" src="img/js.png">
              </div>
              <div class="card-content">
                <span class="card-title">Linguagem Javascript para criar interações</span>
                <p>
                  Necessário principalmente para as animações.
                </p>
              </div>
              <div class="card-action">
                <a href="#">Visitar Pagina</a>
              </div>
            </div>
        </div>

        <div class="col s12 m6 l4">
            <div class="card medium">
              <div class="card-image">
                <img class="responsive-img" src="img/php.png">
              </div>
              <div class="card-content">
                <span class="card-title">Para trabalhar com o back-and</span>
                <p>
                  Sendo mais especifico foi utilizado POO na pagina de contato para enviar o email para o destinatario.
                </p>
              </div>
              <div class="card-action">
                <a href="#">Visitar Pagina</a>
              </div>
            </div>
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