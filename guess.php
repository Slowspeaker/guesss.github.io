<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Guessing Game for Issayev Ramazan eec0bd4e </title>
</head>

<body>
  <h1>Welcome to guessing game</h1>
  <p>
    <?php
    $num = 68;
    if (!isset($_GET['guess'])) {
      echo ("Missing guess parameter");
    } elseif (strlen($_GET['guess']) < 1) {
      echo ("Your guess is too short");
    } elseif (!is_numeric($_GET['guess'])) {
      echo ("Your guess is not a number");
    } elseif ($_GET['guess'] < $num) {
      echo ('Your guess is too low');
    } elseif ($_GET['guess'] > $num) {
      echo ("Your guess is too high");
    } else {
      echo ("Congratulations - You are right");
    }
    ?>
  </p>
</body>

</html>