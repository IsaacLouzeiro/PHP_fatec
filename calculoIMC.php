<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form method="post" action="">
        <label for="peso">Peso (kg):</label>
        <input type="text" id="peso" name="peso" required>
        <br>
        <label for="altura">Altura (m):</label>
        <input type="text" id="altura" name="altura" required>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
      $peso = floatval($_POST["peso"]);
      $altura = floatval($_POST["altura"]);

      $imc = $peso / ($altura * $altura);

      if ($imc < 18.5) {
          $situacao = "Abaixo do peso normal";
      } elseif ($imc >= 18.5 && $imc <= 24.9) {
          $situacao = "Peso normal";
      } elseif ($imc >= 25 && $imc <= 29.9) {
          $situacao = "Excesso de peso";
      } elseif ($imc >= 30 && $imc <= 34.9) {
          $situacao = "Obesidade classe I";
      } elseif ($imc >= 35 && $imc <= 39.9) {
          $situacao = "Obesidade classe II";
      } else {
          $situacao = "Obesidade classe III";
      }

      echo "<p>Seu IMC é: " . number_format($imc, 2) . "</p>";
      echo "<p>Situação: " . $situacao . "</p>";
    ?>
</body>
</html>
