<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Tinta</title>
</head>
<body>
    <h1>Calculadora de Tinta</h1>
    <form method="post" action="">
        <label for="tamanho_area">Tamanho da Área (m²):</label>
        <input type="text" id="tamanho_area" name="tamanho_area" required>
        <br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    $precoLata = 80.00;
    $capacidadeLata = 18;

    $tamanhoArea = floatval($_POST["tamanho_area"]);

    $tintaNecessaria = $tamanhoArea / 3;

    $quantidadeLatas = ceil($tintaNecessaria / $capacidadeLata);

    $precoTotal = $quantidadeLatas * $precoLata;
    ?>
    <div>
      <?php if (isset($quantidadeLatas) && isset($precoTotal)): ?>
          <p>Quantidade de latas de tinta necessárias: <?php echo $quantidadeLatas; ?> latas</p>
          <p>Preço total: R$ <?php echo number_format($precoTotal, 2, ',', '.'); ?></p>
      <?php endif; ?>
    </div>
</body>
</html>
