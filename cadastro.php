<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar - Loja de Café Gourmet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastrar</h2>
        <form action="processar_cadastro.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <input type="submit" value="Criar Conta">
        </form>
    </div>
</body>
</html>
