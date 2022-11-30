<?php
include("conexao.php");

$query = "select * from morador"; 
$result_query = mysqli_query( $conn, $query );

echo "<table>";
# Exibe os registros na tela 
while ($row = mysqli_fetch_array( $result_query ))
{ 
      echo "<tr>";
      print "<td>" . $row[0] . "<td>" . $row[1] . "<td>" . $row[2] . "<td>" . $row[3] . "<td>" . $row[4] . "<td>" . $row[5] . "<td>" . $row[6];
      echo "</tr>";
}          
echo "</table>";

mysqli_close($conn);



function listamorador(){

      $query = "select * from morador"; 
      $result_query = mysqli_query( $conn, $query );
      
      echo "<table>";
      # Exibe os registros na tela 
      while ($row = mysqli_fetch_array( $result_query ))
      { 
            echo "<tr>";
            print "<td>" . $row[0] . "<td>" . $row[1] . "<td>" . $row[2] . "<td>" . $row[3] . "<td>" . $row[4] . "<td>" . $row[5] . "<td>" . $row[6];
            echo "</tr>";
      }          
      echo "</table>";

      mysqli_close($conn);
    
   }

function insertedificio($nome,$cep,$numero,$complemento,$datavistoria,$dataconstrucao){

   $query = "INSERT INTO morador (nome, cep, datadenascimento , cpf, sexo, codigo morador) VALUES ('$nome','$cep','$datadenascimento','$cpf','$sexo','$codigomorador')";
   $insert = mysql_query($query,$connect);

   if($insert){
       echo"<script language='javascript' type='text/javascript'>
       alert('Morador cadastrado com sucesso!');window.location.
       href='index.html'</script>";
     }else{
       echo"<script language='javascript' type='text/javascript'>
       alert('Não foi possível cadastrar esse morador');window.location
       .href='cadastromorador.html'</script>";
     }
}

?>