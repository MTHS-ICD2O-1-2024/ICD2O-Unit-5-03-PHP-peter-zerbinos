<!DOCTYPE html>
<!-- ICS2O-Unit5-03-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Watch a Movie, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Peter Zerbinos" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.orange-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Watch a Movie, in PHP</title>
</head>


<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Watch a Movie, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/movie_ratings.jpg" alt="Movie Ratings" />
      </div>
      <?php
      $userAge = $_GET["user-age"];
      if ($userAge >= 17) {
        echo "You can go see an R rated movie alone.";
      } else if ($userAge >= 13) {
        echo "You can go see a PG-13 movie alone.";
      } else if ($userAge >= 5) {
        echo "You can go see a G or PG movie alone.";
      } else {
        echo "You are too young to see most things.";
      }
      ?>
  </div>
  </main>
</body>

</html>
