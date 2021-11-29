<?php

# Funções matemáticas

echo "valor de pi: " .(pi());

echo "<hr>";

echo "Maior valor entre os valores (0, 34, 56, -3, 58) é: " .(min(0,34,56,-3,58)); // retorna o menor valor

echo "<hr>";

echo "Menor valor entre os valores (0, 34, 56, -3, 58) é: " .(max(0,34,56,-3,58)); // retorna o maior valor

echo "<hr>";

echo "Valor absoluto entre os valores (-7, 3) é : " .(abs(-7.3));

echo "<hr>";

$numero = rand(0,1000);

echo "Valor aleatório entre os valores (0, 1000) é: {$numero}";