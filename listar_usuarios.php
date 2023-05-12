<?php

// Incluir a conexao com o banco de dados
include_once './conexao.php';

//Receber os dados da requisição Ajax
$dados_requisição = $_REQUEST;
// Obter a quantidade de reguistro no banco de dados
$query_qnt_usuarios = "SELECT COUNT(id) AS qnt_usuarios FROM usuarios";
$result_qnt_usuarios = $conn->prepare($query_qnt_usuarios);
$result_qnt_usuarios->execute();
$row_qnt_usuarios = $result_qnt_usuarios->fetch(PDO::FETCH_ASSOC);
//var_dump($row_qnt_usuarios);

// Recuperar os Registro do banco de Dados
$query_usuarios = "SELECT id, nome, salario, idade FROM usuarios
                    ORDER BY id DESC
                    LIMIT :inicio , :quantidade"; // Usaremos ele para a paginação de abas 
$result_usuarios = $conn->prepare($query_usuarios);
$result_usuarios->bindParam(':inicio', $dados_requisição['start'], PDO::PARAM_INT);
$result_usuarios->bindParam(':quantidade', $dados_requisição['length'], PDO::PARAM_INT);
$result_usuarios->execute();

while ($row_usuarios = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
    //var_dump($row_usuarios);
    extract($row_usuarios); // Usarei o extract para criar uma variavel com o nome e o valor referente a chave de associação do array Ex: 'Nome' => "Marco"
    $registro = [];
    $registro[] = $id;
    $registro[] = $nome;
    $registro[] = $salario;
    $registro[] = $idade;
        $dados[] = $registro; // Armazenando os Registros da busca no formato data para passar para o json
}

// var_dump($dados); 

//Criar o Objeto de informações a serem retornadas para o Javascript
$resultado = [
    "draw" => intval($dados_requisição['draw']), //Parametro de valor Number da requisição feita pelo ajax(Para cada requisição e enviado um numero como parametro)
    "recordsTotal" => intval($row_qnt_usuarios['qnt_usuarios']), // Quantidade de Registro no Banco de Dados em Number
    "recordsFiltered" => intval($row_qnt_usuarios['qnt_usuarios']), // Quantidade de registros que a no banco quando houver uma pesquisa
    "data" => $dados // Array referente aos dados buscados e retornados no banco de dados na tabela usuarios
];
// Nesse var_dump irá dar erro devido a não houver o REQUEST feito pelo dataTables atraves do ajax
//var_dump($resultado);

// Devemos enviar os dados no formato de um Objeto {} para o Javascript
echo json_encode($resultado);