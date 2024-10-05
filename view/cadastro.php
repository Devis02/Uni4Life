<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href=".\Style\\styleCadastro.css">
</head>
<body>
    <div id="Container">

        <div id="Cadastro">

            <div id="Branco"></div>

                <form id="formCad" method="post">
                    
                    <label for="Nome">Nome</label>
                    <input id="Nome" name="Nome" placeholder="">
                    
                    <label for="Email">Email</label>
                    <input id="Email" type="email" name="Email" placeholder="">
                    
                    <label for="password">Senha</label>
                    <input type="password" name="Senha" id="Senha" placeholder="">
                    <button id="Botao" type="submit">Criar Conta</button>
                    <br>

                </form>
                <a id="loginLink" href="/login">Já está cadastrado? clique aqui!</a>
            </div>



        </div>


    </div>
    
</body>
</html>