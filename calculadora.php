<?php
setlocale (LC_ALL, 'pt_BR');
if ($_SERVER["REQUEST_METHOD"]  == "POST") {
    $primeiroNumeroValido = 0;
    $segundoNumeroValido = 0;

    $primeiroNumero = $_POST["a"];
    $segundoNumero = $_POST["b"];
    $operacao = $_POST["operacao"];

    if (ctype_digit($primeiroNumero)) {
        $primeiroNumeroValido = 1;
    } else {
        echo "número inválido";
        echo "<br>";
    }
    if (ctype_digit($segundoNumero)) {
        $segundoNumeroValido = 1;
    } else {
        echo "número inválido";
        echo "<br>";
    }
    

    if ($primeiroNumeroValido != 1 or $segundoNumeroValido != 1) {
        echo "<p>calculadora com erro, preencha novamente</p>";
        echo "<br>";
    } else {
        if($operacao == "soma"){
            $resultado = $primeiroNumero + $segundoNumero;
        }if($operacao == "subtracao"){
            $resultado = $primeiroNumero - $segundoNumero;
        }if($operacao == "divisao"){
            if($segundoNumero != 0){
            $resultado = $primeiroNumero / $segundoNumero;    
            }
            else{
                echo "<p> divisão inválida";
                echo "<br>";
            }
        }if($operacao == "multiplicacao"){
            $resultado = $primeiroNumero * $segundoNumero;
        }


        echo $resultado;
        echo "<br>";
    }
    echo "<br>";
}
?>
