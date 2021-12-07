<!DOCTYPE html>
<html>

    <!-- Cabeçalho da página -->

    <head>

        <!-- Realiza a importação do código das bibliotecas -->

        <?php

            require_once "bibliotecas.php";

        ?>

        <!-- Título da página -->

        <title>Gincanas Empresariais Ativas - Round26</title>

        <!-- CSS -->

        <style>
        
            i {
  
                margin-right: 5px;

            }

            .row {

                margin: 0px 20px 20px 20px;

            }

            .imagemDestaqueCard {

                height: 375px;

            }

            header {

                margin: 20px 20px 0px 20px;
                text-align: center;

            }
            
            .collapseRegras {

                margin-bottom: 15px;

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
            <h1 class="formatacaoDestaque">Gincanas Empresariais Ativas</h1>
            <h3>3 gincanas empresariais estão ativas em sua cidade</h3>
            <p>Clique <a href="#">aqui</a> para acessar as <strong>gincanas pessoais ativas</strong>, ou clique no botão abaixo para criar uma nova gincana!</p>
            <a class="btn btn-outline-primary formatacaoDestaque"><i class="fas fa-plus fa-fw"></i>CRIAR GINCANA EMPRESARIAL</a>
        </header>

        <!-- Cards das gincanas empresariais -->
        
        <main>
            <div class="row row-cols-1 row-cols-md-3 g-4">
  	            <div class="col">
    	            <div class="card text-center shadow-sm">
      		            <img src="imagens/cards/example1.jpg" class="imagemDestaqueCard card-img-top" alt="...">
      		            <div class="card-body">
        		            <h3 class="card-title formatacaoDestaque">Gincana #1</h3>
                            <h5><i class="fas fa-stopwatch fa-fw"></i>00:00:00</h5>
                            <p class="card-subtitle mb-2"><strong>Descrição</strong></p>
        		            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus non voluptatem aut corporis ratione, ducimus iste placeat corrupti nesciunt tempora! Autem tempora perferendis voluptatem tenetur necessitatibus ad harum iste asperiores?</p>
				            <p>
                                <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRegrasGincana1" aria-expanded="false" aria-controls="collapseRegrasGincana1"><i class="fas fa-chevron-down fa-fw"></i><strong>CLIQUE PARA VER MAIS</strong></button>
                            </p>
                            <div class="collapse collapseRegras" id="collapseRegrasGincana1">
                                <div class="card card-body">
                                    <p class="card-subtitle mb-2"><strong>Regras</strong></p>
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-gamepad fa-fw"></i>DISPUTAR GINCANA</a>
			            </div>
    	            </div>
  	            </div>
  	            <div class="col">
    	            <div class="card text-center shadow-sm">
      		            <img src="imagens/cards/example2.jpg" class="imagemDestaqueCard card-img-top" alt="...">
      		            <div class="card-body">
        		            <h3 class="card-title formatacaoDestaque">Gincana #2</h3>
                            <h5><i class="fas fa-stopwatch fa-fw"></i>00:00:00</h5>
                            <p class="card-subtitle mb-2"><strong>Descrição</strong></p>
        		            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias voluptates odio voluptatibus asperiores vitae laborum nihil provident dolores aliquid magni? Nulla, officia earum aliquid odio culpa eaque quidem reiciendis. Est?</p>
				            <p>
                                <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRegrasGincana2" aria-expanded="false" aria-controls="collapseRegrasGincana2"><i class="fas fa-chevron-down fa-fw"></i><strong>CLIQUE PARA VER MAIS</strong></button>
                            </p>
                            <div class="collapse collapseRegras" id="collapseRegrasGincana2">
                                <div class="card card-body">
                                    <p class="card-subtitle mb-2"><strong>Regras</strong></p>
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-gamepad fa-fw"></i>DISPUTAR GINCANA</a>
			            </div>
    	            </div>
  	            </div>
  	            <div class="col">
    	            <div class="card text-center shadow-sm">
      		            <img src="imagens/cards/example3.jpg" class="imagemDestaqueCard card-img-top" alt="...">
      		            <div class="card-body">
        		            <h3 class="card-title formatacaoDestaque">Gincana #3</h3>
                            <h5><i class="fas fa-stopwatch fa-fw"></i>00:00:00</h5>
                            <p class="card-subtitle mb-2"><strong>Descrição</strong></p>
        		            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore delectus deserunt expedita excepturi deleniti possimus magni accusantium qui fugiat asperiores, ipsam, unde repellendus maxime corrupti id inventore fuga. Quibusdam, distinctio?</p>
				            <p>
                                <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRegrasGincana3" aria-expanded="false" aria-controls="collapseRegrasGincana3"><i class="fas fa-chevron-down fa-fw"></i><strong>CLIQUE PARA VER MAIS</strong></button>
                            </p>
                            <div class="collapse collapseRegras" id="collapseRegrasGincana3">
                                <div class="card card-body">
                                    <p class="card-subtitle mb-2"><strong>Regras</strong></p>
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-gamepad fa-fw"></i>DISPUTAR GINCANA</a>
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