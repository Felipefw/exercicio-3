<?php 
    //Declaração de variáveis
    $valor1 = 27.5;
    $valor2 = 74;
    $valor3 = "Fabricio";

    //--------------------------------Valor 1-----------------------------
    if (is_numeric($valor1)) {
        $resultado = $valor1 * 2;

        if ($resultado > 100) {
            echo "O número " . $resultado . " é maior que 100";
        }
    }

    //-------------------------------Valor 2-------------------------------------
    if (is_numeric($valor2)) {
        $resultado = $valor2 * 2;

        if ($resultado > 100) {
            echo "O número " . $resultado . " é maior que 100";
        }
    }

    //---------------------------------Valor 3-----------------------------------
    if (is_numeric($valor3)) {
        $resultado = $valor3 * 2;

        if ($resultado > 100) {
            echo "O número " . $resultado . " é maior que 100";
        }
    }
?>