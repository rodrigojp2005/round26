<!DOCTYPE html>
<html>

    <!-- Cabeçalho da página -->

    <head>

        <!-- Realiza a importação do código das bibliotecas -->

        <?php

            require_once "bibliotecas.php";

        ?>

        <!-- Título da página -->

        <title>Participantes - Round26</title>

        <!-- CSS -->

        <style>
        
            i {
  
                margin-right: 5px;

            }

            #containerTitulo {

                margin: 20px 20px 0px 20px;
                text-align: center;

            } 

            #tabelaParticipantes {

                margin: 20px;

            }

            td {
                height: 50px;
                vertical-align: middle;
            }

            tr th {

                height: 50px;
                vertical-align: middle;
                text-align: center;

            }

            #containerBotaoVoltar {

                text-align: center;
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
            <h1>Participantes da Gincana</h1>
            <h1 class="display-6">4 usuários estão participando da sua gincana!</h1>
        </div>

        <!-- Tabela dos participantes -->
        <!-- Observação: podemos utilizar essa mesma gincana para o usuário final, basta apenas ocultar
        os botões que permitem visualizar se o usuário já resgatou o cupom de desconto -->

        <div id="tabelaParticipantes">
            <table class="table table-bordered table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Pontos</th>
                        <th scope="col">Desconto</th>
                        <th scope="col">Cupom</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><i class="fas fa-trophy fa-fw" style="color: gold;"></i></th>
                        <td>Ana Joanna</td>
                        <td>20</td>
                        <td>100% (R$ 20,00)</td>
                        <td><a class="btn btn-success"><i class="fas fa-check fa-fw"></i>RESGATADO</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-trophy fa-fw" style="color: silver;"></i></th>
                        <td>Bob Roberto</td>
                        <td>19</td>
                        <td>90% (R$ 19,00)</td>
                        <td><a class="btn btn-success"><i class="fas fa-check fa-fw"></i>RESGATADO</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-trophy fa-fw" style="color: #B87333;"></i></th>
                        <td>Lucas Martins</td>
                        <td>18</td>
                        <td>80% (R$ 18,00)</td>
                        <td><a class="btn btn-danger"><i class="fas fa-times fa-fw"></i>NÃO RESGATADO</a></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Maria Carolina</td>
                        <td>17</td>
                        <td>70% (R$ 17,00)</td>
                        <td><a class="btn btn-danger"><i class="fas fa-times fa-fw"></i>NÃO RESGATADO</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Botão de retorno -->
        
        <div id="containerBotaoVoltar">
            <a class="btn btn-outline-danger" href="inicio.php"><i class="fas fa-arrow-left fa-fw"></i>VOLTAR PARA A PÁGINA INICIAL</a>
        </div>

    </body>

    <!-- Realiza a importação do rodapé da página -->

    <?php

        require_once "rodape.php";

    ?>

</html>