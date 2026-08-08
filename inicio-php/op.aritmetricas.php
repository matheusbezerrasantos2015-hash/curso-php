<?php

    $n1 = 90;
    $n2 = 89;
    
    $soma = $n1 + $n2;

    echo "O resultado da soma -> ".$soma;
    echo "<br />";
    echo $soma . " valor da soma";
    echo "<br />";
    echo "O valor da soma de 90 + 89 é: ". $soma. " O resultado"; // O "." concatena a variavel e o texto
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />"; // shift + alt + seta para baixo copia e cola
    echo "<br />";
    echo " O Resultado da soma -> $soma"; // sem o "." 

    /* 
    comentario
    de variaa 
    linhas
    */

    // comentario de uma linha

    // ----------------------------------------------------------------------

    $nota1 = 6.5;
    $nota2 = 9;
    $nota3 = 10;
    $nota4 = 3.5;

    $soma = $nota1 + $nota2 + $nota3 + $nota4;
    $media = $soma / 4;

    echo "<br />";
    print "A media: $media";

    echo "<br />";
    /*$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    print "A média é $media";*/                                 //media feita em uma só linha
    echo "<br />";

    // ------------------------------------------------------------------------
    echo "Raiz Quadrada";
    echo "<br />";

    $numero = 12;

    $raiz = sqrt($numero);
    $num = number_format($raiz, 2, ",", ""); // define parametro ao exibir casas decimais
    echo " O resultado da raiz: $raiz";
    echo "<br />";
    echo "<br />";
    echo "O resultado da raiz: $num";

    // ---------------------------------------------------------------------------
    $nume = 3;
    $exp = 2;

    echo "<br />";
    echo pow($nume, $exp);
?>