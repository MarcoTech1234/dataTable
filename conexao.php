<?php

$hostname = 'localhost'; //Onde está o nosso banco de dados
$dbname = 'celke'; //Qual banco de dados que iremos trabalhar
$username = 'root'; //Usuário de acesso ao banco de dados
$password = ''; //Senha de acesso ao banco de dados

try {
    $conn = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Conexão com o banco '.$dbname.', foi realizada com sucesso';
} catch (PDOException $e) {
    //echo 'Erro: '.$e->getMessage();
}