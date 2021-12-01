<!DOCTYPE html>
<html>

    <!-- Cabeçalho da página -->

    <head>

        <!-- Realiza a importação do código das bibliotecas -->

        <?php

            require_once "bibliotecas.php";

        ?>

        <!-- Título da página -->

        <title>Criação de Gincana Empresarial - Round26</title>

        <!-- CSS -->

        <style>

            #containerTitulo {

                margin: 20px 20px 0px 20px;
                text-align: center;

            }

            #containerBotaoVoltar {

                text-align: center;
                margin-bottom: 20px;

            }

            i {

                margin-right: 5px;

            }

            #formulario {

                margin: 20px;

            }

            .linhaSelectPontos .col {

                margin-bottom: 20px;

            }

        </style>

    </head>

    <!-- Realiza a importação da barra de navegação -->

    <?php

        require_once "barraNavegacao.php";

    ?>

    <!-- Corpo da página -->

    <body>

        <!-- Cabeçalho da página -->

        <div id="containerTitulo">
            <h1 class="display-5">Criação de Gincanas Empresariais</h1>
            <h1 class="display-6">Digite abaixo as informações da nova gincana:</h1>
        </div>
   
        <!-- Campos de entrada para criação de Gincanas Empresariais -->

        <form id="formulario" class="row g-3 align-items-center d-flex justify-content-center">
            <div class="mb-3">
                <label for="inputCNPJ" class="form-label h5">CNPJ</label>
                <input type="text" class="form-control" id="inputCNPJ" aria-describedby="textoCNPJ" required>
                <div id="textoCNPJ" class="form-text"><strong>Não se preocupe!</strong> Não iremos compartilhar seu CNPJ com ninguém.</div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="inputInicio" class="form-label h5">Início da gincana</label>
                    <input type="date" class="form-control" aria-label="Início da gincana" required>
                    <div id="textoInicio" class="form-text">Selecione o dia em que a gincana <strong>começa</strong>.</div>
                </div>
                <div class="col">
                    <label for="inputFim" class="form-label h5">Fim da gincana</label>
                    <input type="date" class="form-control" aria-label="Fim da gincana" required>
                    <div id="textoFim" class="form-text">Selecione o dia em que a gincana <strong>termina</strong>.</div>
                </div>
            </div>
            <div class="mb-3">
                <label for="inputTitulo" class="form-label h5">Título</label>
                <input type="text" class="form-control" id="inputTitulo" aria-describedby="textoTitulo" required>
                <div id="textoTitulo" class="form-text">Digite o título de sua gincana. Recomendamos a utilização do nome da sua empresa como nome de gincana.</div>
            </div>
            <div class="mb-3">
                <label for="inputPremio" class="form-label h5">Prêmio</label>
                <input type="text" class="form-control" id="inputPremio" aria-describedby="textoPremio" required>
                <div id="textoPremio" class="form-text">Digite neste campo o tipo de produto ou serviço que será ofertado pela gincana.</div>
            </div>
            <div class="mb-3">
                <label for="inputRegras" class="form-label h5">Regras</label>
                <textarea class="form-control" id="inputRegras" rows="3" required></textarea>
                <div id="textoRegras" class="form-text">Informe aqui as regras de sua gincana.</div>
            </div>
            <div class="mb-3">
                <label for="inputValorPremio" class="form-label h5">Valor do prêmio</label>
                <input type="text" class="form-control" id="inputValorPremio" required>
                <div id="textoValorPremio" class="form-text">Digite aqui o valor integral (sem descontos) do serviço e do produto oferecido.</div>
            </div>
            <div class="mb-3">
                <label for="inputDescricao" class="form-label h5">Descrição</label>
                <textarea class="form-control" id="inputDescricao" rows="3" required></textarea>
                <div id="textoDescricao" class="form-text">Descreva a gincana.</div>
            </div>
            <div class="mb-3">
                <label for="inputImagem" class="form-label h5">Imagem de destaque</label>
                <input class="form-control" type="file" id="inputImagem">
                <div id="textoImagem" class="form-text">Este campo é opcional.</div>
            </div>
            <div class="mb-3">
                <label for="selectValidade" class="form-label h5" id="selectLabelValidade">Validade do cupom</label>
                <select class="form-select" aria-labelledby="selectLabelValidade">
                    <option selected>Selecione uma opção...</option>
                    <option value="30">30 dias</option>
                    <option value="60">60 dias</option>
                    <option value="90">90 dias</option>
                </select>
                <div id="textoValidade" class="form-text">Escolha o prazo de validade do cupom de desconto.</div>
            </div>
            <label class="form-label h5">Pontos (porcentagem de descontos)</label>
            <div class="linhaSelectPontos row">
                <div class="col">
                    <label class="form-label" id="selectLabel">1º colocado (100%)</label>
                    <select class="form-select" aria-labelledby="selectLabel">
                        <option selected>Selecione uma opção...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="...">...</option>
                    </select>
                </div>
                <div class="col">
                    <label class="form-label" id="selectLabel2">2º colocado (90%)</label>
                    <select class="form-select" aria-labelledby="selectLabel2">
                        <option selected>Selecione uma opção...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="...">...</option>
                    </select>
                </div>
                <div class="col">
                    <label class="form-label" id="selectLabel3">3º colocado (80%)</label>
                    <select class="form-select" aria-labelledby="selectLabel3">
                        <option selected>Selecione uma opção...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="...">...</option>
                    </select>
                </div>
            </div>
            <div class="linhaSelectPontos row">
                <div class="col">
                    <label class="form-label" id="selectLabel4">4º colocado (70%)</label>
                    <select class="form-select" aria-labelledby="selectLabel4">
                        <option selected>Selecione uma opção...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="...">...</option>
                    </select>
                </div>
                <div class="col">
                    <label class="form-label" id="selectLabel5">5º colocado (60%)</label>
                    <select class="form-select" aria-labelledby="selectLabel5">
                        <option selected>Selecione uma opção...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="...">...</option>
                    </select>
                </div>
                <div class="col">
                    <label class="form-label" id="selectLabel6">6º colocado (50%)</label>
                    <select class="form-select" aria-labelledby="selectLabel6">
                        <option selected>Selecione uma opção...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="...">...</option>
                    </select>
                </div>
            </div>            
            <div class="linhaSelectPontos row">
                <div class="col">
                    <label class="form-label" id="selectLabel7">7º colocado (40%)</label>
                    <select class="form-select" aria-labelledby="selectLabel7">
                        <option selected>Selecione uma opção...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="...">...</option>
                    </select>
                </div>
                <div class="col">
                    <label class="form-label" id="selectLabel8">8º colocado (30%)</label>
                    <select class="form-select" aria-labelledby="selectLabel8">
                        <option selected>Selecione uma opção...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="...">...</option>
                    </select>
                </div>
                <div class="col">
                    <label class="form-label" id="selectLabel9">9º colocado (20%)</label>
                    <select class="form-select" aria-labelledby="selectLabel9">
                        <option selected>Selecione uma opção...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="...">...</option>
                    </select>
                </div>
            </div>            
            <div id="textoPontosObservacao" class="form-text"><strong>A partir do 10º colocado: </strong>10% + 1% por questão correta (MÁX.: 10%)</div>
            <div id="textoPontos" class="form-text">Escolha a quantidade de pontos gerados aos mais bem colocados.</div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkboxTermos" required>
                <label class="form-check-label" for="checkboxTermos">Li e concordo com os <a href="#" target="_blank">Termos de Uso</a></label>
            </div>
            <div class="mb-3 text-center">
                <input type="submit" class="btn btn-primary" value="CADASTRAR GINCANA"></input>  
                <a class="btn btn-outline-danger" href="inicio.php"><i class="fas fa-arrow-left fa-fw"></i>VOLTAR PARA A PÁGINA INICIAL</a>
            </div>         
        </form>

    </body>

    <!-- Realiza a importação do rodapé da página -->

    <?php

        require_once "rodape.php";

    ?>

</html>