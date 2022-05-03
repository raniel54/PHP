<?php
$peso = 93.4;
$altura = 1.80;
$calc  = $peso / $altura **2;
 if ( $calc < 18.5){
     echo "Voce esta pesando $peso com o IMC de $calc seu resultado e :Voce esta abaixo do peso" . PHP_EOL;
 }
  elseif ($calc <= 24.9){
echo "Voce esta pesando $peso com o IMC de $calc seu resultado e : Peso Normal" . PHP_EOL;
}
 elseif ($calc <= 29.9){
     echo "Voce esta pesando $peso com o IMC de $calc seu resultado e : Excesso de peso )" . PHP_EOL;
 }
 elseif ($calc <= 34.9){
     echo "Voce esta pesando $peso com o IMC de $calc seu resultado e : Obesidade Leve(Grau1)" . PHP_EOL;
 }
 elseif ($calc <= 39.9){
     echo "Voce esta pesando $peso com o IMC de $calc seu resultado e : Obesidade Leve(Grau2)" . PHP_EOL;
 }
elseif ($calc >40.0){
     echo "Voce esta pesando $peso com o IMC de $calc seu resultado e : Obesidade Leve(Grau3)" . PHP_EOL;
 }
