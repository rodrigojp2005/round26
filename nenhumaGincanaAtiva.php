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

            header {

                margin: 20px 20px 0px 20px;
                text-align: center;

            }

            .row {

                margin: 0px 20px 20px 20px;

            }

            .imagemDestaqueCard {

                height: 350px;

            }

            #containerBotaoVoltar {

                text-align: center;
                margin-bottom: 20px;
                margin-left: 20px;
                margin-right: 20px;

            }

            i {

                margin-right: 5px;

            }

            @media (min-width: 0px) and (max-width: 1199.98px) { 
				
				.btn {

					width: 100%;

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
            <h1 class="formatacaoDestaque">Gincanas Ativas</h1>
            <h3>Não há gincanas ativas em sua cidade. Crie uma agora!</h3>
        </header>
   
        <!-- Cards das opções de criação de gincanas -->

        <main>
            <div class="row row-cols-1 row-cols-md-2 g-4">
  	            <div class="col">
    	            <div class="card text-center h-100 shadow-sm">
      		            <img src="imagens/cards/example1.jpg" class="imagemDestaqueCard card-img-top" alt="...">
      		            <div class="card-body">
        		            <h3 class="card-title formatacaoDestaque">Gincanas Empresariais</h3>
        		            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis molestias beatae recusandae, vel laudantium odio deserunt eum nam voluptate incidunt in pariatur sapiente iure minima esse ipsum quisquam expedita exercitationem.</p>
				            <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-plus fa-fw"></i>CRIAR GINCANA EMPRESARIAL</a>
                        </div>
    	            </div>
  	            </div>
  	            <div class="col">
    	            <div class="card text-center h-100 shadow-sm">
      		            <img src="imagens/cards/example2.jpg" class="imagemDestaqueCard card-img-top" alt="...">
      			        <div class="card-body">
        			        <h3 class="card-title formatacaoDestaque">Gincanas Pessoais</h3>
        			        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore maiores ex aspernatur omnis iure, a veritatis consectetur eveniet quo officia quia vero natus, reprehenderit et optio sed ab saepe reiciendis!</p>
					        <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-plus fa-fw"></i>CRIAR GINCANA PESSOAL</a>
				        </div>
    		        </div>
  		        </div>
            </div>
        </main>

        <!-- Botão de retorno -->
        
        <div id="containerBotaoVoltar">
            <a class="btn btn-outline-danger formatacaoDestaque" href="#"><i class="fas fa-arrow-left fa-fw"></i>VOLTAR PARA A PÁGINA INICIAL</a>
        </div>

        <!-- Realiza a importação do rodapé da página -->

        <?php

            require_once "rodape.php";

        ?>

    </body>

</html>