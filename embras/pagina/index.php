<?php
include("db/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários</title>
    <link rel="stylesheet" href="estilo-padrao.css">
    <script src="node_modules/primeng/primeng.min.js"></script>
    <script src="node_modules/primeicons/primeicons.js"></script>
    <script src="node_modules/primeflex/primeflex.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@primeicons/primeicons/css/primeicons.css"> <!-- CDN do PrimeIcons -->
</script>
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Logo da Empresa" class="logo">
        <h1>Listagem de usuários</h1>
        <nav>
  <a href="cad-usuario.php" onclick="openDialog()">Novo usuário</a>
</nav>

    </header>
    <main>
        <?php
        $menuop = isset($_GET["menuop"]) ? $_GET["menuop"] : "index";
        switch ($menuop) {
            case "inserir-usuario":
                include("inserir-usuario.php");
                break;
            case "excluir-usuario":
                include("excluir-usuario.php");
                break;
        }
        ?>
    </main>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM usuarios";
            $rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta: " . mysqli_error($conexao));
            while ($dados = mysqli_fetch_assoc($rs)) {
            ?>
            <tr>
                <!-- Para garantir a correta manipulação de strings e URLs foi usado htmlspecialchars e urlencode -->
                <td><?= htmlspecialchars($dados["nome"]) ?></td>
                <td><?= htmlspecialchars($dados["email"]) ?></td>
                <td>
                <a href="index.php?menuop=excluir-usuario&nome=<?= urlencode($dados["nome"]) ?>" onclick="return confirm('Tem certeza que deseja excluir este usuário?')">
                Excluir
                </a>

                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <!-- Toast Container -->
    <div id="toast"></div>
    <!-- PrimeNG Toast and Button scripts -->
    <script>
        function showToast() {
            PrimeToast.add({severity:'success', summary: 'Sucesso', detail: 'O usuário foi excluído!', life: 3000});
        }

        document.addEventListener('DOMContentLoaded', function() {
            PrimeToast = new Toast({target: document.getElementById('toast')});
        });
    </script>
</body>
</html>
