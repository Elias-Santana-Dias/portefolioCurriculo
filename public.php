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
                <p class="computador white-text center sub-negrito">Profissional dedicado e comprometido com o futuro do seu negócio.</p>
            </hgroup>
        </div>
        <nav class="nav-color">
            <div class="nav-wrapper container-nav">
            <a href="#!" class="brand-logo">Logo</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="#">Profissional</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
            </div>
        </nav>
        
        <ul class="sidenav" id="mobile-demo">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="#">Profissional</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </header>

    <!-- Aqui vem o conteúdo do site -->

    <section class="bege">
        <article>
            <div class="row container" data-anime>
                <aside class="col s12 push-m3 m6 justificado">
                    <p class="quote">
                        "Faça o teu melhor, na condição que você tem, enquanto você não tem condições melhores, para fazer melhor ainda!"
                    </p>
                    <p class="center">
                       <a target = '_blank' id = 'quote-name' href="https://www.pensador.com/autor/mario_sergio_cortella/"> Mario Sergio Cortella</a>
                    </p>
                </aside>
            </div>
            <div class="row container">
                <aside class="col s12 push-m2 m8 justificado" data-anime>
                    <h2 class="eventos center">Meu caminho profissional</h2>
                    <p class="bold">
                        Tenho o propósito de um bom desempenho profissional para contribuição do crescimento de sua empresa.
                        Apresento meu interesse em fazer parte e coloborar com a equipe de trabalho da empresa.Tenho iniciativa,vontade de vencer e alto espirito de participação.
                        Sinto-me preparado para qualquer função dentro dos meus conhecimentos. Desde já agradeço pela atenção,colocando-me á disposição para maiores esclarecimentos.
                    </p>
                </aside>
            </div>
        </article>
    </section>

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