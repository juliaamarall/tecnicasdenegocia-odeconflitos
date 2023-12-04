<?php
include('layout/header.php');
?>

<body>

  <!-- NAV  -->
  <?php
  include('layout/nav.php');
  ?>
  <!-- FIM DA NAV -->

  <!-- menu lateral começa aqui -->
  <?php
  include('layout/menu.php');
  ?>

  <!-- CONTEUDO INICIO -->
  <div class='all-conteudo'>
    <section class='conteiner-principal'>
      <div class='main-content container-fluid'>
        <div class='row'>
          <!-- Begin row -->
          <div class='col-md-1'></div>
          <div class='col-md-10 col-sm-8 container-fluid'>

            <h2 class='Titulo fw-bolder'>Técnicas de Negociação e Administração de Conflitos</h2>
            <!-- tirei o hr por que o menu não estava ficando sobreposto -->
            <!-- <hr> -->

            <div class="text-left mt-4 wow fadeIn" data-wow-delay="0.3s">
              <p>Tendo em vista tudo que mostramos, os tipos, os estágios e as reações dos conflitos, é hora de
                conferirmos algumas técnicas que podem ser utilizadas para solucionar situações desse tipo na sua
                empresa.</p>
            </div>




            <section class="timelinemae">
              <div class="timeline01">
                <div class="outer">
                  <div class="card01">
                    <div class="info wow fadeIn" data-wow-delay="0.3s">
                      <h3 class="title01"> 3.1 - Promova uma comunicação eficiente e facilite o diálogo:</h3>
                      <p>Os conflitos são causados pela falta de comunicação, portanto para administrar e até mesmo
                        prevenir situações conflituosas, é necessário que haja diálogo entre colaboradores, equipes e
                        líderes.</p>
                      <p>Uma cultura de <strong>comunicação</strong> aberta , com troca de informações de forma
                        transparente já é um primeiro passo para até mesmo prevenir conflitos.</p>
                    </div>
                  </div>
                  <div class="card01">
                    <div class="info wow fadeIn" data-wow-delay="0.3s">
                      <h3 class="title01"> 3.2 - Dê preferência ao pronome “nós”:</h3>
                      <p>Uma técnica para negociação e administração de conflitos é a utilização da palavra nós.</p>
                      <p>Evite apontar o dedo para outras pessoas ou se colocar no centro de tudo, como se apenas o seu
                        lado importasse, é importante entender que todos estão no mesmo barco.</p>
                    </div>
                  </div>
                  <div class="card01">
                    <div class="info wow fadeIn" data-wow-delay="0.3s">
                      <h3 class="title01"> 3.3 - Faça pesquisas de clima organizacional:</h3>
                      <p>Os conflitos impactam diretamente no clima organizacional, nesse sentido a realização de
                        pesquisas de clima ajuda a identificar eventuais conflitos que podem inclusive estar no estágio
                        latente.</p>
                      <p>Esse tipo de pesquisa vai ajudar a chegar na causa-raiz dos conflitos para, assim,
                        solucioná-los de uma vez por todas e impedir que eles venham a repetir.</p>

                     </div>
                   </div>
                </div>
            </div>
          </section>
        <!-- GAME -->
        <div class="tudo">
                            <div class="row d-flex align-items-center justify-content-between">
                                <div class="col-sm-12 col-md-5 img-index">
                                    <img src="imgs-pessoas/Group 9.png" alt="ilustração" id="img-1" class="w-75 wow animate__zoomIn img-apresentacao">
                                </div>

                                <div class="col-sm-12 col-md-7 mt-5">
                                    <div class="row container mt-6 wow animate__zoomIn">
                                        <div class="mensagem md-5">
                                        <p class=" text-left paragrafo mb-4">
                                       Olá [Nome_Completo],
                                       antes de avançar para o próximo módulo clique abaixo e participe de um jogo sobre o conteúdo apresentado para solidificar o seu aprendizado.
                                        </p>
                                    </div>

                                    <!-- MODAL 1 - INSTRÇÕES DO JOGO -->
                                    <div>
                                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                                        tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-3" id="exampleModalToggleLabel"><i class="fa-solid fa-pen-clip"></i> Instruções do
                                                Teste</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body fw-medium">
                                                <ol id="instrucoes">
                                                <li>Esse será um jogo para relacionar duas colunas</li>
                                                <li>Para computador arraste a letra do item até o espaço vazio<br>
                                                    Para celular toque na letra do item e depois no espaço vazio
                                                </li>
                                                <li>Se for colocado duas letras no mesmo espaço será considerada a última letra colocada</li>
                                                <li>Se a resposta estiver correta ficara verde</li>
                                                <li>Este teste não influenciará na avaliação final.</li>
                                                </ol>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button class="btn" id="btn-continuar" data-bs-target="#exampleModalToggle2"
                                                data-bs-toggle="modal">Continuar</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>

                                        <!-- MODAL 2 - INÍCIO DO JOGO -->
                                        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
                                        tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-3" id="exampleModalToggleLabel2"><i class="fa-solid fa-gamepad"></i> Relacione as
                                                colunas</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="Jogo">
                                                <ul class="column-A">
                                                <div id="item-A">
                                                    <li draggable="true">A</li>Conflito latente 
                                                </div>
                                                <div id="item-A">
                                                    <li draggable="true">B</li>Conflito percebido
                                                </div>
                                                <div id="item-A">
                                                    <li draggable="true">C</li> Conflito sentido
                                                </div>
                                                <div id="item-A">
                                                    <li draggable="true">D</li>  Conflito manifesto
                                                </div>
                                                </ul>

                                                <ul class="column-B">
                                                <div id="item-B">
                                                    <p>
                                                    <li class="dropzone" data-resposta="D"></li>
                                                    a situação conflituosa sai da esfera interpessoal e passa a afetar a organização negativamente ou equipe como um todo
                                                    </p>
                                                </div>
                                                <div id="item-B">
                                                    <p>
                                                    <li class="dropzone" data-resposta="B"></li>
                                                    sua existência é notória, apesar de não haver ainda ações e declarações dos envolvidos.
                                                    </p>
                                                </div>
                                                <div id="item-B">
                                                    <p>
                                                    <li class="dropzone" data-resposta="C"></li>
                                                    as partes envolvidas são afetadas emocionalmente pela situação de conflito.
                                                    </p>
                                                </div>
                                                <div id="item-B">
                                                    <p>
                                                    <li class="dropzone" data-resposta="A"></li>
                                                    existe, mas ainda não se manifestou de maneira aberta.
                                                    </p>
                                                </div>
                                                </ul>
                                            </div>

                                            <div class="modal-footer d-flex justify-content-center">
                                                <button class="btn" id="btn-voltar" data-bs-target="#exampleModalToggle"
                                                data-bs-toggle="modal">Voltar</button>
                                                <button class="btn" id="btn-voltar" data-bs-dismiss="modal"
                                            aria-label="Close">Concluído</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                    </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                    <button class="btn d-flex align-items-center wow animate__bounceInRight" data-wow-delay="0.4s" data-bs-target="#exampleModalToggle"
                                        id="btn-game" data-bs-toggle="modal"><i class="fa-solid fa-puzzle-piece text-light" id="puzzle"></i>CLIQUE E TESTE SEUS CONHECIMENTOS</i></button>
                                    </div>
                                    </div>
                                    </div>

                                </div>
                        </div>
        <!-- FIM DO GAME -->


          </div>
         </div>
       </div>
     </div>
   </section>
 </div>

  <!-- Botões de navegação -->
  <div class="text-center">
    <a href="topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true"> <i
        class="fa-solid fa-chevron-left"></i> Voltar </a>
    <a href="referencias.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
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
  include('layout/footer.php');
  ?>
</body>

</html>