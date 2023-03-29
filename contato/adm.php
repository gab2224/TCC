<?php 

include_once ('../conexao/conexao.php');
include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Painel Adm</title>
  </head>
  <body>
    <h1>listar Usuarios </h1>

    <?php 
    
    $query_usuarios = "SELECT id, nome, email FROM usuarios";
    $result_usuarios = $conn->prepare($query_usuarios);
    $result_usuarios->execute();

    if(($result_usuarios) AND ($result_usuarios->rowCount() != 0)){
        while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
            // var_dump($row_usuario);
            // Extrair os dados do usuario
            extract($row_usuario);
            echo "</br> ID: $id </br>";
            echo "Nome: $nome </br>";
            echo "E-mail: $email </br>";
            echo "<a href='excluir.php?id=$id'>Excluir<a></br>";
            echo "<hr> </br>";

        }
    }else{
        echo "Usuario não encontrado";
    }
    

    ?>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
