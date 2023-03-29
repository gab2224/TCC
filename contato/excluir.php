<?php

include('../conexao/conexao.php');

if(!empty($_REQUEST['id'])){
    try{
        $id = $_REQUEST['id'];
        $sql = "DELETE FROM usuarios WHERE id = $id";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$id]);
        $dados = array(
            'type' => 'success',
            'mensagem' => 'Registro excluído com sucesso!'
        );
    } catch(PDOException $e) {
        $dados = array(
            'type' => 'error',
            'mensagem' => 'Erro ao excluir o registro: '.$e->getMessage()
        );
    }
} else {
    $dados = array(
        'type' => 'error',
        'mensagem' => 'Erro ao excluir o registro: o ID não foi informado.'
    );
}

echo "$dados";

echo "<a href='adm.php'> Voltar a pagina ADM </a>";

