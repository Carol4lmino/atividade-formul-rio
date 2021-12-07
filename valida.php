<?php

$nome = $_POST['nome'];

$senha = $_POST['pass'];

$idade = $_POST['idade'];

$telefone = $_POST['fone'];

$email = $_POST['endEmail'];


echo "Nome:".$nome."<br>";
echo "Senha:".$senha."<br>";
echo "Idade:".$idade."<br>";
echo "Telefone:".$telefone."<br>";
echo "Email:".$email."<br>";

echo "..."."<br>";

echo"<hr>";

$comidaPref = $_POST['comidaPref'];
echo $comidaPref;

echo "<hr>";

$disciplinas = '';

if (isset($_POST['redes'])) {
    echo"Redes de Computadores"."<br>";
    $disciplinas .="Redes de Computadores <br>";
}

if (isset($_POST['JavaScript'])) {
	echo"Java Script"."<br>";
     $disciplinas .="Java Script <br>";
       
}

if (isset($_POST['biologia'])) {
    echo"Biologia"."<br>";
    $disciplinas .="Biologia <br>";
}

if (isset($_POST['design'])) {
    echo"Design"."<br>";
    $disciplinas .="Design";

}

echo "<hr>";

$carro = $_POST['cars'];
$nota = $_POST['nota'];
$date = $_POST['date'];
$mimi = $_POST['mimiu'];
echo "<hr>";
 
echo "Em qual carro gostaria de viajar? $carro <br>";
echo "<hr>";
echo "Qual sua nota de Satisfação para o Curso de Informática? $nota <br>";
echo "<hr>";
echo "Qual a data do seu aniversário? $date <br>";
echo "<hr>";
echo "Qual o horário que geralmente vai dormir? $mimi <br>";