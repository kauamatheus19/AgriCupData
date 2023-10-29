
<html>
<head>
    <title>Cadastro de Maquinário Agrícola</title>
</head>
<body>
    <h1>Cadastro de Maquinário Agrícola</h1>
    
    <form method="post" action="processar_maquinario.html" enctype="multipart/form-data">
        <label for="nome">Nome da Máquina:</label>
        <input type="text" name="nome" required><br>

        <label for="tipo">Tipo de Máquina:</label>
        <input type="text" name="tipo" required><br>

        <label for="marca">Marca:</label>
        <input type="text" name= "marca" required><br>

        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" required><br>

        <label for="ano">Ano de Fabricação:</label>
        <input type="text" name="ano" required><br>

        <label for="potencia">Potência (CV):</label>
        <input type="text" name="potencia" required><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" required></textarea><br>

        <label for="imagem">Imagem da Máquina:</label>
        <input type="file" name="imagem" accept="image/*"><br>

        <input type="submit" value="Cadastrar Maquinário">
    </form>
</body>
</html>