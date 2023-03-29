<?php 

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

    <title>Painel </title>
  </head>
  <body>
    <h1>Bem vindo ao Painel <?php echo $_SESSION['nome'];?></h1>

<p> <a href ="logout.php"> Sair </a></p>

<form  enctype="multipart/form-data" method="post" action="save(Imagem).php">
		<label for="url1">Insira Aqui seu Insta:</label>
		<input type="text" id="url1" name="url1"><br><br>

		<label for="url2"> Insira aqui seu Sportfy </label>
		<input type="text" id="url2" name="url2"><br><br>

		<label for="url3">Insira Aqui outra Rede Social:</label>
		<input type="text" id="url3" name="url3"></input><br><br>

  	<label for="url4">Insira Aqui email para contato:</label>
		<input type="email" id="url4" name="url4"></input><br><br>

    	<label for="url4">Insira Aqui seu email:</label>
		<input type="email" id="email" name="email"></input><br><br>
  

<label for ="imagem">Selecione a foto</label>  
<input name="arquivo" type="file"> </br>
<button name="enviar" type="submit" value="enviar" > Enviar Arquivo </button>
</form>

<?php 

if(isset($_SESSION['msg'])){
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
}

?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>