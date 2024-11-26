<?php require_once 'navbar.php' ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./perfil.css" rel="stylesheet">
    <title>Perfil</title>
</head>

<div id="body_perfil">
    <div class="Container">


        <div class="ContainerPerfil">


            <div class="Perfil">
                <img id="Foto" src="./Complementos/perfil.png" alt="">
                <p id="Nome"><b>@DiegoDelRey</b></p>
                <p id="Bio">Estudante de Análise e Desenvolvimento de Sistemas</p>
                <div class="Seguimores">
                    <p class="Seguimores2"><b>143 Seguindo</b></p>
                    <p class="Seguimores2"><b>365 Seguidores</b></p>
                </div>
            </div>

            
            <div class="MenuAba">
                <button class="AbaSelecionada" onclick="selecionarAba('posts')">Posts</button>
                <button onclick="selecionarAba('salvos')">Salvos</button>
                <button onclick="selecionarAba('curtidas')">Curtidas</button>
            </div>

            
    
          
           <div id="posts" class="ConteudoAba">
                <p>Conteúdo de Posts</p>
            </div>
            <div id="salvos" class="ConteudoAba" style="display: none;">
                <p>Conteúdo de Salvos</p>
            </div>
            <div id="curtidas" class="ConteudoAba" style="display: none;">
                <p>Conteúdo de Curtidas</p>
            </div>
         


            
        </div>

       
     
    </div>

    
    <script>
        function selecionarAba(aba) {
            
            const botoes = document.querySelectorAll('.MenuAba button');
            botoes.forEach((botao) => botao.classList.remove('AbaSelecionada'));

           
            const botaoSelecionado = document.querySelector(`.MenuAba button[onclick="selecionarAba('${aba}')"]`);
            botaoSelecionado.classList.add('AbaSelecionada');

           
            const conteudos = document.querySelectorAll('.ConteudoAba');
            conteudos.forEach((conteudo) => conteudo.style.display = 'none');

            
            document.getElementById(aba).style.display = 'block';
        }

        function adicionarCapa(){
            const capaFundo = document.querySelector('.ContainerPerfil');
            capaFundo.style = "background-image:url(./Complementos/capa.jpg)";
        }
        adicionarCapa();
    </script>
</div>

</html>
