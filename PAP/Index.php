<?php
  include "connection.php";
  ?>
<!DOCTYPE html>
<html lang='eng'>
<title>Museu de Marinha</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>
<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-blue fixed-top">
    <div class="container">
    <a class="js-scroll-trigger" href="#page-top"><img src="img/marinha1.png" width='100px' height="75"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="col-auto">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul style="font-size: 18px" class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="js-scroll-trigger nav-link" href="#folheto">folheto<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="js-scroll-trigger nav-link" href="#a-banda">conheça a B.A.</a>
        </li>
        <li class="nav-item">
          <a class="js-scroll-trigger nav-link" href="#marcha">MARCHA DOS MARINHEIROS</a>
        </li>
        <li class="nav-item">
          <a class="js-scroll-trigger nav-link" href="#expo">exposição digital</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://ccm.marinha.pt/pt">+ cultura</a>
        </li>
        <li class="nav-item" style='margin-left:7px; margin-top:-2px'>
          <a class="nav-link" href="login/login1.php"><img src=img/loginicon.png width=15px height=20px></a>
        </li>
      </ul>
    </div>
    </div>
</div>
  </nav>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-110 img-fluid" src="img/Musica.jpg" alt="First slide">
        <div class="carousel-caption" style="margin-bottom: 17%;">
        <div class='bgcarousel'>
        <h5>Questionário</h5>
        <a class="btn btn-outline-light text-light" href="./inquerito" role="button">Preencher</a>
        </div>
      </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-110 img-fluid" src="img/musica2.jpg" alt="Second slide">
        <div class="carousel-caption" style="margin-bottom: 17%;">
        <div class='bgcarousel'>
        <h5>Questionário</h5>
        <a class="btn btn-outline-light text-light" href="./inquerito" role="button">Preencher</a>
        </div>
      </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-110 img-fluid" src="img/Musica3.jpg" alt="First slide">
        <div class="carousel-caption" style="margin-bottom: 17%;">
        <div class='bgcarousel'>
        <h5>Questionário</h5>
        <a class="btn btn-outline-light text-light" href="./inquerito" role="button">Preencher</a>
        </div>
    </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  <div style="font-size: 20px" class="aboutus" id='folheto'>
    <div class="container">
      <p><br></p>
      <h1>Folheto</h1>
      <div class="row">
        <div class="col">
            Aqui pode ver o folheto que o vai guiar no Museu de Marinha durante a sua visita.<p></p>
            <iframe src="pdf/folheto.pdf#toolbar=0&zoom=70" width="100%" height="635px"></iframe><p><br></p>

            <p></p>
            Se quiser enviar o folheto para o seu email coloque-o aqui:<p></p>
            <form action="insereemail.php" method="post">
                <input style="color:#04204a" type="email" name="email"><p></p>
                <button  class="btn btn-outline-primary" style="color: #66a3ff" type="submit"> Submeter </button>
            </form><p></p>
        </div>
      </div>
    </div>
  </div>
  <div style="font-size: 20px" class="aboutus" id='a-banda'>
    <div class="container">
      <p><br></p>
      <h1>Conheça a Banda da Armada no Museu de Marinha</h1>
      <div class="row">
        <div class="col">
          A Marinha Portuguesa, também conhecida de modo extra-oficial como Armada Portuguesa, é o ramo das Forças Armadas Portuguesas que tem por missão cooperar, de forma integrada, na defesa militar de Portugal, através da realização de operações navais.</p>
          A missão da Marinha é “Contribuir para que Portugal use o mar”. Para cumprir a missão, a Marinha definiu três funções: Dissuasão, defesa militar e apoio à política externa; Segurança e autoridade do Estado; Desenvolvimento económico, científico e cultural.</p>
          <p><br></p>
          <h3>HISTÓRIA DA BANDA</h3>
