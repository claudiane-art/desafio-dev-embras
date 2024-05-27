<header>
    <h3>Excluir usuário</h3>
</header>
<?php
include("db/conexao.php");

if (isset($_GET["nome"])) {
    $nome = mysqli_real_escape_string($conexao, $_GET["nome"]); //mysqli_real_escape_string para evitar invasão por sqlinjection
    $sql = "DELETE FROM usuarios WHERE nome='$nome'";

    if (mysqli_query($conexao, $sql)) {
        echo "<script>alert('O usuário foi excluído!');</script>";
        echo "<script>window.location.href='index.php';</script>";
    } else {
        echo "Erro ao excluir usuário: " . mysqli_error($conexao);
    }
} else {
    echo "Nome do usuário não fornecido.";
}
?>