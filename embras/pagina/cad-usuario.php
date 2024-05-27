<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
    <link rel="stylesheet" href="estilo-cadastro.css?v=1.0">
</head>
<body>
    <div>
        <form action="index.php?menuop=inserir-usuario" method="post">
            <header class="form-group">
                <h3>Cadastro de usuário</h3>
                <button class="close-button" onclick="window.location.href='index.php'">&times;</button>
            </header>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-buttons">
                <button type="button" onclick="window.location.href='index.php'">Cancelar</button>
                <input type="submit" value="Confirmar" name="botaoSalvar">
            </div>            
        </form>
    </div>
</body>
</html>
