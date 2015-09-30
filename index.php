<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>P2-xkcd password generator</title>

  </head>

  <body>
    <h1>Peter's xkcd Password Generator</h1>

    <p>Effective passwords don't need to be overly complex.<br>
      In fact, too much complexity makes them harder to recall.<br>
      The best passwords are comprised of random, common words,<br>
      with a special character or number mixed in for good measure.<br>
      <br>
      Below is my attempt at a simple password generator, a la the<br>
      comic strip xkcd, built on the military alphabet, with options<br>
      to include a number or special character, if desired.<br>
    </p>

    <?php require 'logic.php'; ?>

    <h2>
      <?php echo $password;?>
    </h2>

  </body>
</html>
