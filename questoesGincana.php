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

            .imagemDestaqueCard {

                height: 300px;

            }

            .listagemAlternativas {

                text-align: left;

            }

            .card-text {

                margin: 0px;

            }
        
            #formulario {

                margin-bottom: 0px;

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

        <header>
            <h1 class="formatacaoDestaque">Questões da Gincana</h1>
            <h3>Mostrando as questões da "Gincana de Exemplo #1"</h3>
            <form id="formulario" class="row g-3 align-items-center d-flex justify-content-center">
                <div class="col-auto">
                    <label for="inputCodigoAmigo" class="col-form-label">Possui um código de um amigo? Informe-o no campo ao lado e <strong>ganhe 2 pontos</strong>!</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="inputCodigoAmigo" class="form-control">
                </div>
                <div class="col-auto">
                    <input id="botaoSumbit" class="btn btn-outline-primary formatacaoDestaque" type="submit" value="SUBMETER" name="">
                </div>
            </form>
        </header>

        <!-- Cards das questões -->

        <main>
            <div class="row row-cols-1 row-cols-md-3 g-4">
  	            <div class="col">
    	            <div class="card text-center shadow-sm">
      		            <img src="imagens/cards/example1.jpg" class="imagemDestaqueCard card-img-top" alt="...">
      		            <div class="card-body">
        		            <h4 class="card-title formatacaoDestaque">Questão #1</h4>
            		        <p class="card-text">
                                <ul class="listagemAlternativas">
                                    <li>Alternativa...</li>
                                    <li>Alternativa...</li>
                                    <li>Alternativa...</li>
                                </ul>
                            </p>
                            <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-gamepad fa-fw"></i>RESPONDER</a>
			            </div>
    	            </div>
  	            </div>
  	            <div class="col">
    	            <div class="card text-center shadow-sm">
      		            <img src="imagens/cards/example2.jpg" class="imagemDestaqueCard card-img-top" alt="...">
      			        <div class="card-body">
                            <h4 class="card-title formatacaoDestaque">Questão #2</h4>
        		            <p class="card-text">
                                <ul class="listagemAlternativas">
                                    <li>Alternativa...</li>
                                    <li>Alternativa...</li>
                                    <li>Alternativa...</li>
                                </ul>
                            </p>
                            <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-gamepad fa-fw"></i>RESPONDER</a>
				        </div>
    		        </div>
  		        </div>
  	            <div class="col">
    	            <div class="card text-center shadow-sm">
      		            <img src="imagens/cards/example3.jpg" class="imagemDestaqueCard card-img-top" alt="...">
      			        <div class="card-body">
                            <h4 class="card-title formatacaoDestaque">Questão #3</h4>
        		            <p class="card-text">
                                <ul class="listagemAlternativas">
                                    <li>Alternativa...</li>
                                    <li>Alternativa...</li>
                                    <li>Alternativa...</li>
                                </ul>
                            </p>
                            <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-gamepad fa-fw"></i>RESPONDER</a>
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