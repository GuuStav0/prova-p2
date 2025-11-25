<?php
    require_once "./assets/actions/funcoesBD.php";
    $conexao = conexaoBD();

    $sqlProcuraJogos = "SELECT * FROM jogos;";
    $stmtProcuraJogos = $conexao->query($sqlProcuraJogos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Friday</title>
    <style>
        .cad-btn{
            background-color: blue;
            color: #ffffff;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <main>
        <section>
            <h3>Cadastrar um Jogo</h3>
            <a class="cad-btn" href="./assets/pages/cadastrar.php">Clique aqui</a>
        </section>
        <section>
            <h1>Lista de Jogos</h1>
            <div>
                <table style="border: 1px solid #000;">
                    <thead style="border: 1px solid #000;">
                        <th style="border: 1px solid #000;">ID</th>
                        <th style="border: 1px solid #000;">Nome</th>
                        <th style="border: 1px solid #000;">Preço Original</th>
                        <th style="border: 1px solid #000;">Preço Promocional</th>
                    </thead>
                    <?php 
                        while($row = $stmtProcuraJogos->fetch_assoc()){
                    ?>
                    <tbody style="border: 1px solid #000;">

                        <td style="border: 1px solid #000;"><?php echo $row["id"]; ?></td>
                        <td style="border: 1px solid #000;"><?php echo $row["nome"]; ?></td>
                        <td style="border: 1px solid #000;">R$<?php echo $row["PrecoOriginal"]; ?></td>
                        <td style="border: 1px solid #000;">R$<?php echo $row["PrecoPromocional"]; ?></td>
                    </tbody>
                    <?php
                        }
                    ?>
                </table>

            </div>
        </section>
    </main>
</body>
</html>