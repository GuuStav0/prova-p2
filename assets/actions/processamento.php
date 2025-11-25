<?php
    require_once "./funcoesBD.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = trim(addslashes($_POST['nome']));
        $preco = trim(addslashes($_POST['preco']));
        $promocao = trim(addslashes($_POST['promocional']));

        InserirJogo($nome, $preco, $promocao);

        echo "<script>
        window.location.href = './../pages/cadastrar.php'</script>";
    }
?>