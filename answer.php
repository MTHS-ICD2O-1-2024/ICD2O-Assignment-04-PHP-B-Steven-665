<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Sushi order result" />
  <meta name="author" content="yi.zhou" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <title>Sushi Order Result</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Sushi Order Result</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content-answer">
        <br /><br />

        <?php
        // Prices
        $regularPrice = 5.99;
        $bigPrice = 7.99;
        $salmonPrice = 6.99;
        $tunaPrice = 7.99;
        $arcticClamPrice = 6.99;
        $sweetShrimpPrice = 5.99;
        $taxRate = 0.13;

        // Get input
        $size = $_GET["size"];
        $material = $_GET["material"];

        // Size price
        if ($size == "regular") {
          $sizePrice = $regularPrice;
        } else {
          $sizePrice = $bigPrice;
        }

        // Material price
        if ($material == "salmon") {
          $materialPrice = $salmonPrice;
        } elseif ($material == "tuna") {
          $materialPrice = $tunaPrice;
        } elseif ($material == "arctic-clam") {
          $materialPrice = $arcticClamPrice;
        } elseif ($material == "sweet-shrimp") {
          $materialPrice = $sweetShrimpPrice;
        } else {
          $materialPrice = 0;
        }


        // Total
        $totalPrice = $sizePrice + $materialPrice;
        $finalPrice = $totalPrice * (1 + $taxRate);

        echo "<p>The Size Price is: <strong>$" . number_format($sizePrice, 2) . "</strong></p>";
        echo "<p>The Food Material Price is: <strong>$" . number_format($materialPrice, 2) . "</strong></p>";
        echo "<p>The Total Price is: <strong>$" . number_format($totalPrice, 2) . "</strong></p>";
        echo "<p>After Tax is: <strong>$" . number_format($finalPrice, 2) . "</strong></p>";
        ?>

        <br /><br />
        <a href="index.php" class="mdl-button mdl-js-button mdl-button--raised">Order Again</a>
      </div>
    </main>
  </div>
</body>

</html>