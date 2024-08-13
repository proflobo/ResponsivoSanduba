<?php
/* vamos chamar o arquivo de conexão com o banco para 
não ter de digitar tudo novamente */
include('conexao.php');
//agora vamos inserir nosso produto com un formulario
    if(isset($_POST["inserir"])){
        $nome = $_POST["nome"];
        $tipo = $_POST["tipo"];
        $descricao = $_POST["descricao"];
        $valor_unitario = $_POST["valor_unitario"];
        $quantidade_estoque = $_POST["quantidade_estoque"];
        $cor = $_POST["cor"];
        $disponivel = $_POST["disponivel"];
        $link_imagem = $_POST["link_imagem"];
        //aqui separado vamos mandar o arquivo(FILE)da imagem
        $foto = $_FILES['foto'];
        $nome_foto = $foto['name'];
        $tmp_nome = $foto['tmp_name'];
        $destino = 'arquivos/produtos/'.$nome_foto;
//teste para ver se o arquivo foi**não é necessario
if(move_uploaded_file($tmp_nome, $destino)){
    echo "IMAGEM ENVIADO COM SUCESSO!!"
    }
    else{
        echo "ERRO AO ENVIAR A IMAGEM!!";
    }

    $sql = "INSERT INTO produtos(
    nome, tipo, descricao,
     valor_unitario, quantidade_estoque,
      cor, disponivel, link_imagem, foto)
      VALUES ($nome,$tipo,$descricao,
      $valor_unitario, $quantidade_estoque,
      $cor, $disponivel, '$link_imagem', '$nome_foto')";
}
?>