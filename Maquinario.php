<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Maquinário Agrícola</title>
</head>
<body>
    <h1>Cadastro de Maquinário Agrícola</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conexao = new mysqli("localhost", "usuario", "senha", "nome_do_banco");

    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $ano = $_POST["ano"];
    $potencia = $_POST["potencia"];
    $descricao = $_POST["descricao"];

    $caminho_imagem = "caminho/do/seu/diretorio/" . basename($_FILES["imagem"]["name"]);
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho_imagem);

    $sql = "INSERT INTO maquinario (nome, tipo, marca, modelo, ano, potencia, descricao, imagem) VALUES ('$nome', '$tipo', '$marca', '$modelo', '$ano', '$potencia', '$descricao', '$caminho_imagem')";

    if ($conexao->query($sql) === TRUE) {
        echo "Maquinário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar maquinário: " . $conexao->error;
    }

    $conexao->close();
}
?>
    
    <form method="post" action="processar_maquinario.php" enctype="multipart/form-data">
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