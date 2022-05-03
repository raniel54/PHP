<?php

$idade = 18;
$numerodepessoas = 1;

echo  "Voce so pode entrar se tiver mais do que 18 anos ou ";
echo "a partir de 16 anos acompanhado". PHP_EOL;

if ($idade >= 18 ) {
    echo "Voce tem $idade anos. Pode entrar sozinho";
}
    else if ($idade >= 16 && $numerodepessoas > 1){
        echo "voce tem $idade anos, esta acompanhada(a), entao pode entrar.";}
         else
            echo "Voce tem $idade anos. Voce nao pode entrar.";


    echo PHP_EOL;
    echo "Adeus!!";

