
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Sementes</title>
</head>
<body>
    <h1>Cadastro de Sementes</h1>
    <?php
include('config.php'); // Inclui o arquivo de configuração de banco de dados

// Resto do código da página
// ...

// Quando terminar de usar a conexão, feche-a no final da página
$conn->close();
?>

    
    <form method="post" action="processar_sementes.html" enctype="multipart/form-data">
        <label for="nome">Nome da Semente:</label>
        <input type="text" name="nome" required><br>

        <label for="tipo">Tipo de Semente:</label>
        <input type="text" name="tipo" required><br>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" required><br>

        <label for="embalagem">Embalagem (Kg):</label>
        <input type="text" name="embalagem" required><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" required></textarea><br>

        <label for="imagem">Imagem da Semente:</label>
        <input type="file" name="imagem" accept="image/*"><br>

        <input type="submit" value="Cadastrar Sementes">
    </form>
</body>
</html>
$conn->close();
?>