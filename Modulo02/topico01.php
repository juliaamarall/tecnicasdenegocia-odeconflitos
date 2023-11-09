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
    <div class="all-conteudo">
        <section class="conteiner-principal">
            <div class="main-content container-fluid">
                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <h2 class="Titulo fw-bolder">Ética e Serviço Público</h2>
                        <!-- tirei o hr por que o menu não estava ficando sobreposto -->
                        <!-- <hr> -->

                        <div class="m-4" id="obj">
                            <h3 class="Titulo fw-semibold"> 01 - Objetivo</h3>
                            <p><i class="fa fa-dot-circle text-success me-2"></i> Apresentar a importância do debate da ética aplicada ao serviço público.</p>
                           
                        </div>

  <div class="text-left">
       <p>Após algumas exposições muito sintéticas sobre possíveis definições de ética e alguns de seus sistemas no decorrer da história, estamos preparados para refletir sobre o papel da ética aplicada ao serviço público, visto que, como buscamos demonstrar, existe uma conexão íntima entre moral e sociedade, uma vez que os atos morais se condicionam socialmente.</p>

      <p>As considerações éticas na função pública têm adquirido uma importância cada vez mais crescente, pois não se pode esquecer que o ofício público supõe como tarefa o serviço aos outros. Assim, a Ética Pública, para fins de uma primeira aproximação, estuda o comportamento dos funcionários ordenados à finalidade do serviço público que lhe é inerente. Pode-se, ainda, asseverar que é a ciência que trata da moralidade das ações humanas enquanto realizadas por servidores públicos, de modo que a chamada Ética Pública, assim como a Ética em si mesma, é também uma ciência prática. Ciência porque o estudo da ética para a administração pública inclui princípios gerais e universais sobre a moralidade dos atos humanos realizados pelo funcionário público ou pelo gestor público. Com base nisso, também se considera prática porque ela se ocupa, fundamentalmente, da livre conduta do indivíduo que desempenha alguma função pública, proporcionando-lhe as normas e critérios necessários para o bem agir. Resumindo, podemos dizer que a ideia de serviço à coletividade, à sociedade, consequentemente, aos outros, é o eixo central da ética pública. Dessa forma, também o é a conservação e a promoção do bem comum.</p>

      <p>Essa ideia de serviço ao público, à coletividade, é o fundamento da administração e deve estar conectada com uma noção de administração pública que presta serviços de qualidade e que promove o exercício dos direitos fundamentais dos cidadãos. Aliás podemos afirmar que</p>

            <!-- Citação com borda verde (esquerda) -->
    <div class="bd-callout bd-callout-success m-3">
         <!-- blockquote do bootstrap -->
       <figure>
           <blockquote class="blockquote">
             <p>
             "não há ‘servidor público’ e sim, ‘servidor do público’."
            </p>
          </blockquote>
          <figcaption class="blockquote-footer">
            <cite title="Source Title">- (MENDES, 2010, p. 22.)
            </cite>
         </figcaption>
        </figure>
    </div>
       <!-- Citação com borda verde (esquerda) -->

       <p>Uma Administração que se movimente por essa perspectiva, precisa ser uma administração composta por pessoas que estejam convencidas de que a qualidade dos seus serviços ofertados tem muito a ver com um trabalho bem executado e que é importante ir ao encontro dos legítimos interesses da população nos múltiplos e variados expedientes, interesses e necessidades. Nesse sentido, o servidor público tem como responsabilidade assumir um protagonismo, de se sentir responsável, e independentemente da função que ora ocupa, pela dinâmica administrativa, colocando à sua frente os interesses da coletividade.</p>

</div>

                  
        </section>
        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="index.php" class="btn btn-outline-success" role="button" aria-pressed="true"> <i
                    class="fa-solid fa-chevron-left"></i> Voltar </a>
            <a href="topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
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