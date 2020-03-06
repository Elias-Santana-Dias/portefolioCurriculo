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
                <p class="computador white-text center sub-negrito">Entre em contato comigo</p>
            </hgroup>
        </div>
        <nav class="nav-color">
            <div class="nav-wrapper container-nav">
            <a href="#!" class="brand-logo">Logo</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="public.php">Profissional</a></li>
                <li><a  href="#">Contato</a></li>
            </ul>
            </div>
        </nav>
        
        <ul class="sidenav" id="mobile-demo">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="public.php">Profissional</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </header>

    <!-- Aqui vem o conteúdo do site -->
      <section class="container">
        <form action="enviar.php" method="post" class="form-trans">
          <h2 id ='res' class="eventos white-text center">Informações para contato</h2>
          <div class="row">
            <div class="col s12 m12 l6">
              <div class="input-field">
                <input id="nome" name= "nome" type="text" class="validate">
                <label for="nome">Nome:</label>
              </div>
              <div class="input-field">
                <input id="assunto" name="assunto" type="text" class="validate">
                <label for="assunto">Assunto:</label>
              </div>
              <div class="input-field">
                <input id="email" name="email" type="email" class="validate">
                <label for="email">Email:</label>
              </div>
            </div>
            <div class="col s12 m12 l6">
              <div class="input-field">
                <textarea id="textarea" name="mensagem" class="materialize-textarea"></textarea>
                <label for="textarea">Mensagem</label>
              </div>
              <button class="btn-large waves-effect waves-light col s12">Enviar</button>
            </div>
          </div>
        </form>
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