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
            <a href="/">
                <div><img  id="logobranco" src=".\Complementos\\UNI4LIFE_logo_branco.png" alt=""></div>
            </a>
            
        </div>
    </header>
    <div class="container">
        <nav class="sidebar">
            <h1 id="logoFeed">Olá, <?=$_SESSION["Nome"]?></h1>
            <ul><b>
                <li><img class="iconsSideBar" src=".\Complementos\home.png" alt="">PÁGINA INICIAL</li>
                <li> <img class="iconsSideBar" src=".\Complementos\\procurar.png" alt="">EXPLORAR</li>
                <li> <img class="iconsSideBar" src=".\Complementos\\book-alt.png" alt="">BIBLIOTECA</li>
                <li> <img class="iconsSideBar" src=".\Complementos\\dolar.png" alt="">SALDO</li>
                <li> <img class="iconsSideBar" src=".\Complementos\\quadrado-mais.png" alt="">CRIAR</li>
                <li> <img class="iconsSideBar" src=".\Complementos\\perfil.png" alt="">PERFIL</li>
                <a href="/logout" class="link">
                    <div class="logout">
                        <li> <img class="iconsSideBar" src=".\Complementos\\sair.png" alt="">LOGOUT</li>
                    </div>
                </a>
                
            </b></ul>
        </nav>
    </div>
</body>
</html>