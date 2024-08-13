<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="WEB PADRAO - prof lobo">
  <meta name="author" content="Matheus Lobo">
  <title>ADM-PRODUTOS</title>
  <!-- Favicon / Trocar a URL -->
  <link rel="shortcut icon" href="../imagens/ico_logo.png" />
  <link rel="stylesheet" type="text/css" href="form_inserir.css">
</head>

<body>
  <h1>MENU - ADM</h1>
  <a href="inserir_produto.html"><p>INSERIR</p></a>
  <a href="selecionar_todos.php"><p>SELECIONAR</p></a>
  <a href="#"><p>ALTERAR</p></a>
  <a href="#"><p>DELETAR</p></a>
  
  <?php
include('conexao.php'); // Conectar ao banco de dados

// Selecionar todos os produtos do banco de dados
$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Mostrar produtos lado a lado
  while($row = $result->fetch_assoc()) {
    ?>
    <div class="produto">
      <img src="img_produtos/<?php echo $row['foto']; ?>" alt="<?php echo $row['nome']; ?>">
      <h2><?php echo $row['nome']; ?></h2>
      <p>Tipo: <?php echo $row['tipo']; ?></p>
      <p>Descrição: <?php echo $row['descricao']; ?></p>
      <p>Valor unitário: R$ <?php echo $row['valor_unitario']; ?></p>
      <p>Quantidade em estoque: <?php echo $row['quantidade_estoque']; ?></p>
      <p>Cor: <?php echo $row['cor']; ?></p>
      <p>Disponível: <?php echo ($row['disponivel'] == 1) ? 'Sim' : 'Não'; ?></p>
      <p>Link da imagem: <?php echo $row['link_imagem']; ?></p>
    </div>
    <?php
  }
} else {
  echo "Nenhum produto encontrado.";
}
?>

</body>
</html>