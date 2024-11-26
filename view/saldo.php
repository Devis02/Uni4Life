<?php require_once 'navbar.php' ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./compra.css" rel="stylesheet">
    <title>UniCoins</title>
</head>

<div id="body_2">

    <div id="containercompra">
        
        <div id="extrato">
            <h3>Extrato</h3>
            <div class="transacao">
                <div class="descricao">Material de Lógica Matemática</div>
                <div class="data">26/09/2024</div>
                <div class="valor negativo">R$15,00</div>
            </div>
            <div class="transacao">
                <div class="descricao">Exercícios Banco de Dados</div>
                <div class="data">11/08/2024</div>
                <div class="valor negativo">R$10,00</div>
            </div>
            <div class="transacao">
                <div class="descricao">Pix Recebido</div>
                <div class="data">10/08/2024</div>
                <div class="valor positivo">R$50,00</div>
            </div>
        </div>
    
        
        <div id="saldo-pix-container">
            <div id="saldo-container">
                <h2>Saldo</h2>
                <div id="valor-saldo">R$25,00</div>
            </div>
            <div id="formas-pagamento">
                <h3>Formas de Pagamento</h3>
                <div class="pagamento-box">
                    <label for="pix">Pix</label>
                    <input type="number" id="pix" placeholder="Adicionar valor desejado">
                    <div class="botoes">
                        <button class="btn cancelar">Cancelar</button>
                        <button class="btn gerar">Gerar QR Code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
</body>
</html>