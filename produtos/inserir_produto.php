<?php
include('conexao.php'); // Conectar ao banco de dados
if (isset($_POST["inserir"])) {  // Inserir produto
  $nome = $_POST["nome"];
  $tipo = $_POST["tipo"];
  $descricao = $_POST["descricao"];
  $valor_unitario = $_POST["valor_unitario"];
  $quantidade_estoque = $_POST["quantidade_estoque"];
  $cor = $_POST["cor"];
  $disponivel = $_POST["disponivel"];
  $link_imagem = $_POST["link_imagem"];
    $foto = $_FILES['foto']; // Upload da imagem, crie as pastas imagens/produtos/  antes
    $nome_foto = $foto['name'];
    $tmp_name = $foto['tmp_name'];
    $destination = 'img_produtos/' . $nome_foto;
if (move_uploaded_file($tmp_name, $destination)) { // Mover o arquivo para a pasta imagens/produtos
    echo "Arquivo enviado com sucesso!";
  } else {
    echo "Erro ao enviar arquivo!";
  }
  // Inserir dados no banco de dados
  $sql = "INSERT INTO produtos (nome, tipo, 
  descricao, valor_unitario, quantidade_estoque,
   cor, disponivel, link_imagem, foto) 
  VALUES ('$nome', '$tipo', '$descricao',
   '$valor_unitario', '$quantidade_estoque', 
   '$cor', '$disponivel', '$link_imagem', 
   '$nome_foto')";
  if ($conn->query($sql) === TRUE) {
    echo "Produto inserido com sucesso!";
    echo "redirecionamento...Login"; 
    echo "<!-- Redireciona para uma URL
     específica em html -->
<meta http-equiv='refresh' content='3;
 url=inserir_produto.html'>";
  } else {
    echo "Erro ao inserir produto: " . $conn->error;
    echo "xiii deu erro, volte para a pagina de
     inserção"; 
    echo "<!-- Redireciona para uma URL específica
     em html -->
<meta http-equiv='refresh' content='10; url=inserir_produto.html'>";
  }
}
?>