<?php
/*variaveis de conexão com mysql*/
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "crud_produtos";

$conexao = mysqli_connect (%$servidor, $usuario, $senha, $banco);

if(!$conexao) {
    die("erro de conexão: ". mysqli_connect_error())
}
?>