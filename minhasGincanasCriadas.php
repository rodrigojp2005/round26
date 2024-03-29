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

            .collapseListagemRegras {

                margin-bottom: 15px;

            }

            .imagemDestaqueCard {

                height: 300px;

            }

            .gincanaEncerrada {

                color: red;

            }

            @media (min-width: 0px) and (max-width: 1199.98px) { 
				
				.btn {

					width: 100%;

				}

                .card-body .btn {

                    margin-top: 5px;

                }

                #botaoCriarGincanaPessoal {

                    margin-bottom: 5px;

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
            <h1 class="formatacaoDestaque">Minhas Gincanas</h1>
            <h3>2 gincanas foram criadas por você</h3>
            <p>Para ver as gincanas que você está participando, clique <a href="#">aqui</a>, ou selecione uma das opções abaixo para criar uma nova gincana.</p>
            <button type="button" class="btn btn-outline-primary formatacaoDestaque" id="botaoCriarGincanaPessoal"><i class="fas fa-plus fa-fw"></i>GINCANA PESSOAL</button>
            <button type="button" class="btn btn-outline-primary formatacaoDestaque"><i class="fas fa-plus fa-fw"></i>GINCANA EMPRESARIAL</button>
        </header>

        <!-- Cards da minhas gincanas criadas -->

        <main>
            <div class="row row-cols-1 row-cols-md-3 g-4">
  	            <div class="col">
    	            <div class="card text-center shadow-sm">
      		        <img src="imagens/cards/example1.jpg" class="imagemDestaqueCard card-img-top" alt="...">
      		        <div class="card-body">
        		        <h3 class="card-title formatacaoDestaque">Gincana #1</h3>
                        <h5><i class="fas fa-stopwatch fa-fw"></i>00:00:00</h5>
                        <p class="card-subtitle mb-2"><strong>Descrição</strong></p>
        		        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nulla quae dolorem iusto id, cupiditate soluta quam, ab, dicta rerum iure nemo in quibusdam praesentium laudantium dolores. Rem, velit illum.</p>
                        <p>
                            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseListagemRegrasGincana1" aria-expanded="false" aria-controls="collapseListagemRegrasGincana1"><i class="fas fa-chevron-down fa-fw"></i><strong>CLIQUE PARA VER MAIS</strong></button>
                        </p>
                        <div class="collapse collapseListagemRegras" id="collapseListagemRegrasGincana1">
                            <div class="card card-body">
                                <p class="card-subtitle mb-2"><strong>Regras</strong></p>
                                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                        <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-eye fa-fw"></i>VISUALIZAR</a>
                        <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-medal fa-fw"></i>RANKING</a>
                        <br>
                        <a class="btn btn-secondary segundaLinhaBotoes formatacaoDestaque"><i class="fas fa-edit fa-fw"></i>EDITAR</a>
                        <a class="btn btn-danger segundaLinhaBotoes formatacaoDestaque"><i class="fas fa-trash fa-fw"></i>EXCLUIR</a>
			        </div>
    	        </div>
  	        </div>
            <div class="col">
    	        <div class="card text-center shadow-sm">
      		        <img src="imagens/cards/example2.jpg" class="imagemDestaqueCard card-img-top" alt="...">
      		        <div class="card-body">
        		        <h3 class="card-title formatacaoDestaque">Gincana #2</h3>
                        <h5 class="gincanaEncerrada">GINCANA ENCERRADA!</h5>
                        <p class="card-subtitle mb-2"><strong>Descrição</strong></p>
        		        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nulla quae dolorem iusto id, cupiditate soluta quam, ab, dicta rerum iure nemo in quibusdam praesentium laudantium dolores. Rem, velit illum.</p>
                        <p>
                            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseListagemRegrasGincana2" aria-expanded="false" aria-controls="collapseListagemRegrasGincana2"><i class="fas fa-chevron-down fa-fw"></i><strong>CLIQUE PARA VER MAIS</strong></button>
                        </p>
                        <div class="collapse collapseListagemRegras" id="collapseListagemRegrasGincana2">
                            <div class="card card-body">
                                <p class="card-subtitle mb-2"><strong>Regras</strong></p>
                                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                        <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-medal fa-fw"></i>RANKING</a>
                        <a class="btn btn-secondary formatacaoDestaque"><i class="fas fa-edit fa-fw"></i>EDITAR</a>
                        <a class="btn btn-danger formatacaoDestaque"><i class="fas fa-trash fa-fw"></i>EXCLUIR</a>
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