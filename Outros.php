<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produtos Diversos</title>
</head>
<body>
    <h1>Cadastro de Produtos Diversos</h1>
    
    <form method="post" action="processar_Outros.php" enctype="multipart/form-data">
        <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome" required><br>

        <label for="tipo">Tipo de Produto:</label>
        <input type="text" name="tipo" required><br>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" required><br>

        <label for="peso">Peso (Kg):</label>
        <input type="number" name="peso" step="0.01" required><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" required></textarea><br>

        <label for="imagem">Imagem do Produto:</label>
        <input type="file" name="imagem" accept="image/*"><br>

        <input type="submit" value="Cadastrar Produto">
    </form>
</body>
</html>
