<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Adubos</title>
</head>
<body>
    <h1>Cadastro de Adubos</h1>
    
    <form method="post" action="processar_Adubos.html" enctype="multipart/form-data">
        <label for="nome">Nome do Adubo:</label>
        <input type="text" name="nome" required><br>

        <label for="tipo">Tipo de Adubo:</label>
        <input type="text" name="tipo" required><br>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" required><br>

        <label for="embalagem">Embalagem (Kg/Litros):</label>
        <input type="text" name="embalagem" required><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" required></textarea><br>

        <label for="imagem">Imagem do Adubo:</label>
        <input type="file" name="imagem" accept="image/*"><br>

        <input type="submit" value="Cadastrar Adubo">
    </form>
</body>
</html>