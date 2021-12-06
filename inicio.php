<!DOCTYPE html>
<html>

    <!-- Cabeçalho da página -->

    <head>

        <!-- Realiza a importação do arquivo das bibliotecas -->

        <?php

            require_once "bibliotecas.php";

        ?>

        <!-- Título da página -->

        <title>Início - Round26</title>

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

            #carrosselInformativo {

                margin: 20px 20px 0px 20px;
                height: 500px;

            }

            .imagemBanner {

                height: 500px;

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

		<main>

        	<!-- Carrossel informátivo -->

        	<div id="carrosselInformativo" class="carousel slide carousel-fade" data-bs-ride="carousel">
	        	<div class="carousel-indicators">
        	    	<button type="button" data-bs-target="#carrosselCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    	        	<button type="button" data-bs-target="#carrosselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            		<button type="button" data-bs-target="#carrosselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        		</div>
	       	 	<div class="carousel-inner">
            		<div class="carousel-item active">
      		        	<img src="imagens/carrosselInformativo/example1.jpg" class="imagemBanner d-block w-100" alt="...">
    	        	</div>
    	        	<div class="carousel-item">
      		        	<img src="imagens/carrosselInformativo/example2.jpg" class="imagemBanner d-block w-100" alt="...">
    	        	</div>
    	        	<div class="carousel-item">
      		        	<img src="imagens/carrosselInformativo/example3.jpg" class="imagemBanner d-block w-100" alt="...">
    	        	</div>
  	        	</div>
  	        	<button class="carousel-control-prev" type="button" data-bs-target="#carrosselInformativo" data-bs-slide="prev">
    	        	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    	        	<span class="visually-hidden">Anterior</span>
  	        	</button>
  	        	<button class="carousel-control-next" type="button" data-bs-target="#carrosselInformativo" data-bs-slide="next">
    	        	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	        	<span class="visually-hidden">Próximo</span>
  	       	 	</button>
        	</div>

        	<!-- Cards da página inicial -->

       	 	<div class="row row-cols-1 row-cols-md-3 g-4">
  	       	 	<div class="col">
    	        	<div class="card text-center h-100 shadow-sm">
      		        	<img src="imagens/cards/example1.jpg" class="imagemDestaqueCard card-img-top" alt="...">
      		        	<div class="card-body">
        		        	<h3 class="card-title">Gincanas Empresariais</h3>
        		        	<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nulla quae dolorem iusto id, cupiditate soluta quam, ab, dicta rerum iure nemo in quibusdam praesentium laudantium dolores. Rem, velit illum.</p>
				        	<a class="btn btn-primary"><i class="fas fa-gamepad fa-fw"></i>DISPUTAR JOGOS</a>
			        	</div>
    	        	</div>
  	       		</div>
  	        	<div class="col">
    	        	<div class="card text-center h-100 shadow-sm">
      		        	<img src="imagens/cards/example2.jpg" class="imagemDestaqueCard card-img-top" alt="...">
      			        <div class="card-body">
        			        <h3 class="card-title">Gincanas Pessoais</h3>
        			        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique ea expedita exercitationem commodi atque eius et perspiciatis accusantium obcaecati ad officia, illo, nostrum dicta quidem voluptate, vero at qui! Officia!</p>
					        <a class="btn btn-primary"><i class="fas fa-gamepad fa-fw"></i>DISPUTAR JOGOS</a>
				        </div>
    		        </div>
  		        </div>
  	        	<div class="col">
    	        	<div class="card text-center h-100 shadow-sm">
      		        	<img src="imagens/cards/example3.jpg" class="imagemDestaqueCard card-img-top" alt="...">
      			        <div class="card-body">
        			        <h3 class="card-title">Criar Gincana</h3>
        			        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi saepe nemo soluta sit sequi error natus, omnis fuga, quos, beatae animi. Hic eum velit voluptatum optio laudantium sapiente labore voluptates!</p>
					        <a class="btn btn-primary"><i class="fas fa-plus fa-fw"></i>CRIAR JOGOS</a>
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