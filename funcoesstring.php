<?php



//repete string

echo str_repeat(".OoOo.",10);

echo "<hr>";



#caixa alta  upper-case

$nome = "juan pablo";

echo strtoupper($nome);

echo "<hr>";



#lower-Case   str-string   to-para  - lower - caixa baixa

echo strtolower("HOJE ESTAMOS APRENDENDO DIVERSAS FUNCOES");



# trocar texto  - str_replace

echo "<hr>";

$texto = "O rei rico de roma";

echo str_replace("rei","pobre",$texto);





#primeira letra maiúscula  ucfirst(texto)

echo "<hr>";

$func = "juan pablo santos";

echo ucfirst($func);

echo "<br>";

echo ucwords($func); //Toda primeira letra maiuscula

echo "<hr>";

#Usuario digita o conteúdo tudo errado


$aluno = "juan PABLO Santos"; //letras maiúsculas, minúsculas, invertido



echo ucwords(strtolower($aluno));

echo "<hr>";

