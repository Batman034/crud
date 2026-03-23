<?php

include("conexao.php"); //incluindo  o conexão
$sql = "SELECT *FROM produtos ORDER BY id Desc";
$resultado = mysqli_query ($conexao, $sql);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>SYS BRAIA</title>
    </head>

    <body>
        <h1>cadastro</h1>
        <form action= "salvar,php" method="post">
            <label>nome:</label>
            <input type="text"name= "nome" required>
            <label>preço:</label>
            <input type ="number" name="preco" required>
        </form>
    </body>

</html>