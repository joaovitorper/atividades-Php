<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// declaração de variaveis
$nome = "joão";

//concatenação e saidas de dados
echo "olá","".$nome."!<br>";
echo "Bem- vindo á aula de PHP!<br><br>";

print("Esse é um exemplo de saida usando print.<br><br");

// condicional if
$idade =20;
if ($idade>=18){
echo " voce é maior de idade.<br>";
}else{
echo " Você e menor de idade.<br>";
}

// laço for 
echo "<br>contagem com for:<br>";
for($i =1; $i<=5; $i++){

}
echo" Número: $i <br>";

// laço while
echo "<br>contagem com while:<br>";
$x= 1;
while ($x <=3){
echo "valor de x:$x<br>";
$x++;
}
 
// array
$cores = Array("vermelho", "azul","verde");
echo "<br>Cores favoritas:<br>";
foreach($cores as $cor){
}
echo $cor."<br>";

// função
function saudacao(){
}
echo"<br> olá! Essa é uma função em PhP.<br>";

// chamada de função
Saudacao();
?>

    
</body>
</html>