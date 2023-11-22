<?php
include( 'layout/header.php' );
?>

<body>

<!-- NAV  -->
<?php
include( 'layout/nav.php' );
?>
<!-- FIM DA NAV -->

<!-- menu lateral começa aqui -->
<?php
include( 'layout/menu.php' );
?>

<!-- CONTEUDO INICIO -->
<div class = 'all-conteudo'>
<section class = 'conteiner-principal'>
<div class = 'main-content container-fluid'>
<div class = 'row'>
<!-- Begin row -->
<div class = 'col-md-1'></div>
<div class = 'col-md-10 col-sm-8 container-fluid'>

<h2 class = 'Titulo fw-bolder'>Técnicas de Negociação e Administração de Conflitos</h2>
<!-- tirei o hr por que o menu não estava ficando sobreposto -->
<!-- <hr> -->

<div class="text-left mt-3">
  <p>Tendo em vista tudo que mostramos, os tipos, os estágios e as reações dos conflitos, é hora de conferirmos algumas técnicas que podem ser utilizadas para solucionar situações desse tipo na sua empresa.</p>
</div>

      <div class="container">
        <ul class="timelineul" id="timeLine">
          <li>
            <div class="back-green">
              <time>3.1 - Promova uma comunicação eficiente e facilite o diálogo</time>
              <p>Os conflitos são causados pela falta de comunicação, portanto para administrar e até mesmo prevenir situações conflituosas, é necessário que haja diálogo entre colaboradores, equipes e líderes.</p>
              <p>Uma cultura de <strong>comunicação</strong> aberta , com troca de informações de forma transparente já é um primeiro passo para até mesmo prevenir conflitos.</p>
            </div>
            
          </li>
          <li>
            <div class="back-green">
              <time>3.2 - Dê preferência ao pronome “nós”</time>
              <p>Uma técnica para negociação e administração de conflitos é a utilização da palavra nós.</p>
              <p>Evite apontar o dedo para outras pessoas ou se colocar no centro de tudo, como se apenas o seu lado importasse, é importante entender que todos estão no mesmo barco.</p>
            </div>
          </li>
          <li>
            <div class="back-green">
              <time>3.3 - Faça pesquisas de clima organizacional</time>
              <div >
              <p>Os conflitos impactam diretamente no clima organizacional, nesse sentido a realização de pesquisas de clima ajuda a identificar eventuais conflitos que podem inclusive estar no estágio latente.</p>
              <p>Esse tipo de pesquisa vai ajudar a chegar na causa-raiz dos conflitos para, assim, solucioná-los de uma vez por todas e impedir que eles venham a repetir.</p>
              </div> 
             </div>
            </div>
          </li>
        </ul>
        
      </div>
       
         <!-- fim da timeline -->

</section>


        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true"> <i
                    class="fa-solid fa-chevron-left"></i> Voltar </a>
            <a href="topico04.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                    class="fa-solid fa-chevron-right"></i></a>
        </div>

        <!-- barra de progresso embaixo -->
        <div id="progress-bar"></div>
    </div>

    <!-- BUTTON BACK TO TOP (JAMILLE) -->
    <div id="back_to_top">
        <div id="btn_back">
            <i id="icon_up" class="fa-solid fa-arrow-up"></i>
        </div>
    </div>

<?php
include('layout/footer.php' );
?>
</body>

</html>