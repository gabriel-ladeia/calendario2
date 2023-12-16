<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Agendamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #0066cc;
        }

        div {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<h1>Visualizar Agendamento</h1>

<div>
    <?php
    // Recuperar os parâmetros da URL
    $nome = $_GET["nome"];
    $contato = $_GET["contato"];
    $data = $_GET["data"];
    $profissional = $_GET["profissional"];
    $procedimento = $_GET["procedimento"];
    $horario = $_GET["horario"];
    $valor = $_GET["valor"];

    // Exibir os dados do agendamento
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Contato:</strong> $contato</p>";
    echo "<p><strong>Data:</strong> $data</p>";
    echo "<p><strong>Profissional:</strong> $profissional</p>";
    echo "<p><strong>Procedimento:</strong> $procedimento</p>";
    echo "<p><strong>Horário:</strong> $horario</p>";
    echo "<p><strong>Valor:</strong> R$ $valor</p>";
    ?>
</div>

</body>
</html>
