<?php

include("conexao.php");

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$cep = $_POST["cep"];
$sexo = $_POST["sexo"];
$datanascimento = $_POST["data_nascimento"];

if($nome == "" || $nome == null)
{
    echo "Nome não pode estar vazio!";
}
else
{
    $query = "INSERT INTO morador (nome, cpf, cep, sexo, data_nascimento) VALUES ('$nome','$cpf','$cep','$sexo','$datanascimento')";
    $insert = mysqli_query($conn,$query);
    if($insert){
        echo"<script language='javascript' type='text/javascript'>
        alert('Edificio cadastrado com sucesso!');window.location.
        href='index.html'</script>";
      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse edificio');window.location
        .href='cadastroedificio.html'</script>";
      }

}


?>