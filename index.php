<?php

require_once "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Lista Produtos</h1>
    <a href="cadastrar.php">Cadastrar</a>
    <br>
    <br>
    <table style="text-align:center;">
        <tr>
            <th width="30%">Descrição</th>
            <th width="20%">Categoria</th>
            <th width="20%">Preço</th>
            <th width="20%">Ações</th>
        </tr>
        <tr>
            <td>Código Da Vinci</td>
            <td>Livro</td>
            <td>R$ 30,00</td>
            <td>
                <a href="editar.php">Editar</a>
                <a href="delete.php">Deletar</a>
            </td>
        </tr>
    </table>
</body>
</html>