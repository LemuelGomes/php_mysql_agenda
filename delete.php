<?php

    // Abrindo uma Sessão
    session_start();

    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $base = 'bd_agenda';

    $conexao = new mysqli($servidor, $usuario, $senha, $base);

    $sql = 'DELETE FROM tbl_contatos WHERE id LIKE "'. $_GET['id_delete'] . '";';
    
    if ($conexao->query($sql)) 
    {
        $_SESSION['mensagem'] = 'Registro removido com sucesso!';
    } 
    else 
    {       
        $_SESSION['mensagem'] = 'Erro ao remover registro!';
    }

    $conexao->close();
    header('Location: index.php');
?>