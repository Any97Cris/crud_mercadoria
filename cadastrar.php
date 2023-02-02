<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro de Mercadoria</h1>

    <form method="POST" action="cadastro_action.php">
        <label>Descrição</label>
        <br>
        <input type="text" name="descricao" placeholder="Descreva o produto">
        <br>
        
        <label>Valor</label>
        <br>
        <input type="text" name="preco" placeholder="R$ 00,00">
        <br>
        <br>
        
        <label>Categoria</label>        
        <select name="opcao">
        <?php 
            require_once "database.php";
            require_once "DAO/CategoriaDAO.php";

            $categoria = new CategoriaDAO($pdo);
            foreach ($categoria->findAll() as $key => $value) {
                echo $value->getDescricao();
            ?>
                <option value="<?= $value->getId()?>"><?= $value->getDescricao() ?></option>
           <?php } ?>
            
            
        </select>

        <br>
        <br>
        <br>

        <input type="submit" value="Enviar">
        <br>
        <br>
        <a href="index.php">Página Inicial</a>
       
    
    </form>
</body>
</html>