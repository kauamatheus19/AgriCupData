<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Inseticidas</title>
</head>
<body>
    <h1>Cadastro de Inseticidas</h1>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conexao = new mysqli("localhost", "usuario", "senha", "nome_do_banco");

    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $marca = $_POST["marca"];
    $quantidade = $_POST["quantidade"];
    $descricao = $_POST["descricao"];

    $caminho_imagem = "caminho/do/seu/diretorio/" . basename($_FILES["imagem"]["name"]);
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho_imagem);

    $sql = "INSERT INTO inseticidas (nome, tipo, marca, quantidade, descricao, imagem) VALUES ('$nome', '$tipo', '$marca', '$quantidade', '$descricao', '$caminho_imagem')";

    if ($conexao->query($sql) === TRUE) {
        echo "Inseticida cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar inseticida: " . $conexao->error;
    }

    $conexao->close();
}
?>
    
    <form method="post" action="processar_Inseticidas.php" enctype="multipart/form-data">
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