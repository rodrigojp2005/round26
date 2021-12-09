<!DOCTYPE html>
<html>

    <!-- Cabeçalho da página -->

    <head>

        <!-- Realiza a importação do código das bibliotecas -->

        <?php

            require_once "bibliotecas.php";

        ?>

        <!-- Título da página -->

        <title>Ranking - Round26</title>

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
                margin: 0px 20px 20px 20px;

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
            <h1 class="formatacaoDestaque">Ranking de Gincana</h1>
            <h3>4 usuários estão participando dessa gincana</h3>
            <p>Confira na tabela abaixo as posições dos participantes dessa gincana.</p>
        </header>

        <!-- Ranking da gincana -->

        <main>
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
                        <th scope="row"><i class="fas fa-trophy fa-fw" style="color: gold; margin-right: 0px;"></i></th>
                        <td>Ana Joanna</td>
                        <td>20</td>
                        <td>100% (R$ 20,00)</td>
                        <td><a class="btn formatacaoDestaque"><i class="fas fa-ticket-alt fa-fw"></i>RESGATAR CUPOM</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-trophy fa-fw" style="color: silver; margin-right: 0px;"></i></th>
                        <td>Bob Roberto</td>
                        <td>19</td>
                        <td>90% (R$ 19,00)</td>
                        <td><a class="btn formatacaoDestaque"><i class="fas fa-ticket-alt fa-fw"></i>RESGATAR CUPOM</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fas fa-trophy fa-fw" style="color: #CD7F32; margin-right: 0px;"></i></th>
                        <td>Lucas Martins</td>
                        <td>18</td>
                        <td>80% (R$ 18,00)</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Maria Carolina</td>
                        <td>17</td>
                        <td>70% (R$ 17,00)</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </main>

        <!-- Botão de retorno -->
        
        <div id="containerBotaoVoltar">
            <a class="btn btn-outline-danger formatacaoDestaque" href="#"><i class="fas fa-arrow-left fa-fw"></i>VOLTAR PARA A PÁGINA DE GINCANAS ATIVAS</a>
        </div>

        <!-- Realiza a importação do rodapé da página -->

        <?php

            require_once "rodape.php";

        ?>

    </body>

</html>