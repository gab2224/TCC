<?php 

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die("Você Não pode acessar esta página, pois não está logado.<p><a href=\"login.php\">Entrar<a></p> ou <p><a href=\"index.php\">Cadastra-se<a></p>");
}

?>