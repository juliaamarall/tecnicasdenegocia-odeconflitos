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

<h2 class = 'Titulo fw-bolder'>Conceituando Negociação</h2>

<!-- primeiro bloco do tópico 02 ( RESUMO ) -->
    <div class="text-left mt-1">
        <p>O <span><a href="#" data-bs-toggle="tooltip" data-bs-title="O Harvard Negotiation Project é um projeto criado na Universidade de Harvard que trata de questões de negociações e resolução de conflitos." class="link-tooltip"><strong>Havard Negotiation Project</strong></a></span>, é um projeto criado pela Universidade de Harvard para orientar na resolução dos conflitos, define a negociação como a busca pelo “sim” conforme méritos e princípios, sem dureza ou prejuízo para as relações.</p>

        <p>Entende-se então:</p>

        <!-- Citação com borda verde (esquerda) -->
  <div class="bd-callout bd-callout-success m-3" data-aos="zoom-in-right">

<!-- blockquote do bootstrap -->
<figure>
  <blockquote class="blockquote">
    <p>Negociação de conflitos é uma técnica utilizada na gestão de pessoas que visa levar dois ou mais colaboradores da organização a alinhar seus objetivos, expectativas e atitudes para que voltem a trabalhar de forma harmoniosa e colaborativa, depois das discussões, radicalmente sobre algum aspecto do negócio.
   </p>
  </blockquote>
  <figcaption class="blockquote-footer">
    <cite title="Source Title"> (Paulillo, 2011)

 </cite>
  </figcaption>
</figure>
</div>
<!-- Citação com borda verde (esquerda) -->
    </div>

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
          <p class="txt-caixasecundaria">Veja vídeo que esclarecerá de forma didática o que significa os conceitos estudados até o momento.</p><!--caixa secundaria-->
        </div>
      </section>
  </section>
  <!-- FIM DA CAIXA SAIBA MAIS  -->

   <!-- Iframe - video -->
   <div class="container iframe-container" data-aos="fade-left">
             <iframe width="560" height="315" src="https://www.youtube.com/embed/h4mPhttt458?si=XiosF7bySeT64d6e" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
           <!-- fim do iframe -->
           <div class="text-left">
           <p>Afirma Paulillo (2011), que negociar é uma parte importante do trabalho de todo profissional, seja ele da área vendas ou qualquer outra, negociar verbas internas, prioridade em projetos, alocar mais recursos humanos, transferências, promoções ou até um aumento de remuneração faz parte do dia a dia corporativo.</p>

           <p>Para compreensão de todo o <strong>processo de negociação</strong>, utilizaremos dos estudos e dicas práticas da Agendor que detalhou uma metodologia diferenciada e exclusiva, denominada a <span><a href="#" data-bs-toggle="tooltip" data-bs-title="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab nesciunt doloremque, dignissimos tempore voluptates expedita magni deserunt atque iure, culpa fugit voluptatibus corrupti nostrum sequi sint quibusdam quod a " class="link-tooltip"><strong>PISTTAA</strong></a></span></p>
           </div>


          

 
        </section>


        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true"> <i
                    class="fa-solid fa-chevron-left"></i> Voltar </a>
            <a href="topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
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

<!-- scripts -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>

</html>