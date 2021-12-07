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

            header {

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

                margin: 20px 20px 0px 20px;

            }

            .linhaSelectPontos .col {

                margin-bottom: 20px;

            }

            .teste {

                margin-right: 0px;
            }

            .row {

                padding-right: 0px;
                padding-left: 0px;

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
            <h1 class="formatacaoDestaque">Criação de Gincanas Empresariais</h1>
            <h3>Digite nos campos abaixo as informações da nova gincana empresarial:</h3>
        </header>
   
        <!-- Campos de entrada para criação de Gincanas Empresariais -->

        <main>
            <form id="formulario" class="row g-3 align-items-center d-flex justify-content-center">
                <div class="mb-3">
                    <label for="inputTitulo" class="form-label h5 formatacaoDestaque">Título<span class="asteriscoObrigatorio"> *</span></label>
                    <p class="form-text" id="textoTitulo">Digite o título de sua gincana. Recomendamos a utilização do nome da sua empresa como nome de gincana.</p>
                    <input type="text" class="form-control" id="inputTitulo" aria-describedby="textoTitulo" required>
                </div>
                <div class="mb-3">
                    <label for="inputCNPJ" class="form-label h5 formatacaoDestaque">CNPJ<span class="asteriscoObrigatorio"> *</span></label>
                    <p class="form-text" id="textoCNPJ"><strong>Não se preocupe!</strong> Não iremos compartilhar seu CNPJ com ninguém.</p>
                    <input type="text" class="form-control" id="inputCNPJ" aria-describedby="textoCNPJ" required>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="inputInicio" class="form-label h5 formatacaoDestaque">Início da gincana<span class="asteriscoObrigatorio"> *</span></label>
                        <p class="form-text">Selecione o dia em que a gincana <strong>começa</strong>.</p>
                        <input type="date" class="form-control" aria-label="Início da gincana" required>
                    </div>
                    <div class="col">
                        <label for="inputFim" class="form-label h5 formatacaoDestaque">Fim da gincana<span class="asteriscoObrigatorio"> *</span></label>
                        <p class="form-text">Selecione o dia em que a gincana <strong>termina</strong>.</p>
                        <input type="date" class="form-control" aria-label="Fim da gincana" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputDescricao" class="form-label h5 formatacaoDestaque">Descrição<span class="asteriscoObrigatorio"> *</span></label>
                    <p class="form-text">Descreva a sua gincana.</p>
                    <textarea class="form-control" id="inputDescricao" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="inputRegras" class="form-label h5 formatacaoDestaque">Regras<span class="asteriscoObrigatorio"> *</span></label>
                    <p class="form-text">Informe aqui as regras de sua gincana.</p>
                    <textarea class="form-control" id="inputRegras" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="inputPremio" class="form-label h5 formatacaoDestaque">Prêmio<span class="asteriscoObrigatorio"> *</span></label>
                    <p class="form-text" id="textoPremio">Digite neste campo o tipo de produto ou serviço que será ofertado pela gincana.</p> 
                    <input type="text" class="form-control" id="inputPremio" aria-describedby="textoPremio" required>
                </div>

                <div class="mb-3">
                    <label for="inputValorPremio" class="form-label h5 formatacaoDestaque">Valor do prêmio<span class="asteriscoObrigatorio"> *</span></label>
                    <p class="form-text">Digite aqui o valor integral (sem descontos) do serviço ou do produto oferecido.</p>
                    <input type="text" class="form-control" id="inputValorPremio" required>
                </div>
                <div class="mb-3">
                    <label for="selectValidade" class="form-label h5 formatacaoDestaque" id="selectLabelValidade">Validade do cupom<span class="asteriscoObrigatorio"> *</span></label>
                    <p class="form-text">Escolha o prazo de validade do cupom de desconto.</p>
                    <select class="form-select" aria-labelledby="selectLabelValidade">
                        <option selected>Selecione uma opção...</option>
                        <option value="30">30 dias</option>
                        <option value="60">60 dias</option>
                        <option value="90">90 dias</option>
                    </select>
                </div>
                <label class="form-label h5 formatacaoDestaque">Pontos (porcentagem de descontos) <span class="asteriscoObrigatorio"> *</span></label>
                <p class="form-text">Escolha a quantidade de pontos gerados aos mais bem colocados.</p>
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
                <p class="form-text"><strong>A partir do 10º colocado: </strong>10% + 1% por questão correta (MÁX.: 10).</p>
                <div class="mb-3">
                    <label for="inputImagem" class="form-label h5 formatacaoDestaque">Imagem de destaque</label>
                    <p class="form-text">Envie uma imagem de destaque para a sua gincana.</p>
                    <input class="form-control" type="file" id="inputImagem">   
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkboxTermos" required>
                    <label class="form-check-label" for="checkboxTermos">Li e concordo com os <a href="#" target="_blank">Termos de Uso</a><span class="asteriscoObrigatorio"> *</span></label>
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