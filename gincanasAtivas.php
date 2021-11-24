<!DOCTYPE html>
<html>

    <!-- Cabeçalho da página -->

    <head>

        <!-- Realiza a importação do código das bibliotecas -->

        <?php

            require_once "bibliotecas.php";

        ?>

        <!-- Título da página -->

        <title>Gincanas Ativas - Round26</title>

        <!-- CSS -->

        <style>

            #containerTitulo {

                margin: 20px 20px 0px 20px;
                text-align: center;

            }

            .row {

                margin: 0px 20px 20px 20px;

            }

            .card img {

                height: 350px;

            }

            #botaoVoltar {

                margin-bottom: 20px;

            }

            #containerBotaoVoltar {

                text-align: center;

            }

            .fas {

                margin-right: 5px;

            }

            footer {

                background-color: rgba(0, 0, 0, 0.2);

            }

            .navbar-brand {

                margin-right: 5px;

            }

        </style>

    </head>

    <!-- Realiza a importação da barra de navegação -->

    <?php

        require_once "barraNavegacao.php";

    ?>

    <!-- Corpo da página -->

    <body>

        <!-- Título da página -->

        <div id="containerTitulo">
            <h1 class="display-5">Não há gincanas ativas em sua cidade</h1>
            <h1 class="display-6">Crie uma agora!</h1>
        </div>
   
        <!-- Cards das opções de criação de gincanas -->

        <div class="row row-cols-1 row-cols-md-2 g-4">
  	        <div class="col">
    	        <div class="card text-center h-100">
      		        <img src="imagens/cards/example1.jpg" class="card-img-top" alt="...">
      		        <div class="card-body">
        		        <h3 class="card-title">Card title</h3>
        		        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				        <a class="btn btn-primary"><i class="fas fa-plus fa-fw"></i>CRIAR GINCANA EMPRESARIAL</a>
			        </div>
    	        </div>
  	        </div>
  	        <div class="col">
    	        <div class="card text-center h-100">
      		        <img src="imagens/cards/example2.jpg" class="card-img-top" alt="...">
      			        <div class="card-body">
        			        <h3 class="card-title">Card title</h3>
        			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					        <a class="btn btn-primary"><i class="fas fa-plus fa-fw"></i>CRIAR GINCANA PESSOAL</a>
				        </div>
    		        </div>
  		        </div>
            </div>
        </div>

        <!-- Botão de retorno -->
        
        <div id="containerBotaoVoltar">
            <a id="botaoVoltar" class="btn btn-outline-danger"><i class="fas fa-arrow-left fa-fw"></i>VOLTAR</a>
        </div>

    </body>

    <!-- Realiza a importação do rodapé da página -->

    <?php

        require_once "rodape.php";

    ?>

</html>