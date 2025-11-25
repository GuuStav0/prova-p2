<?php
    require_once "./../actions/conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Jogo</title>
</head>
<body>
    <main>
        <h1>Cadastrar Jogo</h1>
        <form action="./assets/actions/processamento.php" method="post">
            <label for="nome">
                <span>Nome:</span>
                <input type="text" id="nome" name="nome" placeholder="Insira o Nome do Jogo">
            </label>
            <label for="nome">
                <span>Preço:</span>
                <input type="text" id="preco" name="preco" placeholder="Insira o Preço do Jogo">
            </label>
            <label for="nome">
                <span>Preço Promocional:</span>
                <input type="text" id="promocional" name="promocional" placeholder="Insira o Valor Promocional do Jogo">
            </label>
        </form>
    </main>
</body>
</html>