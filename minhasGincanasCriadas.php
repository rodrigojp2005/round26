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

            header {

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

            @media (min-width: 0px) and (max-width: 1199.98px) { 
				
				.btn {

					width: 100%;

				}

                .btn:first-child {

                    margin-bottom: 10px;

                }

			}

        </style>

    </head>

    <!-- Corpo da página -->

    <body>

        <!-- Realiza a importação da barra de navegação -->

        <?php

            require_once "barraNavegacao.php";

        ?>

        <!-- Cabeçalho do corpo da página -->

        <header>
            <h1>Minhas Gincanas</h1>
            <h1 class="display-6">2 gincanas foram criadas por você!</h1>
            <p>Para ver as gincanas que você está participando, clique <a href="minhasGincanasParticipando.php">aqui</a>. <br> <strong>Selecione uma das opções abaixo para criar uma nova gincana:</strong></p>
            <div class="btn-group" role="group" aria-label="Grupo de botões">
                <button type="button" class="btn btn-outline-primary"><i class="fas fa-plus fa-fw"></i>GINCANA PESSOAL</button>
                <button type="button" class="btn btn-outline-primary"><i class="fas fa-plus fa-fw"></i>GINCANA EMPRESARIAL</button>
            </div>
        </header>

        <!-- Cards da página inicial -->

        <main>
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
                        <a class="btn btn-dark"><i class="fas fa-info-circle fa-fw"></i>SOBRE</a>
                        <a class="btn btn-dark"><i class="fas fa-edit fa-fw"></i>EDITAR</a>
                        <a class="btn btn-danger"><i class="fas fa-trash fa-fw"></i>EXCLUIR</a>
                        <br>
                        <a class="btn btn-primary segundaLinhaBotoes"><i class="fas fa-eye fa-fw"></i>VISUALIZAR</a>
                        <a class="btn btn-primary segundaLinhaBotoes"><i class="fas fa-medal fa-fw"></i>RANKING</a>
			        </div>
    	        </div>
  	        </div>
            <div class="col">
    	        <div class="card text-center shadow-sm">
      		        <img src="imagens/cards/example2.jpg" class="imgCard card-img-top" alt="...">
      		        <div class="card-body">
        		        <h3 class="card-title">Gincana #2</h3>
                        <h5 class="gincanaEncerrada">GINCANA ENCERRADA!</h5>
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
                        <a class="btn btn-dark"><i class="fas fa-info-circle fa-fw"></i>SOBRE</a>
                        <a class="btn btn-dark"><i class="fas fa-edit fa-fw"></i>EDITAR</a>
                        <a class="btn btn-danger"><i class="fas fa-trash fa-fw"></i>EXCLUIR</a>
                        <a class="btn btn-primary segundaLinhaBotoes"><i class="fas fa-medal fa-fw"></i>RANKING</a>
			        </div>
    	        </div>
  	        </div>
        </div>

        <!-- Realiza a importação do rodapé da página -->

        <?php

            require_once "rodape.php";

        ?>

    </body>

</html>