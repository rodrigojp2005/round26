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

            .card img {

                height: 375px;

            }

            footer {

                background-color: rgba(0, 0, 0, 0.2);

            }

            img {

                height: 500px;

            }

            h1 {

                margin: 20px;
                text-align: center;

            }

            #container {

                text-align: center;

            }

            .navbar-brand {

                margin-right: 5px;

            }
            
            .collapseRegras {

                margin-bottom: 15px;

            }

        </style>

    </head>

    <!-- Realiza a importação da barra de navegação -->

    <?php

        require_once "barraNavegacao.php";

    ?>

    <!-- Corpo da página -->

    <body>

        <h1 class="display-6"><span class="badge bg-primary">...</span> gincanas empresariais estão ativas em sua cidade</h1>

        <div id="container">
            <a id="botaoCriarGincana" class="btn btn-outline-primary"><i class="fas fa-plus fa-fw"></i>CRIAR GINCANA EMPRESARIAL</a>
        </div>

        <!-- Cards das gincanas empresariais -->

        <div class="row row-cols-1 row-cols-md-3 g-4">
  	        <div class="col">
    	        <div class="card text-center">
      		        <img src="imagens/cards/example1.jpg" class="card-img-top" alt="...">
      		        <div class="card-body">
        		        <h3 class="card-title">Card title</h3>
                        <h5><i class="fas fa-clock fa-fw"></i>00:00:00</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        		        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				        <p>
                            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRegrasGincana1" aria-expanded="false" aria-controls="collapseRegrasGincana1"><i class="fas fa-chevron-down fa-fw"></i><strong>CLIQUE PARA VER MAIS</strong></button>
                        </p>
                        <div class="collapse collapseRegras" id="collapseRegrasGincana1">
                            <div class="card card-body">
                                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                        <a class="btn btn-primary"><i class="fas fa-gamepad fa-fw"></i>DISPUTAR GINCANA</a>
			        </div>
    	        </div>
  	        </div>
  	        <div class="col">
    	        <div class="card text-center">
      		        <img src="imagens/cards/example2.jpg" class="card-img-top" alt="...">
      			        <div class="card-body">
                            <h3 class="card-title">Card title</h3>
                            <h5><i class="fas fa-clock fa-fw"></i>00:00:00</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        		            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p>
                                <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRegrasGincana2" aria-expanded="false" aria-controls="collapseRegrasGincana2"><i class="fas fa-chevron-down fa-fw"></i><strong>CLIQUE PARA VER MAIS</strong></button>
                            </p>
                            <div class="collapse collapseRegras" id="collapseRegrasGincana2">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <a class="btn btn-primary"><i class="fas fa-gamepad fa-fw"></i>DISPUTAR GINCANA</a>
				        </div>
    		        </div>
  		        </div>
  	        <div class="col">
    	        <div class="card text-center">
      		        <img src="imagens/cards/example3.jpg" class="card-img-top" alt="...">
      			        <div class="card-body">
                            <h3 class="card-title">Card title</h3>
                            <h5><i class="fas fa-clock fa-fw"></i>00:00:00</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        		            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p>
                                <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRegrasGincana3" aria-expanded="false" aria-controls="collapseRegrasGincana3"><i class="fas fa-chevron-down fa-fw"></i><strong>CLIQUE PARA VER MAIS</strong></button>
                            </p>
                            <div class="collapse collapseRegras" id="collapseRegrasGincana3">
                                <div class="card card-body">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                            <a class="btn btn-primary"><i class="fas fa-gamepad fa-fw"></i>DISPUTAR GINCANA</a>
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