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

<h2 class = 'Titulo fw-bolder'>
Conceitos Básicos</h2>
<!-- tirei o hr por que o menu não estava ficando sobreposto -->
<!-- <hr> -->

<div class = 'm-4' id="obj">
<h3 class = 'Titulo fw-semibold'> 02 - Objetivos</h3>
<p><i class = 'fa fa-dot-circle text-success me-2'></i>Apresentar uma breve etimologia do termo ética; expor definição de ética e moral; demonstrar sua relação com a vida prática do ser humano.
</p>
</div>

<!-- primeiro bloco do tópico 02 ( RESUMO ) -->
    <div class="text-left">
        <p> <strong>Ética</strong> é derivada da palavra grega ethos (έθος), que pode assumir uma diversidade de sentidos. O modo mais usual de emprego desse termo tem sido para indicar “modo de ser”, “caráter”. De modo que caráter pretende significar o conjunto de qualidades e disposições que definem uma pessoa e, ao mesmo tempo, a diferencia das demais. O caráter é adquirido pelo hábito. O hábito, por sua vez, nasce da repetição de atos iguais. Assim, pode-se dizer que das ações passam-se aos hábitos e dos hábitos à vida real. Desse modo, surge o <strong>ethos, o modo de ser e agir</strong>, que é definido pelas características que os hábitos deixaram marcados no ser. O ser humano, constantemente, está construindo seu próprio modo de ser e agir, seu caráter, que vai se transformando no ethos, na <strong>morada</strong> habitual do ser.</p>
    </div>

    <!-- CAIXA DE TEXTO CURIOSIDADE -->
  <section class="container">
    <div class="accordion ">
      <section id="content">
        <div class="caixaprincipal" id="tituloCuriosidade">
          <div class="div_teste">
            <div><i class="fa-solid fa-question"></i> CURIOSIDADE </div>

            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
          </div>
        </div> <!--caixa Principal-->
        <div class="accordion-content" id="Curiosidade">
          <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                Passe o mouse acima
              </strong></strong></p>
          <p class="txt-caixasecundaria">“<strong>Morada</strong>” é uma outra possível tradução da palavra ethos.
          </p><!--caixa secundaria-->
        </div>
      </section>
  </section>
 <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

 <div class="text-left">
    <p>Já a palavra <strong>moral</strong> é proveniente do latim moralis, ou ainda, mor-moris, que quer dizer “costume”, “maneira”, “comportamento próprio”. Ela está relacionada com o ethos no sentido de que é um modo de ser que pode ser adquirido gradualmente, que tem diversas fases de desenvolvimento. Resumidamente, podemos dizer que moris significa, a exemplo do ethos, o modo de ser ou o caráter. No entanto, ao passo que o caráter é adquirido pelo hábito (portanto, no ato de viver), o costume se adquire por repetições não necessariamente intencionais. Desse modo, que a ética tem a ver com o campo de investigação do agir humano, enquanto a moral está relacionada ao objeto dessa investigação. Conforme Adela Cortina (1995),</p>

                         <!-- Citação com borda verde (esquerda) -->
  <div class="bd-callout bd-callout-success m-3">

    <!-- blockquote do bootstrap -->
    <figure>
      <blockquote class="blockquote">
        <p>"a moral está ligada imediatamente à ação e prescreve a conduta, enquanto que a ética (filosofia moral) se pronuncia canonicamente, isto é, conforme as regras."
       </p>
      </blockquote>
      <figcaption class="blockquote-footer">
        <cite title="Source Title">- (CORTINA, 1995, p. 29.)

     </cite>
      </figcaption>
    </figure>
  </div>
  <!-- Citação com borda verde (esquerda) -->
 </div>


        <!-- TABELA DO SEGUNDO TÓPICO DO CURSO DE ÉTICA E SERVIÇO PÚBLICO -->
            <div class="text-left">
                <p>Portanto, a moral é objeto de estudo da ética.</p>
                <br>
                <p>Vejamos, a seguir, um breve quadro de conteúdos da ética e da moral:</p>
            </div>

            <table class="table table-striped">
                            <thead>
                                <tr class="text-white text-center">
                                    <th colspan="2" class="bg-success-subtle" id="teste-border">QUADRO DE CONTEÚDOS</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr class="text-white text-center bg-green">
                                    <th scope="col" class="bg-success-subtle">ÉTICA</th>
                                    <th scope="col" class="bg-success-subtle">MORAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Pensamento filosófico;</li>
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Ciência;</li>
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> É teórica, contemplativa, abstrata;</li>
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Busca a universalidade.</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Objeto de estudo do pensamento filosófico (deontologia ou teoria dos deveres);</li>
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Objeto de estudo da ciência ética;</li>
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Conjunto de normas, princípios e valores com os quais se regula a conduta humana.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>Busca descrições e explicações gerais para os problemas morais.</td>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> É prática;</li>
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Executa-se;</li>
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Exerce-se.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>Reflexão teórica.</td>
                                    <td><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>Modifica a própria vida.</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>Conjunto de teorias acerca das obrigações normativas baseadas na observação dos atos reais da conduta.</td>
                                    <td><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>Conjunto de deveres, normas e valores.</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>Seu caráter prático ou normativo é derivado de seu objeto de estudo, ou seja, da moral.</td>
                                    <td><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>Possui caráter eminentemente normativo e prático.</td>
                                </tr>
                                <tr class="text-white text-center">
                                    <th colspan="2" class="bg-success-subtle">AMBAS REALIDADES SÃO CONCOMITANTES</th>
                                </tr>
                            </tbody>
                        </table>
        <!-- FIM DA TABELA -->

        <div class="text-left">
            <p>Qualquer tentativa de definição do que venha a ser ética, assim como qualquer outra ciência, é resultado de uma investigação do pensamento sobre um objeto específico. Por isso, a ética é uma ciência normativa da atividade humana ordenada ao bem. Mais que isso, ao bem comum. Ela é uma ciência prática e normativa. Isso quer dizer que se dedica ao estudo dos atos, porém, não no sentido daquilo que estes são, mas como deveriam ser. Por esse motivo, o estudo da ética não ficou restrito ao campo da filosofia, mas dialoga e se faz presente em tantas outras ciências e áreas do saber. Por exemplo, a metafísica, a psicologia, a sociologia, a teologia, a religião e o direito são algumas das ciências e campos do saber afins que se relacionam com a ética, pois cada um desses saberes, a seu modo, refere-se às leis que regem o comportamento humano.</p>

            <p>Portanto, existe um caráter estritamente antropológico no estudo da ética, uma vez que ela é uma ciência humana, isto é, fundamenta-se no ser humano. Quando se fala em ser humano, é preciso compreender que este é uma totalidade, ou seja, o sujeito da ação moral ou ética é o indivíduo como um todo e não apenas uma parte dele.</p>

            <!--CAIXA DE TEXTO EXEMPLO-->
  <section class="container">
    <div class="accordion ">
      <section id="content">
        <div class="caixaprincipal" id="tituloexemplo">
          <div class="div_teste">
            <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
          </div>
        </div> <!--caixa Principal-->
        <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
          <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
          <p class="txt-caixasecundaria">
          Assim, quando alguém comete um roubo ou assassinato, não foi apenas sua mão que praticou tal ato, mas a pessoa em sua integralidade. Isso significa dizer que tantos elementos estão ali presentes: sua vontade, desejo, pensamento, emoções, intencionalidade, motivação, influências, conhecimento e assim por diante.
          <p>
        </div>
      </section>
  </section>
  <!-- FIM DA CAIXA EXEMPLO-->

            <p>A conduta é uma expressão da pessoa humana em sua integralidade. Desse modo, quando se julga um ato, é preciso valorá-lo em sua profundidade expressa na pessoa. Ao mesmo tempo, a ética considera o sujeito enquanto indivíduo e enquanto membro de uma sociedade com outros indivíduos.</p>

            <p>Nesse sentido, as estruturas que caracterizam o homem em seu aspecto individual e social entram no jogo das relações sociais. A pessoa humana é, por um lado, um indivíduo, entendido no sentido pleno. Em outras palavras: não dividido, não diluído. Entretanto, é, também, uma realidade que se “auto-possui”, mas que está aberta ao outro, às demais pessoas, formando, assim, um laço de relações comunitárias com o “nós”. Por isso, a ética – ou as teorias éticas – compreendem que a pessoa é complementada, realizada, com a estrutura da comunidade em que está inserida. Em outras palavras, a relação humana se dá a partir de um “eu” que se abre ao “outro eu”, a um “tu”, que se transforma em um “nós”.</p>
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
</body>

</html>