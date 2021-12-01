<!DOCTYPE html>
<html>

    <!-- Cabeçalho da página -->

    <head>

        <!-- Realiza a importação do código das bibliotecas -->

        <?php

            require_once "bibliotecas.php";

        ?>

        <!-- Título da página -->

        <title>Minhas Gincanas - Round26</title>

        <!-- CSS -->

        <style>
        
            i {
  
                margin-right: 5px;

            }

            #containerTitulo {

                margin: 20px 20px 0px 20px;
                text-align: center;

            }

            .row {

                margin: 0px 20px 20px 20px;

            }   

            .segundaLinhaBotoes {

                margin-top: 5px;

            }

            .collapseRegras {

                margin-bottom: 15px;

            }

            .imgCard {

                height: 350px;

            }

            .gincanaEncerrada {

                color: red;

            }

        </style>

    </head>

    <!-- Realiza a importação da barra de navegação -->

    <?php

        require_once "barraNavegacao.php";

    ?>

    <!-- Corpo da página -->

    <body>

        <div id="containerTitulo">
            <h1>Minhas Gincanas</h1>
            <h1 class="display-6">Você está participando de 2 gincanas!</h1>
            <span>Para ver as gincanas que você criou, clique <a href="minhasGincanasCriadas.php">aqui</a>.</span>
        </div>

        <!-- Cards da página inicial -->

        <div class="row row-cols-1 row-cols-md-3 g-4">
  	        <div class="col">
    	        <div class="card text-center shadow-sm">
      		        <img src="imagens/cards/example1.jpg" class="imgCard card-img-top" alt="...">
      		        <div class="card-body">
        		        <h3 class="card-title">Gincana #1</h3>
                        <h5><i class="fas fa-clock fa-fw"></i>00:00:00</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Descrição</h6>
        		        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nulla quae dolorem iusto id, cupiditate soluta quam, ab, dicta rerum iure nemo in quibusdam praesentium laudantium dolores. Rem, velit illum.</p>
                        <p>
                            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRegrasGincana1" aria-expanded="false" aria-controls="collapseRegrasGincana1"><i class="fas fa-chevron-down fa-fw"></i><strong>CLIQUE PARA VER MAIS</strong></button>
                        </p>
                        <div class="collapse collapseRegras" id="collapseRegrasGincana1">
                            <div class="card card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Regras</h6>
                                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                        <a class="btn btn-primary"><i class="fas fa-ticket-alt fa-fw"></i>GERAR CUPOM</a>
                        <a class="btn btn-primary"><i class="fas fa-gamepad fa-fw"></i>JOGAR</a>
                        <a class="btn btn-primary segundaLinhaBotoes"><i class="fas fa-medal fa-fw"></i>RANKING</a>
			        </div>
    	        </div>
  	        </div>
            <div class="col">
    	        <div class="card text-center shadow-sm">
      		        <img src="imagens/cards/example2.jpg" class="imgCard card-img-top" alt="...">
      		        <div class="card-body">
        		        <h3 class="card-title">Gincana #2</h3>
                        <h5 class="gincanaEncerrada"><i class="fas fa-clock fa-fw"></i>GINCANA ENCERRADA!</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Descrição</h6>
        		        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nulla quae dolorem iusto id, cupiditate soluta quam, ab, dicta rerum iure nemo in quibusdam praesentium laudantium dolores. Rem, velit illum.</p>
                        <p>
                            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRegrasGincana2" aria-expanded="false" aria-controls="collapseRegrasGincana2"><i class="fas fa-chevron-down fa-fw"></i><strong>CLIQUE PARA VER MAIS</strong></button>
                        </p>
                        <div class="collapse collapseRegras" id="collapseRegrasGincana2">
                            <div class="card card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Regras</h6>
                                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                        <a class="btn btn-success"><i class="fas fa-check fa-fw"></i>CUPOM GERADO!</a>
                        <a class="btn btn-primary"><i class="fas fa-medal fa-fw"></i>RANKING</a>
			        </div>
    	        </div>
  	        </div>
        </div>

    </body>

    <!-- Realiza a importação do rodapé da página -->

    <?php

        require_once "rodape.php";

    ?>

</html>