<!DOCTYPE html>
<html>

    <!-- Cabeçalho da página -->

    <head>

        <!-- Realiza a importação do código das bibliotecas -->

        <?php

            require_once "bibliotecas.php";

        ?>

        <!-- Título da página -->

        <title>Edição de Questões - Round26</title>

        <!-- CSS -->

        <style>

            .card-text {

                margin-bottom: 5px;

            }

            header {

                text-align: center;
                margin: 20px 20px 0px 20px;

            }

            i {
  
                margin-right: 5px;

            }

            .row {

                margin: 0px 20px 20px 20px;

            }

            .imagemDestaqueCard {

                height: 325px;

            }

            .listagemAlternativas {

                text-align: left;

            }

            @media (min-width: 0px) and (max-width: 1199.98px) { 
				
				.btn {

					width: 100%;

				}

                .card-body .btn-primary {

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
            <h1 class="formatacaoDestaque">Edição de Questões de Gincana</h1>
            <h3>Visualizando as perguntas da Gincana #1</h3>
            <p>Clique no botão abaixo para adicionar uma nova pergunta para essa gincana.</p>
            <a class="btn btn-outline-primary formatacaoDestaque"><i class="fas fa-plus fa-fw"></i>ADICIONAR QUESTÃO</a>
        </header>

        <!-- Cards das questões -->

        <main>
            <div class="row row-cols-1 row-cols-md-3 g-4">
  	            <div class="col">
    	            <div class="card text-center shadow-sm">
      		            <img src="imagens/cards/example1.jpg" class="imagemDestaqueCard card-img-top" alt="...">
      		            <div class="card-body">
        		            <h3 class="card-title formatacaoDestaque">Questão #1</h3>
            		        <p class="card-text">
                                Atualmente, essa questão possui as seguintes alternativas disponíveis para responder:
                                <ul class="listagemAlternativas">
                                    <li>Alternativa...</li>
                                    <li>Alternativa...</li>
                                    <li>Alternativa...</li>
                                </ul>
                            </p>
                            <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-edit fa-fw"></i>EDITAR</a>
                            <a class="btn btn-danger formatacaoDestaque"><i class="fas fa-trash fa-fw"></i>EXCLUIR</a>
			            </div>
    	            </div>
  	            </div>
  	            <div class="col">
    	            <div class="card text-center shadow-sm">
      		            <img src="imagens/cards/example2.jpg" class="imagemDestaqueCard card-img-top" alt="...">
      			        <div class="card-body">
                            <h3 class="card-title formatacaoDestaque">Questão #2</h3>
        		            <p class="card-text">
                                Atualmente, essa questão possui as seguintes alternativas disponíveis para responder:
                                <ul class="listagemAlternativas">
                                    <li>Alternativa...</li>
                                    <li>Alternativa...</li>
                                    <li>Alternativa...</li>
                                </ul>
                            </p>
                            <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-edit fa-fw"></i>EDITAR</a>
                            <a class="btn btn-danger formatacaoDestaque"><i class="fas fa-trash fa-fw"></i>EXCLUIR</a>
				        </div>
    		        </div>
  		        </div>
  	            <div class="col">
    	            <div class="card text-center shadow-sm">
      		            <img src="imagens/cards/example3.jpg" class="imagemDestaqueCard card-img-top" alt="...">
      			        <div class="card-body">
                            <h3 class="card-title formatacaoDestaque">Questão #3</h3>
        		            <p class="card-text">
                                Atualmente, essa questão possui as seguintes alternativas disponíveis para responder:
                                <ul class="listagemAlternativas">
                                    <li>Alternativa...</li>
                                    <li>Alternativa...</li>
                                    <li>Alternativa...</li>
                                </ul>
                            </p>
                            <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-edit fa-fw"></i>EDITAR</a>
                            <a class="btn btn-danger formatacaoDestaque"><i class="fas fa-trash fa-fw"></i>EXCLUIR</a>
				        </div>
    		        </div>
  		        </div>
	        </div>
        </main>

        <!-- Realiza a importação do rodapé da página -->

        <?php

            require_once "rodape.php";

        ?>

    </body>

</html>