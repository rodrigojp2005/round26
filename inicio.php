<!DOCTYPE html>
<html>

    <!-- Cabeçalho da página -->

    <head>

        <!-- Realiza a importação do código das bibliotecas -->

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

            .card img {

                height: 375px;

            }

            footer {

                background-color: rgba(0, 0, 0, 0.2);

            }

            #carrosselInformativo {

                margin: 20px 20px 0px 20px;
                height: 500px;

            }

            img {

                height: 500px;

            }

        </style>

    </head>

    <!-- Realiza a importação da barra de navegação -->

    <?php

        require_once "barraNavegacao.php";

    ?>

    <!-- Corpo da página -->

    <body>

        <!-- Carrossel informátivo -->

        <div id="carrosselInformativo" class="carousel slide carousel-fade" data-bs-ride="carousel">
	        <div class="carousel-indicators">
        	    <button type="button" data-bs-target="#carrosselCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    	        <button type="button" data-bs-target="#carrosselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            	<button type="button" data-bs-target="#carrosselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        	</div>
	        <div class="carousel-inner">
            	<div class="carousel-item active">
      		        <img src="imagens/carrosselInformativo/example1.jpg" class="d-block w-100" alt="...">
    	        </div>
    	        <div class="carousel-item">
      		        <img src="imagens/carrosselInformativo/example2.jpg" class="d-block w-100" alt="...">
    	        </div>
    	        <div class="carousel-item">
      		        <img src="imagens/carrosselInformativo/example3.jpg" class="d-block w-100" alt="...">
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
    	        <div class="card text-center h-100">
      		        <img src="imagens/cards/example1.jpg" class="card-img-top" alt="...">
      		        <div class="card-body">
        		        <h5 class="card-title">Card title</h5>
        		        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				        <a class="btn btn-primary"><i class="fas fa-gamepad fa-fw"></i>DISPUTAR JOGOS</a>
			        </div>
    	        </div>
  	        </div>
  	        <div class="col">
    	        <div class="card text-center h-100">
      		        <img src="imagens/cards/example2.jpg" class="card-img-top" alt="...">
      			        <div class="card-body">
        			        <h5 class="card-title">Card title</h5>
        			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					        <a class="btn btn-primary"><i class="fas fa-gamepad fa-fw"></i>DISPUTAR JOGOS</a>
				        </div>
    		        </div>
  		        </div>
  	        <div class="col">
    	        <div class="card text-center h-100">
      		        <img src="imagens/cards/example3.jpg" class="card-img-top" alt="...">
      			        <div class="card-body">
        			        <h5 class="card-title">Card title</h5>
        			        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					        <a class="btn btn-primary"><i class="fas fa-plus fa-fw"></i>CRIAR JOGOS</a>
				        </div>
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