Ao longo dos mais de quinhentos anos de existência de formações musicais na Armada, estas sofreram inúmeras alterações, desde a designação ao número de elementos que as constituíram, tornando a enumeração praticamente impossível.
Na realidade, as fontes históricas só são razoavelmente seguras, sobre esta matéria, a partir da primeira metade do século XVIII, e indicam que em agosto de 1740 existia na Armada Real uma banda intitulada "Charamela".<p></p>
 
A 3 de abril de 1903 a Banda dos Marinheiros da Armada grava, no Quartel do Corpo de Marinheiros, em Alcântara, aquele que é considerado o primeiro disco produzido em Portugal, um documento histórico e fonográfico raríssimo. A capa contém o selo real e a inscrição “Oferta do Maestro António Maria Chéu ao rei D. Carlos”. A gravação, efetuada pela The Gramophone and Typewriter Ltd. de Londres, pretendia comemorar a visita de Eduardo VII de Inglaterra a Portugal, através da perenização de uma das mais notórias obras musicais relativas à identidade nacional, os Cantos Populares Portuguezes nº2 de Rodriguez.<p></p>

Fruto do esforço de renovação e dinamização levado a cabo nos últimos anos, os resultados refletem-se no grande valor e visibilidade nacional e internacional das suas atuações ao vivo e na constante gravação e edição de CD’s. Na realidade, ao longo dos tempos têm pertencido, e continuam a despontar na Banda da Armada, vários compositores de reconhecido mérito e alguns dos melhores instrumentistas portugueses muitos dos quais com formação superior e com uma média etária de 33 anos. O futuro vem, por isso, impregnado de esperança e de vontade determinada de perpetuar e prestigiar o legado cultural do país na Marinha, através da música.<p></p></p>
        </div>
      </div>
    </div>
    <div class="container">
      <p><br></p>
<h3>DISCOGRAFIA</h3>
<div class="row">
  <div class="col">
      A discografia é uma forma de materializar a obra produzida ao longo dos tempos e, ao mesmo tempo, permite que o público a possa ter consigo, para desfrutar a qualquer momento.<p></p>
      São inúmeras as composições que fazem parte da discografia da Banda da Armada. Aqui se apresentam alguns exemplos:<p><br></p>
      <b style="color:#04204a;font-size:18px">Marcha Dos Marinheiros</b>
      <p></p>
      <audio controls>
        <source src="mp3/marcha.mp3" type="audio/mp3">
      </audio><p></p>
      <b style="color:#04204a;font-size:18px">STE-001</b><p></p>
      <audio controls>
        <source src="mp3/STE-001.wav" type="audio/wav">
      </audio><p></p>
      <b style="color:#04204a;font-size:18px">STE-005</b><p></p>
      <audio controls>
        <source src="mp3/STE-005.wav" type="audio/wav">
      </audio>
