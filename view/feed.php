<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/styleFeed.css">
    <title>Uni4Life - Feed</title>
</head>
<body>
    <header>
        <div class="banner">
            <div><img  id="logobranco" src=".\Complementos\\UNI4LIFE_logo_branco.png" alt=""></div>
        </div>
    </header>
    <div class="container">
        <nav class="sidebar">
            <h1 id="logoFeed">Olá, Pessoa da Silva</h1>
            <ul><b>
                <li> <img class="iconsSideBar" src=".\Complementos\home.png" alt="">PÁGINA INICIAL</li>
                <li> <img class="iconsSideBar" src=".\Complementos\\procurar.png" alt="">EXPLORAR</li>
                <li> <img class="iconsSideBar" src=".\Complementos\\book-alt.png" alt="">BIBLIOTECA</li>
                <li> <img class="iconsSideBar" src=".\Complementos\\dolar.png" alt="">SALDO</li>
                <li> <img class="iconsSideBar" src=".\Complementos\\quadrado-mais.png" alt="">CRIAR</li>
                <li> <img class="iconsSideBar" src=".\Complementos\\perfil.png" alt="">PERFIL</li>
                <li class="logout"> <img class="iconsSideBar" src=".\Complementos\\sair.png" alt="">LOGOUT</li>
            </b></ul>
        </nav>
        <main class="feed">
            <div class="new-post">
                <img src=".\Complementos\\perfilfoto.jpeg" alt="Perfil" class="profile-pic" />
                <textarea placeholder="No que você está pensando?"></textarea>
                <button id="Enviar">Enviar</button>
            </div>
            
            <div class="posts">
                <div class="post">
                    <p>Este é um post de exemplo.</p>
                    <div class="post-options">
                        <span><img class="icons" src=".\Complementos\\rede-social.png" alt=""></span>
                        <span><img class="icons" src=".\Complementos\\comente.png" alt=""></span>
                        <span><img class="icons" src=".\Complementos\\share-square.png" alt=""></span>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="./../public/Feed.js"></script>
</body>
</html>
