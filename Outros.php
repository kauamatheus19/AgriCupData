<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produtos Diversos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cadastro de Produtos Diversos</h1>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $conexao = new mysqli("localhost", "usuario", "senha", "nome_do_banco");

    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $marca = $_POST["marca"];
    $peso = $_POST["peso"];
    $descricao = $_POST["descricao"];

    $caminho_imagem = "caminho/do/seu/diretorio/" . basename($_FILES["imagem"]["name"]);
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho_imagem);

    $sql = "INSERT INTO produtos_diversos (nome, tipo, marca, peso, descricao, imagem) VALUES ('$nome', '$tipo', '$marca', '$peso', '$descricao', '$caminho_imagem')";

    if ($conexao->query($sql) === TRUE) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar produto: " . $conexao->error;
    }

    $conexao->close();
}
?>
    
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
