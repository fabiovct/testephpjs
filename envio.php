<?php
include 'db.php';

$nome = $_POST['nome'];
$empresa = $_POST['empresa'];

$query = "INSERT INTO pessoas(nome, empresa) VALUES('$nome', '$empresa')";

mysqli_query($conexao, $query);
header('location:empresas.php');