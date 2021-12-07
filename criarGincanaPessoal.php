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

            #formulario {

                margin: 20px 20px 0px 20px;

            }

            .asteriscoObrigatorio {

                color: red;

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
            <h1 class="formatacaoDestaque">Criação de Gincanas Pessoais</h1>
            <h3>Digite nos campos abaixo as informações da nova gincana pessoal:</h3>
        </header>

        <!-- Campos de entrada para criação de Gincanas Pessoais -->

        <main>
            <form class="row g-3 align-items-center d-flex justify-content-center" id="formulario">
                <div class="mb-3">
                    <label for="inputCNPJ" class="form-label h5 formatacaoDestaque">Pergunta<span class="asteriscoObrigatorio"> *</span></label>
                    <p id="textoCNPJ" class="form-text">Digite a pergunta da sua gincana.</p>
                    <input type="text" class="form-control" id="inputCNPJ" aria-describedby="textoCNPJ" required>
                </div>
                <div class="mb-3">
                    <label for="inputAlternativa1" class="form-label h5 formatacaoDestaque">1ª alternativa<span class="asteriscoObrigatorio"> *</span></label>
                    <p id="textoAlternativa1" class="form-text">Informe a primeira alternativa.</p>
                    <input type="text" class="form-control" id="inputAlternativa1" aria-describedby="textoAlternativa1" required>
                </div>
                <div class="mb-3">
                    <label for="inputAlternativa2" class="form-label h5 formatacaoDestaque">2ª alternativa<span class="asteriscoObrigatorio"> *</span></label>
                    <p id="textoAlternativa2" class="form-text">Informe a segunda alternativa.</p>
                    <input type="text" class="form-control" id="inputAlternativa2" aria-describedby="textoAlternativa2" required>
                </div>
                <div class="mb-3">
                    <label for="inputAlternativa3" class="form-label h5 formatacaoDestaque">3ª alternativa</label>
                    <p id="textoAlternativa3" class="form-text">Informe a terceira alternativa. <strong>Observação: </strong>esse campo é opcional.</p>
                    <input type="text" class="form-control" id="inputAlternativa3" aria-describedby="textoAlternativa3">
                </div>
                <div class="mb-3">
                    <label class="form-label h5 formatacaoDestaque" id="selectLabel">Gabarito<span class="asteriscoObrigatorio"> *</span></label>
                    <p id="textoSelect" class="form-text">Escolha a alternativa (das informadas anteriormente) que está correta.</p>
                    <select class="form-select" aria-labelledby="selectLabel">
                        <option selected>Selecione uma opção...</option>
                        <option value="1">1ª alternativa</option>
                        <option value="2">2ª alternativa</option>
                        <option value="3">3ª alternativa</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="inputImagem" class="form-label h5 formatacaoDestaque">Imagem de destaque</label>
                    <p id="textoImagem" class="form-text">Envie uma imagem de destaque para a sua gincana.</p>                    
                    <input class="form-control" type="file" id="inputImagem">
                </div>
                <div class="mb-3 text-center">
                    <a class="btn btn-outline-danger formatacaoDestaque" href="#"><i class="fas fa-arrow-left fa-fw"></i>VOLTAR PARA A PÁGINA INICIAL</a>
                    <input type="submit" class="btn btn-primary formatacaoDestaque" value="CADASTRAR GINCANA"></input>  
                </div>  
            </form>
        </main>

        <!-- Realiza a importação do rodapé da página -->

        <?php

            require_once "rodape.php";

        ?>

    </body>

</html>