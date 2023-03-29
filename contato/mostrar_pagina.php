<?php
require_once 'conexao.php';
require_once 'save(Imagem).php';

$sql = "SELECT url1, url2, url3, imagem FROM imagens";
$stmt = $conn->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo "<img src='uploads/".$row['imagem']."' alt='".$row['url1']."' />";
  echo "<img src='uploads/".$row['imagem']."' alt='".$row['url2']."' />";
  echo "<img src='uploads/".$row['imagem']."' alt='".$row['url3']."' />";
}
?>
