<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Buy a sushi, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="yi.zhou" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Buy a sushi, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Buy a sushi, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/Sushi_platter.jpg" alt="sushi image" />
      </div>
      <br />
      <div class="page-content-1">Please select the size you want</div>
      <br /><br />
      <form action="answer.php" method="get">
        <!-- Radio buttons for sushi size -->
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="regular-size">
          <input type="radio" id="regular-size" class="mdl-radio_button" name="size" value="regular" checked>
          <span class="mdl-radio_label">Regular</span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="big-size">
          <input type="radio" id="big-size" class="mdl-radio_button" name="size" value="big">
          <span class="mdl-radio_label">Big</span>
        </label>
        <br /><br />

        <!-- Dropdown for material -->
        <div id="option" class="dropdown-container">
          <label class="select-day" for="food-material">Please select your food material</label><br><br>
          <select id="food-material" name="material">
            <option value="salmon">Salmon</option>
            <option value="tuna">Tuna</option>
            <option value="arctic-clam">Arctic clam</option>
            <option value="sweet-shrimp">Sweet shrimp</option>
          </select>
        </div>
        <br /><br />

        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
          ORDER
        </button>
      </form>
    </main>
  </div>
</body>

</html>