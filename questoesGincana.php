<!DOCTYPE html>
<html>

    <!-- Cabeçalho da página -->

    <head>

        <!-- Realiza a importação do código das bibliotecas -->

        <?php

            require_once "bibliotecas.php";

        ?>

        <!-- Título da página -->

        <title>Questões da Gincana - Round26</title>

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

                .btn:first-child {

                    margin-bottom: 10px;

                }

                #botaoSumbit {

                    margin-bottom: 0px;
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
        <!-- Esta seção compreende o formulário de preenchimento de código do amigo e do título do corpo da página -->

        <header>

            <h1>Questões da Gincana</h1>
            <h1 class="display-6">Mostrando as questões da Gincana de Exemplo #1</h1>

            <form class="row g-3 align-items-center d-flex justify-content-center">
                <div class="col-auto">
                    <label for="inputCodigoAmigo" class="col-form-label"><strong>Possui um código de um amigo?</strong> Digite-o aqui e ganhe 2 pontos!</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="inputCodigoAmigo" class="form-control">
                </div>
                <div class="col-auto">
                    <input id="botaoSumbit" class="btn btn-primary" type="submit" value="ENVIAR" name="">
                </div>
            </form>

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
                            <a class="btn btn-primary"><i class="fas fa-gamepad fa-fw"></i>RESPONDER</a>
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
                            <a class="btn btn-primary"><i class="fas fa-gamepad fa-fw"></i>RESPONDER</a>
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
                            <a class="btn btn-primary"><i class="fas fa-gamepad fa-fw"></i>RESPONDER</a>
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