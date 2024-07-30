<?php

$sql = 'SELECT * FROM users';

//mysql_free_result($resultado);

          //echo 'conexao estabelecida com sucesso'; 
          // Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_lobo";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

       $resultado = mysql_query($sql,$conn)
                         or die(mysql_error($conn));

       $linhas = mysql_num_rows($resultado);

       if( !  $linhas ){

           echo '<h1>Consulta não retornou dados</h1>';

           mysql_free_result($resultado);

           //include('fecha.php');

           exit;
       }

       echo
       '<table >
           <tr>
               <th>id</th>              
               <th>usuario</th>           
			   <th>senha</th>

          </tr>';

       //for( $x=0 ; $x < $linhas ; $x++){

           /*$codigo = mysql_result($resultado,$x,'codigo');*/
		  // $id = mysql_result($resultado,$x,'id');
          // $usuario = mysql_result($resultado,$x,'nome');
		  // $senha = mysql_result($resultado,$x,'senha');

           /*$foto = mysql_result($resultado,$x,'foto');
            if($foto == ''){
                 $foto = "<img src='imgs/nao_disponivel.png' alt='Foto' />";
                 }
                 else{
                      $foto = "<img src='imgs/$foto' alt='Foto' width='100' height='100' />";
                      }*/

          // $nome_link =   "<a href='alterar.php?Codigo=$Codigo'>$nome</a>";
		   /* só vai mostrar o nome, mas como link para apagina alterar */

          // $excluir = '<img src="imagens/delete.jpg" alt="Excluir" />';
          //<td><a href='$link'>Download</a></td>
                    //$excluir_link =  "<a href='excluir.php?Codigo=$Codigo'>$excluir</a>";

           echo "<tr>
                     <td>$id</td>
                     <td>$usuario</td>
                     <td>$senha</td>

                 </tr>";

       //}

       echo '</table>';
?>
