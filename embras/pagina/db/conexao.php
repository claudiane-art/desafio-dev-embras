<?php
include("config.php");

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die("Erro ao executar a consulta!" . mysqli_error($conexao));