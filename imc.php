<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
    <style>
        body {
            background-image: url('foto3.png');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
             text-align: center; 
        }

        .content-container {
            background-color: rgba(255, 255, 255, 0.7); /* Adicione uma cor de fundo semi-transparente para o conteúdo */
            padding: 300px; /* Espaçamento interno para separar o conteúdo da imagem de fundo */
        }
     input[type="text"] {
    background-color: transparent;
    border: none; /* Remove todas as bordas */
    border-bottom: 1px solid #000; /* Adicione uma borda somente na parte inferior */
}

    </style>
}
</head>
<body>
    <div class="content-container">
        <h1>Calculadora de IMC</h1>
        <?php
        function calculadoraIMC($peso, $altura) {
            if ($altura > 0) {
                return $peso / ($altura * $altura);
            } else {
                return 0;
            }
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = floatval($_POST["peso"]);
            $altura = floatval($_POST["altura"]);
            $imc = calculadoraIMC($peso, $altura);
            echo "<p>Seu IMC é: " . number_format($imc, 2) . "</p>";
            
            if ($imc < 16.000) {
                echo "Magreza grau III" . PHP_EOL;
                 echo '<img src="magreza 3.jpg">';
            } elseif ($imc >= 16.000 && $imc <= 16.999) {
                echo "Magreza grau II" . PHP_EOL;
                echo '<img src="magreza 2.jpg">'; 
            } elseif ($imc >= 17.000 && $imc <= 18.499) {
                echo "Magreza grau I" . PHP_EOL;
                echo '<img src="magreza 1.jpg">'; 
            } elseif ($imc >= 18.500 && $imc <= 24.999) {
                echo "Eutrofia" . PHP_EOL;
                echo '<img src="eutrofia.jpg">';
            } elseif ($imc >= 25.000 && $imc <= 29.999) {
                echo "Sobrepeso" . PHP_EOL;
                 echo '<img src="sobrepeso.jpg">';
            } elseif ($imc >= 30.000 && $imc <= 34.999) {
                echo "Obesidade grau I" . PHP_EOL;
                echo '<img src="obesidade 1.jpg">';
            } elseif ($imc >= 35.000 && $imc <= 39.999) {
                echo "Obesidade grau II" . PHP_EOL;
                 echo '<img src="obesidade 2.jpg">';
            } elseif ($imc >= 40.000) {
                echo "Obesidade grau III" . PHP_EOL;
                 echo '<img src="obesidade 3.jpg">';
            }
        }
        ?>
        <form method="post" action="">
            <label for="peso">Peso (em kg):</label>
            <input type="text" name="peso" id="peso" required><br><br>

            <label for="altura">Altura (em metros):</label>
            <input type="text" name="altura" id="altura" required><br><br>

            <input type="submit" value="Calcular">
        </form>
    </div>
</body>
</html>
