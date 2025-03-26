<?php
$conexao = new mysqli("localhost", "root", "", "crud");

if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}
?>

