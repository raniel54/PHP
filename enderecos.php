<?php
use Alura\Banco\Modelo\Endereco;
 require_once 'autoload.php';

 $umEndereco = new Endereco(cidade: 'Goiania', bairro: 'VIla pedroso', rua: 'Av Ademar de barros', numero: '00',);
 $outroEndereco = new Endereco(cidade: 'Sao PAulo', bairro: 'Centro', rua: 'uma rua por ai', numero: '00');

echo $umEndereco-> rua = 'AAAABBB';
exit();
 echo $umEndereco . PHP_EOL;
 echo $outroEndereco;