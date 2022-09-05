<?php
$usuario = $_POST['usuario']; 
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$erro = FALSE;


if(strlen($usuario)<5)
{echo "O usuário deve possuir aos 5 caracteres. <br>";  $erro=true;}
if(strlen($senha)<5)
{echo "A senha deve possuir aos 5 caracteres. <br>";    $erro=true;}

if(empty($nome)OR strstr($nome, ' '))
{echo "Digite o nome corretamente. <br>";               $erro=true;}

if(strlen($email)<8 or !strstr($email,"@"))
{echo "Digite o email corretamente. <br>";  $erro=true;}

if(empty($cidade))
{echo "Digite a cidade corretamente. <br>";  $erro=true;}

if(strlen($estado)!=2)
{echo "Digite o Estado corretamente. <br>";  $erro=true;}

if(!$erro)
{echo "<h3>Todos os dados foram digitados corretamente! <br><h3>"; }
echo "<h3>Confira seus dados: <br></h3>";
echo "<br>Usuario: ".$usuario. 
    "<br> Nome: ". $nome.
    "<br> E-mail: ". $email.
    "<br>Cidade: ". $cidade;

    


?>