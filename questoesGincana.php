<!DOCTYPE html>
<html>

    <!-- Cabeçalho da página -->

    <head>

        <!-- Realiza a importação do código das bibliotecas -->

        <?php

            require_once "bibliotecas.php";

        ?>

        <!-- Título da página -->

        <title>Questões das Gincana - Round26</title>

        <!-- CSS -->

        <style>

            #containerTitulo {

                text-align: center;
                margin: 20px 20px 0px 20px;

            }

            .navbar-brand {

                margin-right: 5px;

            }

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

            ul {

                text-align: left;

            }

        </style>

    </head>

    <!-- Realiza a importação da barra de navegação -->

    <?php

        require_once "barraNavegacao.php";

    ?>

    <!-- Corpo da página -->

    <body>

        <div id="containerTitulo">
            <h3 class="display-6">Digite o código do seu amigo e ganhe dois (2) pontos!</h3>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
  	        <div class="col">
    	        <div class="card text-center">
      		        <img src="imagens/cards/example1.jpg" class="card-img-top" alt="...">
      		        <div class="card-body">
        		        <h3 class="card-title">Card title</h3>
                        <h5 class="card-subtitle mb-2 text-muted">Card subtitle</h5>
        		        <p class="card-text">
                            <ul>
                                <li>PRIMEIRA ALTERNATIVA</li>
                                <li>SEGUNDA ALTERNATIVA</li>
                                <li>TERCEIRA ALTERNATIVA</li>
                            </ul>
                        </p>
                        <a class="btn btn-primary"><i class="fas fa-gamepad fa-fw"></i>DISPUTAR JOGO</a>
			        </div>
    	        </div>
  	        </div>
  	        <div class="col">
    	        <div class="card text-center">
      		        <img src="imagens/cards/example2.jpg" class="card-img-top" alt="...">
      			        <div class="card-body">
                            <h3 class="card-title">Card title</h3>
                            <h5 class="card-subtitle mb-2 text-muted">Card subtitle</h5>
        		            <p class="card-text">
                                <ul>
                                    <li>PRIMEIRA ALTERNATIVA</li>
                                    <li>SEGUNDA ALTERNATIVA</li>
                                    <li>TERCEIRA ALTERNATIVA</li>
                                </ul>
                            </p>
                        <a class="btn btn-primary"><i class="fas fa-gamepad fa-fw"></i>DISPUTAR JOGO</a>
				        </div>
    		        </div>
  		        </div>
  	        <div class="col">
    	        <div class="card text-center">
      		        <img src="imagens/cards/example3.jpg" class="card-img-top" alt="...">
      			        <div class="card-body">
                            <h3 class="card-title">Card title</h3>
                            <h5 class="card-subtitle mb-2 text-muted">Card subtitle</h5>
        		            <p class="card-text">
                                <ul>
                                    <li>PRIMEIRA ALTERNATIVA</li>
                                    <li>SEGUNDA ALTERNATIVA</li>
                                    <li>TERCEIRA ALTERNATIVA</li>
                                </ul>
                            </p>
                            <a class="btn btn-primary"><i class="fas fa-gamepad fa-fw"></i>DISPUTAR JOGO</a>
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