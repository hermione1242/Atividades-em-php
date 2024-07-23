<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aprendendo PHP</h1>

    <?php
    //queria dormir
    //que sono 
    echo "Aqui aparece um texto na tela do usuário";
   // podemos colocar tags dentro do PHP

 echo "<h1> Esse é um título</h1>";
 echo"<p> Páragrafo do texto.</p>";

//Comandos de saída:
//echo - imprime uma string na tela
//print - imprime uma string na tela
print "<p> Texto dentro do print </p>";

// variáveis em php
//sempre iniciam com $ seguido do nome de variável
// Não é necessário identificar o tipo dado
//Para criar uma variavél basta atribuir um valor a ela
$nome = "Victória";
$idade = 17;
$altura = 1.63;
echo "$nome tem $altura m e $idade anos de idade <br>";

// Aritmética Básica
echo "operadores Aritméticos.<br>";
echo "a= 10 e b=5<br>.";
$a = 10;
$b = 5;
$c = $a + $b;
echo ! "A soma de $a e $b é $c<br>";
$c= $a - $b;
echo "A subtração de $a e $b é $c<br>";
$c = $a * $b;
echo " A multiplicação de $a e $b é $c<br> ";
$c = $a / $b;
echo " A divisão de $a e $b é $c<br>";
$c = $a ** $b;
echo " A potência de $a e $b é $c<br>";
    ?>

</body>
</html>