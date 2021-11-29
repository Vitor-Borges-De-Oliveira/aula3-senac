<?php

# variáveis são espaços na memória onde armazenamos valores variáveis
# inicia-se com o símbolo de $ seguindo do nome que eu quero referenciar
# $a = 1200 - > variável salário
# $salario = 1200 -> seria melhor, não acha?
$texto = "texto comum";
$inteiro = 9;
$casaDecimal = 10.56;

# DEBUGAR -> Verificar o que está acontecendo no código
# var_dump();

var_dump($texto);

echo "<br>";

var_dump($inteiro);

echo "<br>";

var_dump($casaDecimal);

/*

    TIPOS DE VARIÁVEIS
    $idade -> você espera que o conteúdo seja um número
    $nomeDoAluno -> você espera que seja um texto (string)

    O PHP não necessita da declaração de tipo de variável,
    alguns programadores (principalmente que usam JAVA) falam
    que o PHP é FRACAMENTE TIPADO

*/