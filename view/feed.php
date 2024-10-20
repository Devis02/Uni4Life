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
            <h1 id="logoFeed">Olá, <?=$_SESSION["Nome"]?></h1>
            <ul><b>
                <li> <img class="iconsSideBar" src=".\Complementos\home.png" alt="">PÁGINA INICIAL</li>
                <li> <img class="iconsSideBar" src=".\Complementos\\procurar.png" alt="">EXPLORAR</li>
                <li> <img class="iconsSideBar" src=".\Complementos\\book-alt.png" alt="">BIBLIOTECA</li>
                <li> <img class="iconsSideBar" src=".\Complementos\\dolar.png" alt="">SALDO</li>
                <li> <img class="iconsSideBar" src=".\Complementos\\quadrado-mais.png" alt="">CRIAR</li>
                <li> <img class="iconsSideBar" src=".\Complementos\\perfil.png" alt="">PERFIL</li>
                <a href="/logout" id="link-logout">
                    <div class="logout">
                        <li> <img class="iconsSideBar" src=".\Complementos\\sair.png" alt="">LOGOUT</li>
                    </div>
                </a>
                
            </b></ul>
        </nav>
        <main class="feed">
            <div class="new-post">
                <img src=".\Complementos\\perfilfoto.jpeg" alt="Perfil" class="profile-pic" />
                <textarea placeholder="No que você está pensando?"></textarea>
                <button id="Enviar">Enviar</button>
            </div>
            
            <div class="posts">
            <?php foreach($posts as $post):?>
                <div class="post">
                    <div>
                        <h4><?php echo $post['name'] ?></h4>
                    </div>
                    <p>Este é um post de exemplo.</p>
                    <div class="post-options">
                        <span><img class="icons" src=".\Complementos\\rede-social.png" alt=""></span>
                        <span><img class="icons" src=".\Complementos\\comente.png" alt=""></span>
                        <span><img class="icons" src=".\Complementos\\share-square.png" alt=""></span>
                    </div>
                </div>
            <?php endforeach?>
            </div>
        </main>
    </div>
</body>
</html>
