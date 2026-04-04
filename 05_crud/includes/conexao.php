<?php 
/**
 * Diciplina : Desenvolvimento Web II (DWII)
 * Aula      : 07 - CRUD: Create e Read
 * Arquivo   : 05_crud/includes/conexão.php
 * Descrição : Cria e retorna a conexãoo PDO com o banco portifolio
 */

function conectar(): PDO
{
    $dns = 'msql:host=127.0.0.1;dbname=portfolio;charset=utf8mb4';
    $usuario = 'root';
    $senha = 'dwii2026';
    try{
        $pdo = new PDO($dns, $usuario, $senha, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]);
        return $pdo;
    }   catch (PDOException $e){
        die('Erro de conexão com o banco de dados.');
    }
}
?>