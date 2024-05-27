<header>
    <h3></h3>
</header>
<?php
    //mysqli_real_escape_string para evitar invasão por sqlinjection
    $nome = mysqli_real_escape_string($conexao, $_POST["nome"]);
    $email = mysqli_real_escape_string($conexao, $_POST["email"]); 
    $sql = "INSERT INTO usuarios (
        nome,
        email)
        VALUES (
            '{$nome}',
            '{$email}'
            )
        ";
    mysqli_query($conexao, $sql) or die ("Erro ao executar a consulta." . mysqli_error($conexao));
    echo "<script>alert('O usuário foi cadastrado!');</script>";

?>