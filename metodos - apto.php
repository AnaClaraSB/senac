<?php
include("conexao.php");

$query = "select * from apartamento"; 
$result_query = mysqli_query( $conn, $query );

echo "<table>";
# Exibe os registros na tela 
while ($row = mysqli_fetch_array( $result_query ))
{ 
      echo "<tr>";
      print "<td>" . $row[0] . "<td>" . $row[1] . "<td>" . $row[2] . "<td>" . $row[3] . "<td>" . $row[4];
      echo "</tr>";
}          
echo "</table>";

mysqli_close($conn);



function listaedificios(){

      $query = "select * from apartamento"; 
      $result_query = mysqli_query( $conn, $query );
      
      echo "<table>";
      # Exibe os registros na tela 
      while ($row = mysqli_fetch_array( $result_query ))
      { 
            echo "<tr>";
            print "<td>" . $row[0] . "<td>" . $row[1] . "<td>" . $row[2] . "<td>" . $row[3] . "<td>" . $row[4];
            echo "</tr>";
      }          
      echo "</table>";

      mysqli_close($conn);
    
   }

function insertedificio($apartamento,$numeroapto,$codigoedificio,$codigomorador){

   $query = "INSERT INTO apartamaento (apartamento,numeroapto,codigoedificio,codigomorador) VALUES ('$apartamento','$numeroapto','$codigoedificio','$codigomorador')";
   $insert = mysql_query($query,$connect);

   if($insert){
       echo"<script language='javascript' type='text/javascript'>
       alert('Edificio cadastrado com sucesso!');window.location.
       href='index.html'</script>";
     }else{
       echo"<script language='javascript' type='text/javascript'>
       alert('Não foi possível cadastrar esse edificio');window.location
       .href='cadastroapartamento.html'</script>";
     }
}

?>