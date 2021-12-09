<!DOCTYPE html>
<html>

    <!-- Cabeçalho da página -->

    <head>

        <!-- Realiza a importação do arquivo das bibliotecas -->

        <?php

            require_once "bibliotecas.php";

        ?>

        <!-- Título da página -->

        <title>Cadastro - Round26</title>

        <!-- CSS -->

        <style>

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

			}

        </style>

    </head>

    <!-- Corpo da página -->

    <body>

        <!-- Cabeçalho do corpo da página -->

        <header>
            <h1 class="formatacaoDestaque">Cadastro de Novo Usuário</h1>
            <h3>Seja muito bem-vindo(a)!</h3>
            <p>Digite nos campos abaixo suas informações para realizar o cadastro no site.</p>
        </header>

		<main>

            <!-- Formulário de cadastro de novos usuários -->

            <form id="formulario">
                <div class="mb-3">
                    <label for="inputNomeCompleto" class="form-label h5 formatacaoDestaque">Nome<span class="asteriscoObrigatorio"> *</span></label>
                    <p class="form-text">Digite o nome que vai aparecer dentro do ambiente do site (ex.: ranking).</p>
                    <input type="text" class="form-control" id="inputNomeCompleto" placeholder="Digite o seu nome completo...">
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label h5 formatacaoDestaque">E-mail<span class="asteriscoObrigatorio"> *</span></label>
                    <p class="form-text">Informe o e-mail que você irá utilizar para acessar o site.</p>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Digite o seu e-mail...">
                </div>
                <div class="mb-3">
                    <label for="inputImagem" class="form-label h5 formatacaoDestaque">Foto de perfil</label>
                    <p class="form-text">Envie uma imagem de perfil. <strong>Observação: </strong>todos os usuários poderam ver sua foto.</p>
                    <input class="form-control" type="file" id="inputImagem">   
                </div>
                <div class="mb-3">
                    <label for="inputSenha" class="form-label h5 formatacaoDestaque">Senha<span class="asteriscoObrigatorio"> *</span></label>
                    <p class="form-text">Crie uma senha para realizar o acesso da conta. <strong>Aviso: </strong>crie uma senha que só você saiba!</p>
                    <input type="text" class="form-control" id="inputSenha" placeholder="Digite sua senha...">
                </div>
                <div class="mb-3">
                    <label for="inputConfirmarSenha" class="form-label h5 formatacaoDestaque">Confirmar senha<span class="asteriscoObrigatorio"> *</span></label>
                    <p class="form-text">Digite novamente a sua senha abaixo.</p>
                    <input type="text" class="form-control" id="inputConfirmarSenha" placeholder="Confirme sua senha...">
                </div>
                <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkboxTermos" required>
                    <label class="form-check-label" for="checkboxTermos">Li e concordo com os <a href="#" target="_blank">Termos de Uso</a><span class="asteriscoObrigatorio"> *</span></label>
                </div>
                <div class="mb-3 text-center">
                    <p><strong>Já possui uma conta?</strong> Clique <a href="">aqui</a> para realizar o acesso ao sistema.</p>
                    <input type="submit" class="btn btn-primary formatacaoDestaque" value="CRIAR CONTA"></input> 
                </div> 
            </form>

        </main>

    </body>

</html>