</div>
</div>
</div>
  </div>
  <div style="font-size: 20px" class="aboutus" ID='marcha'>
    <div class="container">
      <p><br></p>
      <h1>MARCHA DOS MARINHEIROS</h1>
      <div class="row">
        <div class="col">
            ​​A Marcha dos Marinheiros é um ícone para qualquer marinheiro e para a comunidade em geral. Aqui pode ler sobre a história e aceder a informação sobre a pauta.
            <div class="container">
                <p><br></p>
              <h3>HISTÓRIA</h3>
              </div>
              A Marcha dos Marinheiros foi cantada pela primeira vez por Raul de Carvalho no filme “Bocage” de Leitão de Barros em 1936, com música de Carlos Calderon e letra de Matos Sequeira e Pereira Coelho e foi introduzida na Banda da Armada pela mão do Maestro Primeiro Tenente Fortunato de Sousa que fez a adaptação para a Banda que a tornou popular por todo o país.<p></p>
              <div class="container">
                <p><br></p>
              <h3>PARTITURA</h3>
              </div>
              Aprenda a tocar e a cantar a Marcha dos Marinheiros. Aqui pode encontrar a partitura e a letra:
              <iframe src="pdf/partitua.pdf#zoom=100&toolbar=0" width="100%" height="610px"></iframe>
          </div>
          </div>
  </div>
  </div>
  <div style="font-size: 20px" class="aboutus" id='expo'>
    <div class="container">
      <p><br></p>
      <h1>Exposição Digital</h1>
      <div class="row">
        <div class="col">
            <p style="font-size: 20px">Esta exposição pretende celebrar os 100 anos do primeiro raid aéreo entre Lisboa e Funchal, ocorrido em 22 de Março de 1921, e protagonizado pelos pilotos Sacadura Cabral, Gago Coutinho e Ortins Bettencourt, acompanhados do mecânico Roger Soubiran, a bordo do hidroavião Felixstowe F.3<p></p>

              Para além de evocar a importância das figuras em questão, a exposição pretende igualmente dar a conhecer os objectivos da viagem. Neste caso, era o de testar o sistema de navegação aérea, usando-se para o efeito o primeiro sextante com horizonte artificial concebido e aperfeiçoado por Gago Coutinho, e que podia ser usado a bordo das aeronaves, e outro instrumento construído com a colaboração de Sacadura Cabral, a que deram o nome de «Plaqué de abatimento» ou «corrector de rumos», que permitia calcular graficamente o ângulo entre o eixo longitudinal da aeronave e o rumo a seguir, considerando a intensidade e direcção do vento.<P></P>
              
              Concluída a viagem após cerca de sete horas e meia, ficou demonstrado efectivamente o valor destes instrumentos que iriam ser determinantes no sucesso da travessia aérea do Atlântico Sul entre Lisboa e o Rio de Janeiro, entre 30 de Março e 17 de Junho de 1922.<p></p></p>
            <iframe src="pdf/expo.pdf#zoom=75&toolbar=0" width="100%" height="610px"></iframe><p><br></p>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="footer-left">
      <img src="img/marinha.png" alt="">
      <p>+351 21 097 7388</p>
      <p>geral.museu@marinha.pt</p>
      <div class="socials">
          <a href="https://www.facebook.com/comissaoculturaldemarinha/"><i class="fab fa-facebook-f text-white mr-4"></i></a>
          <a href="https://twitter.com/MarinhaPT"><i class="fab fa-twitter text-white mr-4"></i></a>
          <a href="https://www.instagram.com/museumarinha/"><i class="fab fa-instagram text-white mr-4"></i></a>
          <a href="https://www.youtube.com/channel/UC0cHezfaYOnblST79t5-8fA"><i class="fab fa-youtube text-white mr-4"></i></a></div>
          <div class="box">
          <p>© 2021 COMISSÃO CULTURAL DE MARINHA</p>
          <p style="font-size: 18px"><a href="acessibilidade.html">Acessibilidade</a> | <a href="infolegal.html">Info Legal</a> | <a href="cookies.html">Cookies</a></p>
        </div>
        </div>
      </div>
      <ul class="footer-right">
        <li>
          <h2>Sobre Nós</h2>
          <ul style="font-size: 20px" class="box">
            <li><a href="museus.html">O Museu</a></li>
            <li><a href="horario.html">Horarios</a></li>
            <li><a href="servicos.html">Serviços</a></li>
          </ul>
        </li>
        <li class="features">
          <h2>Links uteis</h2>
          <ul style="font-size: 20px" class="box">
            <li><a href="https://ccm.marinha.pt/pt/museu/atividades/conversasgamma">Gamma</a></li>
            <li><a href="https://icom-portugal.org/">ICOM</a></li>
            <li><a href="https://www.icmm.com/">ICMM</a></li>
            <li><a href="https://apmuseologia.org/">APOM</a></li>
          </ul>
        </li>
        </ul>
        </div>
        </div>
      </div>
    </div>
  </footer>
<script src="JS/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src='JS/popper.min.js'></script>
<script src="JS/bootstrap.min.js"></script>
<script src="JS/scripts.js"></script>
</body>
</html>
<?php
  include "close.php";
  ?>