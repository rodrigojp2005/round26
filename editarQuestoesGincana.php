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

            .imgCard {

                height: 325px;

            }

            .listagemAlternativas {

                text-align: left;

            }

            @media (min-width: 0px) and (max-width: 1199.98px) { 
				
				.btn {

					width: 100%;

				}

                .formatacaoEspecial {

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

        <header id="containerTitulo">
            <h1>Edição de Questões de Gincana</h1>
            <h1 class="display-6">Visualizando as perguntas da Gincana #1</h1>
            <p>Clique no botão abaixo para adicionar uma nova pergunta para a gincana selecionada.</p>
            <a class="btn btn-outline-primary"><i class="fas fa-plus fa-fw"></i>ADICIONAR QUESTÃO</a>
        </header>

        <!-- Cards das questões -->

        <main>
            <div class="row row-cols-1 row-cols-md-3 g-4">
  	            <div class="col">
    	            <div class="card text-center shadow-sm">
      		            <img src="imagens/cards/example1.jpg" class="imgCard card-img-top" alt="...">
      		            <div class="card-body">
        		            <h4 class="card-title">Questão #1</h4>
            		        <p class="card-text">
                                <ul class="listagemAlternativas">
                                    <li>Alternativa...</li>
                                    <li>Alternativa...</li>
                                    <li>Alternativa...</li>
                                </ul>
                            </p>
                            <a class="btn btn-primary formatacaoEspecial"><i class="fas fa-edit fa-fw"></i>EDITAR</a>
                            <a class="btn btn-danger"><i class="fas fa-trash fa-fw"></i>EXCLUIR</a>
			            </div>
    	            </div>
  	            </div>
  	            <div class="col">
    	            <div class="card text-center shadow-sm">
      		            <img src="imagens/cards/example2.jpg" class="imgCard card-img-top" alt="...">
      			        <div class="card-body">
                            <h4 class="card-title">Questão #2</h4>
        		            <p class="card-text">
                                <ul class="listagemAlternativas">
                                    <li>Alternativa...</li>
                                    <li>Alternativa...</li>
                                    <li>Alternativa...</li>
                                </ul>
                            </p>
                            <a class="btn btn-primary formatacaoEspecial"><i class="fas fa-edit fa-fw"></i>EDITAR</a>
                            <a class="btn btn-danger"><i class="fas fa-trash fa-fw"></i>EXCLUIR</a>
				        </div>
    		        </div>
  		        </div>
  	            <div class="col">
    	            <div class="card text-center shadow-sm">
      		            <img src="imagens/cards/example3.jpg" class="imgCard card-img-top" alt="...">
      			        <div class="card-body">
                            <h4 class="card-title">Questão #3</h4>
        		            <p class="card-text">
                                <ul class="listagemAlternativas">
                                    <li>Alternativa...</li>
                                    <li>Alternativa...</li>
                                    <li>Alternativa...</li>
                                </ul>
                            </p>
                            <a class="btn btn-primary formatacaoEspecial"><i class="fas fa-edit fa-fw"></i>EDITAR</a>
                            <a class="btn btn-danger"><i class="fas fa-trash fa-fw"></i>EXCLUIR</a>
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