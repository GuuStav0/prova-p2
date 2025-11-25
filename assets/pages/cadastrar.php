<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Jogo</title>
    <style>
        .container{
            border: 1px solid rgba(0,0,0,0.6);
            border-radius: 5px;
            padding:15px;
        }
        .container form{
            display: flex;
            flex-direction: column;
        }
        .container form label{
            display: flex;
            flex-direction: column;
            margin-bottom: 8px;
        }
        .container form label input{
            height: 30px;
        }
        .container form button{
            height: 40px;
            border: none;
            background-color: #000;
            color: #ffffff;
            margin-top: 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        .container a{
            background-color: blue;
            color: #ffffff;
            margin: 10px 0px;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <main>
        <div class="container">
            <h1>Cadastrar Jogo</h1>
            <hr>
            <form action="./../actions/processamento.php" method="post">
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
                    <button type="submit">Enviar</button>
                </label>
            </form>
            <br>
            <a href="./../../index.php">Voltar</a>
        </div>
    </main>
</body>
</html>