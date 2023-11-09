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
                        <!-- IMAGEM 01 DO TÓPICO DE APRESENTAÇÃO -->
                            <div class="container">
                                <img src="imgs/Figura01.png" alt="Imagem da capa do curso com o títilo ÉTICA E SERVIÇO PÚBLICO" class="img-fluid">
                            </div>
                        <!-- FIM DA IMAGEM DE APRESENTAÇÃO   -->

                        <div class="text-left">
                            <p>A ética vem ganhando cada vez mais proeminência no discurso atual sobre governança, ao passo que também se tem uma percepção de que o padrão de vida pública tem sofrido um declínio. O Brasil, como muitos outros países, tem examinado e repensado o papel do Estado e todo seu aparelho. De modo que quando se fala em ética no governo, a referência que se faz é ao padrão moral no serviço público.</p>
                        </div>

                        <h2 class="Titulo fw-bolder">Objetivo</h2>
                        <p><i class="fa fa-dot-circle text-success"></i> Apresentar as questões éticas ao servidor público;</p>
                        <p><i class="fa fa-dot-circle text-success"></i> Discutir a ética profissional no serviço público.</p>

                    
                        

                        <ul class="none">
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i></i>
                                <h4>
                                    Olá, Nome_Completo bem-vindo ao módulo 01 do curso de Gestão do tempo. Bons estudos!
                                </h4>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
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
</body>

</html>