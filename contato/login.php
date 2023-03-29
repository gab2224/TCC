<?php 

include('../conexao/conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){
  if(strlen($_POST['email']) == 0){
    echo "Preencha seu email";
  } else if(strlen($_POST['senha']) == 0){
    echo "Preencha sua senha";
  } else{

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
    $stmt->execute([$email, $senha]);

    $quantidade = $stmt->rowCount();

    if($quantidade == 1){
      
      $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

      if(!isset($_SESSION)){
        session_start();
      }

      $_SESSION['id'] = $usuario['id'];
      $_SESSION['nome'] = $usuario['nome'];

      header("Location: painel.php");

    } else {
      echo "Falha ao logar: email ou senha incorretos";
    }
   
  }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    

    <h1> Entrar </h1>
    <form action="" method="POST">

    <p>
    <label>Email</label>
    <input type="email" name="email">
    </p>
    <p>
    <label>Senha</label>
    <input type="password" name="senha">
    </p>

 <h6>Esqueçeu a Senha? <a href=""> CliqueAqui!!! </a></h6>
      
    <p>
    <button type="submit"> Enviar </button>
    </p>

    </form>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>