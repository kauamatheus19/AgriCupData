<!DOCTYPE html>
<html>
<head>
<title>Cadastro de Sementes</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cadastro de Sementes</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conexao = new mysqli("localhost", "usuario", "senha", "nome_do_banco");

    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $marca = $_POST["marca"];
    $embalagem = $_POST["embalagem"];
    $descricao = $_POST["descricao"];

    $caminho_imagem = "caminho/do/seu/diretorio/" . basename($_FILES["imagem"]["name"]);
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho_imagem);

    $sql = "INSERT INTO sementes (nome, tipo, marca, embalagem, descricao, imagem) VALUES ('$nome', '$tipo', '$marca', '$embalagem', '$descricao', '$caminho_imagem')";

    if ($conexao->query($sql) === TRUE) {
        echo "Semente cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar semente: " . $conexao->error;
    }

    $conexao->close();
}
?>

    <form method="post" action="processar_sementes.php" enctype="multipart/form-data">
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