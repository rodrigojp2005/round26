<!DOCTYPE html>
<html>

    <!-- Cabeçalho da página -->

    <head>

        <!-- Realiza a importação do código das bibliotecas -->

        <?php

            require_once "bibliotecas.php";

        ?>

        <!-- Título da página -->

        <title>Criação de Gincana Pessoal - Round26</title>

        <!-- CSS -->

        <style>
        
            i {
  
                margin-right: 5px;

            }

            header {

                margin: 20px 20px 0px 20px;
                text-align: center;

            }

            main {

                margin: 20px;

            }

            @media (min-width: 0px) and (max-width: 1199.98px) { 
				
				.btn {

					width: 100%;

				}

                .btn:first-child {

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

        <header>
            <h1 class="display-5">Criação de Gincanas Pessoais</h1>
            <h1 class="display-6">Digite abaixo as informações da nova gincana:</h1>
        </header>

        <!-- Campos de entrada para criação de Gincanas Pessoais -->

        <main>
            <form class="row g-3 align-items-center d-flex justify-content-center">
                <div class="mb-3">
                    <label for="inputCNPJ" class="form-label h5">Pergunta</label>
                    <input type="text" class="form-control" id="inputCNPJ" aria-describedby="textoCNPJ" required>
                    <div id="textoCNPJ" class="form-text">Digite a pergunta da sua gincana.</div>
                </div>
                <div class="mb-3">
                    <label for="inputAlternativa1" class="form-label h5">1ª alternativa</label>
                    <input type="text" class="form-control" id="inputAlternativa1" aria-describedby="textoAlternativa1" required>
                    <div id="textoAlternativa1" class="form-text">Informe a primeira alternativa.</div>
                </div>
                <div class="mb-3">
                    <label for="inputAlternativa2" class="form-label h5">2ª alternativa</label>
                    <input type="text" class="form-control" id="inputAlternativa2" aria-describedby="textoAlternativa2" required>
                    <div id="textoAlternativa2" class="form-text">Informe a segunda alternativa.</div>
                </div>
                <div class="mb-3">
                    <label for="inputAlternativa3" class="form-label h5">3ª alternativa</label>
                    <input type="text" class="form-control" id="inputAlternativa3" aria-describedby="textoAlternativa3">
                    <div id="textoAlternativa3" class="form-text">Informe a terceira alternativa. <strong>Observação: </strong>este campo é opcional.</div>
                </div>
                <div class="mb-3">
                    <label for="inputImagem" class="form-label h5">Imagem de destaque</label>
                    <input class="form-control" type="file" id="inputImagem">
                    <div id="textoImagem" class="form-text">Este campo é opcional.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label h5" id="selectLabel">Gabarito</label>
                    <select class="form-select" aria-labelledby="selectLabel">
                        <option selected>Selecione uma opção...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <div id="textoSelect" class="form-text">Escolha a alternativa correta.</div>
                </div>
                <div class="mb-3 text-center">
                    <input type="submit" class="btn btn-primary" value="CADASTRAR GINCANA"></input>  
                    <a class="btn btn-outline-danger" href="inicio.php"><i class="fas fa-arrow-left fa-fw"></i>VOLTAR PARA A PÁGINA INICIAL</a>
                </div>  
            </form>
        </main>

        <!-- Realiza a importação do rodapé da página -->

        <?php

            require_once "rodape.php";

        ?>

    </body>

</html>