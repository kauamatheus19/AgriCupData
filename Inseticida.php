<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Inseticidas</title>
</head>
<body>
    <h1>Cadastro de Inseticidas</h1>
    
    <form method="post" action="processar_Inseticidas.html" enctype="multipart/form-data">
        <label for="nome">Nome do Inseticida:</label>
        <input type="text" name="nome" required><br>

        <label for="tipo">Tipo de Inseticida:</label>
        <input type="text" name="tipo" required><br>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" required><br>

        <label for="quantidade">Quantidade (Litros/Kg):</label>
        <input type="text" name="quantidade" required><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" required></textarea><br>

        <label for="imagem">Imagem do Inseticida:</label>
        <input type="file" name="imagem" accept="image/*"><br>

        <input type="submit" value="Cadastrar Inseticida">
    </form>
</body>