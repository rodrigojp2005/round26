<!DOCTYPE html>
<html>

    <!-- Cabeçalho da página -->

    <head>

        <!-- Realiza a importação do código das bibliotecas -->

        <?php

            require_once "bibliotecas.php";

        ?>

        <!-- Título da página -->

        <title>Login - Round26</title>

        <style>
            
            html, body {

                height: 100%;

            }

            body {
                
                display: flex;
                align-items: center;
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;

            }

            .form-signin {

                width: 100%;
                max-width: 330px;
                padding: 15px;
                margin: auto;

            }

            .form-signin .checkbox {
  
                font-weight: 400;

            }


            .form-signin .form-floating:focus-within {
  
                z-index: 2;

            }


            .form-signin input[type="email"] {
  
                margin-bottom: -1px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;

            }

            .form-signin input[type="password"] {
  
                margin-bottom: 10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;

            }

        </style>

    </head>

    <!-- Corpo da página -->

    <body class="text-center">
        <main class="form-signin card shadow">
            <form>
                <h1 class="formatacaoDestaque">Round26</h1>
                <h4 class="mb-3 fw-normal">Informe suas informações de entrada abaixo</h4>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput">
                    <label for="floatingInput">Endereço de e-mail</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword">
                    <label for="floatingPassword">Senha</label>
                </div>
                <p class="mb-3 text-muted">Esqueceu sua senha? Clique <a href="#">aqui</a></p>
                <button class="w-100 btn btn-lg btn-primary formatacaoDestaque" type="submit"><i class="fas fa-sign-in-alt fa-fw" style="margin-right: 5px;"></i>ENTRAR</button>
            </form>
        </main>
    </body>

</html>