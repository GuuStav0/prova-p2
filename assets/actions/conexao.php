<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "blackfriday";

$conexao = mysqli_connect($host, $user, $password, $database);

if($conexao)
{
    //echo "database found";
}
?>