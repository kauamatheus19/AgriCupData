<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <title>Escolha a Categoria de Produto</title>
    <script>
        function redirecionarParaCategoria(categoria) {
            switch (categoria) {
                case "Maquinario":
                    window.location = "Maquinario.php?categoria=Maquinario";
                    break;
                case "Semente":
                    window.location = "Semente.php?categoria=Semente";
                    break;
                case "Adubo":
                    window.location = "Adubo.php?categoria=Adubo";
                    break;
                case "Inseticida":
                    window.location = "Inseticida.php?categoria=Inseticida";
                    break;
                    case "Outros":
                    window.location = "Outros.php?categoria=Outros";
                    break;
                default:
                    alert("Categoria inválida");
            }
        }
    </script>
</head>
<body>
    <div class="first">
    <h1>Escolha a Categoria de Produto</h1>
    <p>Selecione a categoria do produto que deseja registrar:</p>
    <button onclick="redirecionarParaCategoria('Maquinario')">Maquinario</button>
    <button onclick="redirecionarParaCategoria('Semente')">Semente</button>
    <button onclick="redirecionarParaCategoria('Adubo')">Adubo</button>
    <button onclick="redirecionarParaCategoria('Inseticida')">Inseticida</button>
    <button onclick="redirecionarParaCategoria('Outros')">Outros</button>
</div>
</body>
</html>