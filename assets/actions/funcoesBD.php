<?php
    function conexaoBD(){
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "blackfriday";

        $conexao = new mysqli($host, $user, $password, $database);

        if($conexao)
        {
            echo "database found";
            return $conexao;
        }else{
            echo "database missing";
            return "";
        }
    }

    function InserirJogo($nome, $preco, $promocao){
        $conexao = conexaoBD();

        $sqlInsereJogo = "INSERT INTO `jogos`(`nome`, `PrecoOriginal`, `PrecoPromocional`) VALUES (?, ?, ?)";
        $stmt = $conexao->prepare($sqlInsereJogo);
        $stmt->bind_param('sdd', $nome, $preco, $promocao);
        $stmt->execute();
        $conexao->close();

        echo "<script>alert('Cadastro Feito');</script>";
    }
?>