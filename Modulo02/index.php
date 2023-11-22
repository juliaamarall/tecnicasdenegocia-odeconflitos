<?php
include('layout/header.php');
 ?>
<body>

    <!-- NAV  -->
    <?php
    include('layout/nav.php');
    ?>
    <!-- FIM DA NAV -->

    <!-- menu lateral  -->
    <?php
    include('layout/menu.php');
    ?>

    <div class="all-conteudo">
        <section>
            <div class="main-content container-fluid">



                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <h2 class="Titulo fw-bolder">Apresentação</h2>

                            <!-- IMAGEM COM TEXTO AO LADO -->

    <div class="apresentacao">

<div class="img_apresentacao" data-aos="zoom-in-down" >
    <img src="imgs-pessoas/Group 1.png" alt="">
</div>
<div>
    <!-- Parágrafo com a biblioteca de animação  -->
    <p class="texto_apresentacao mb-4" data-aos="zoom-in-down">
    Olá pessoal, nesta <strong>segunda parte</strong> do Curso apresentaremos umaseleção de algumas técnicas de mediação de conflitos mais utilizadas nas organizações atuais. 
    <br>
    Você perceberá que muitos pontos se repetem no material aqui disponibilizado, e assim entendemos que alguns pontos fazem parte de uma prática que parece que está surtindo efeito.
    </p>


    <p>O material é facilmente encontrado em sites específicos da área de Gestão de Pessoas, mostrando assim uma vasta literatura em relação às técnicas de <strong> mediação</strong> e <strong>resolução de conflitos</strong> nas Organizações, sejam estas do âmbito da Gestão, do Direito ou da Educação.</p>
    <!--  Fim do Parágrafo com a biblioteca de animação -->

</div>
</div>



        <div class="text-left">
            <p>Antes de prosseguirmos com a leitura do material, assista ao vídeo e entenda o significado de MEDIAÇÃO.</p>

             <!-- CAIXA DE TEXTO SAIBA-MAIS -->
  <section class="container">
    <div class="accordion ">
      <section id="content">
        <div class="caixaprincipal" id="tituloSaibaMais">
          <div class="div_teste">
            <div><i class="fa-solid fa-plus"></i> SAIBA MAIS </div>

            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
          </div>
        </div> <!--caixa Principal-->
        <div class="accordion-content" id="saibamais">
          <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75"> Passe o mouse acima
              </strong></strong></p>
          <p class="txt-caixasecundaria">
          Veja vídeo que esclarecerá de forma didática o que significa os conceitos estudados até o momento.
          </p><!--caixa secundaria-->
        </div>
      </section>
  </section>
  <!-- FIM DA CAIXA SAIBA MAIS  -->
        </div>

         <!-- Iframe - video -->
  <div class="container iframe-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Kr13qBAPA9k?si=UZ5xl8lhs4lGu-dn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
  <!-- fim do iframe -->

  <div class="alert alert-primary fs-5" role="alert" data-aos="zoom-in">
  Bem, esperamos que você tenha compreendido o que significa mediação e agora então iremos nos apropriar do material abaixo e ao final de cada bloco responda as questões propostas.
  </div>

  <p class="text-end"><strong>Bons estudos!</strong></p>
        </section>


        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                    class="bi bi-chevron-right"></i></a>
        </div>


        <div id="progress-bar"></div>
    </div>
<?php
include('layout/footer.php');
?>

<script>
  AOS.init();
</script>
</body>

</html>