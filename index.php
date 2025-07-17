<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
           
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color:rgb(191, 188, 209);
        }
        h1 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 5px #ccc;
            width: 20%;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, select, button {
            margin-top: 5px;
            padding: 5px;
            width: 100%;
            max-width: 300px;
        }
    </style>
</head>
<body>
   
    <h1>Calculadora</h1>

    <br>
    <br>
    <form action="" method="get">
        <label for="">Numero 1</label>
        <input type="number" name="num1" required><br><br>
        <label for="">Numero 2</label>
        <input type="number" name="num2" required><br><br>
        <label for="">Operações</label>
        <select name="operacao">
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select><br><br>

        <input type="submit" name="calcular">
        

        <marquee direction="down" width="300" height="100" behavior="alternate" style="border:solid">
            <marquee behavior="alternate">
                <h3>Dev Honesto!</h3>
             </marquee>
        </marquee>

    </form>
    <br>
   
</body>
</html>

<?php

error_reporting(0);
// Recebe os valores com segurança
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operacao = $_GET['operacao'];

// Validação básica
if ($num1 === false || $num2 === false || empty($operacao)) {
   exit;
}

// Processamento
switch ($operacao) {
    case 'soma':
        $resultado = $num1 + $num2;
        $mensagem = "Resultado da soma: $resultado";
        break;

    case 'subtracao':
        $resultado = $num1 - $num2;
        $mensagem = "Resultado da subtração: $resultado";
        break;

    case 'multiplicacao':
        $resultado = $num1 * $num2;
        $mensagem = "Resultado da multiplicação: $resultado";
        break;

    case 'divisao':
        if ($num2 == 0) {
            $mensagem = "Erro: divisão por zero não é permitida.";
        } else {
            $resultado = $num1 / $num2;
            $mensagem = "Resultado da divisão: $resultado";
        }
        break;

    default:
        $mensagem = "Operação inválida.";
        break;
}

// Exibe o resultado
echo "<h1>Resultado</h1>";
echo "<p>$mensagem</p>";

?>
