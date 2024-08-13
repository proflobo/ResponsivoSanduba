<?php
// chama o cabeçalho do html basico, tudo abaixo ficaria dentro do body main
include('abre.php');
// Conectar ao banco de dados
include('conexao.php');

// Verificar se o formulário foi submetido
if (isset($_POST["selecionar"])) {
  $id = $_POST["produto"];

  // Query para selecionar o produto escolhido
  $sql = "SELECT * FROM produtos WHERE id = '$id'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  // Exibir as informações do produto selecionado
  echo "<h2>Editar Produto</h2>";
  echo "<form action='' method='post'>";
  echo "  <input type='hidden' name='id' value='" . $row['id'] . "'>";
  echo "  <label for='nome'>Nome:</label>";
  echo "  <input type='text' id='nome' name='nome' value='" . $row['nome'] . "'>";
  echo "  <br><br>";
  echo "  <label for='tipo'>Tipo:</label>";
  echo "  <input type='text' id='tipo' name='tipo' value='" . $row['tipo'] . "'>";
  echo "  <br><br>";
  echo "  <label for='descricao'>Descrição:</label>";
  echo "  <textarea id='descricao' name='descricao'>" . $row['descricao'] . "</textarea>";
  echo "  <br><br>";
  echo "  <label for='valor_unitario'>Valor Unitário:</label>";
  echo "  <input type='number' id='valor_unitario' name='valor_unitario' value='" . $row['valor_unitario'] . "'>";
  echo "  <br><br>";
  echo "  <label for='quantidade_estoque'>Quantidade em Estoque:</label>";
  echo "  <input type='number' id='quantidade_estoque' name='quantidade_estoque' value='" . $row['quantidade_estoque'] . "'>";
  echo "  <br><br>";
  echo "  <label for='cor'>Cor:</label>";
  echo "  <input type='text' id='cor' name='cor' value='" . $row['cor'] . "'>";
  echo "  <br><br>";
  echo "  <label for='disponivel'>Disponível:</label>";
  echo "  <input type='checkbox' id='disponivel' name='disponivel' " . ($row['disponivel'] == 1 ? 'checked' : '') . ">";
  echo "  <br><br>";
  echo "  <label for='link_imagem'>Link para Imagem:</label>";
  echo "  <input type='text' id='link_imagem' name='link_imagem' value='" . $row['link_imagem'] . "'>";
  echo "  <br><br>";
  echo "  <label for='foto'>Imagem:</label>";
  echo "  <input type='file' id='foto' name='foto'>";
  echo "  <br><br>";
  echo "  <input type='submit' name='editar' value='Editar'>";
  echo "</form>";
}

// Verificar se o formulário de edição foi submetido
if (isset($_POST["editar"])) {
  $id = $_POST["id"];
  $nome = $_POST["nome"];
  $tipo = $_POST["tipo"];
  $descricao = $_POST["descricao"];
  $valor_unitario = $_POST["valor_unitario"];
  $quantidade_estoque = $_POST["quantidade_estoque"];
  $cor = $_POST["cor"];
  $disponivel = $_POST["disponivel"] == 'on' ? 1 : 0;
  $link_imagem = $_POST["link_imagem"];
  $foto = $_FILES["foto"];

  // Query para atualizar o produto
  $sql = "UPDATE produtos SET nome = '$nome', tipo = '$tipo', descricao = '$descricao', valor_unitario = '$valor_unitario', quantidade_estoque = '$quantidade_estoque', cor = '$cor', disponivel = '$disponivel', link_imagem = '$link_imagem' WHERE id = '$id'";
  $result = $conn->query($sql);

   // Verificar se a imagem foi enviada
   if ($foto["size"] > 0) {
    $nome_foto = $foto["name"];
    $tmp_foto = $foto["tmp_name"];
    $pasta_foto = "imagens/produtos/";
    $nome_foto_final = $pasta_foto . $nome_foto;
    move_uploaded_file($tmp_foto, $nome_foto_final);
    $sql = "UPDATE produtos SET imagem = '$nome_foto_final' WHERE id = '$id'";
    $result = $conn->query($sql);
  }

  // Exibir mensagem de sucesso
  echo "<h2>Produto atualizado com sucesso!</h2>";
}
// chama o rodapé do html basico, tudo acima ficaria dentro do body main e abaixo do footer
include('fecha.php');
?>