<?php

  # var_dump($_POST);
  # Creating an array of 26 words using the military alphabet
  $wordList = Array(
    'alpha' => '1',
    'bravo' => '2',
    'charlie' => '3',
    'delta' => '4',
    'echo' => '5',
    'foxtrot' => '6',
    'golf' => '7',
    'hotel' => '8',
    'india' => '9',
    'juliet' => '10',
    'kilo' => '11',
    'lima' => '12',
    'mike' => '13',
    'november' => '14',
    'oscar' => '15',
    'papa' => '16',
    'quebec' => '17',
    'romo' => '18',
    'sierra' => '19',
    'tango' => '20',
    'uniform' => '21',
    'victor' => '22',
    'whiskey' => '23',
    'xray' => '24',
    'yankee' => '25',
    'zulu' => '26',
  );

  # Creating array of special characters
  $randomChars = Array(
    '~' => '',
    '!' => '',
    '@' => '',
    '#' => '',
    '$' => '',
    '%' => '',
    '^' => '',
    '&' => '',
    '*' => '',
    '(' => '',
    ')' => '',
    '+' => '',
    '=' => '',
    '?' => '',
  );

$password='';
$hyphen="-";
$addNum="no";
$addChar="no";
?>

<?php
# Building the form to get user input via selection drop-down boxes
?>
<form method="POST" action="index.php" target="_blank">
  <select name="word_options">
    <option value="option1">4 words</option>
    <option value="option2">5 words</option>
    <option value="option3">6 words</option>
    <option value="option4">7 words</option>
    <option value="option5">8 words</option>
    <option value="option6">9 words</option>
  </select> How many words? (minimum of 4, maximum of 9)<br>
  <select name="char_options">
    <option value="no">no</option>
    <option value="yes">yes</option>
  </select> Add a special character?<br>
  <select name="num_options">
    <option value="no">no</option>
    <option value="yes">yes</option>
  </select> Add a number?<br>
  <input type="submit" value="Submit">
</form><br>


<?php
# series of if statements to build the word portion of the password,
# based on user selection criteria from the form drop-down menu
  if ($_POST["word_options"] == "option1") {
    $rand_word = array_rand($wordList, 1);
    $password = $password.$rand_word;
    for ($i = 1; $i < 4; $i++) {
      $rand_word = array_rand($wordList, 1);
      $password = $password.$hyphen.$rand_word;
    }
  }

  if ($_POST["word_options"] == "option2") {
    $rand_word = array_rand($wordList, 1);
    $password = $password.$rand_word;
    for ($i = 1; $i < 5; $i++) {
      $rand_word = array_rand($wordList, 1);
      $password = $password.$hyphen.$rand_word;
    }
  }

  if ($_POST["word_options"] == "option3") {
    $rand_word = array_rand($wordList, 1);
    $password = $password.$rand_word;
    for ($i = 1; $i < 6; $i++) {
      $rand_word = array_rand($wordList, 1);
      $password = $password.$hyphen.$rand_word;
    }
  }

  if ($_POST["word_options"] == "option4") {
    $rand_word = array_rand($wordList, 1);
    $password = $password.$rand_word;
    for ($i = 1; $i < 7; $i++) {
      $rand_word = array_rand($wordList, 1);
      $password = $password.$hyphen.$rand_word;
    }
  }

  if ($_POST["word_options"] == "option5") {
    $rand_word = array_rand($wordList, 1);
    $password = $password.$rand_word;
    for ($i = 1; $i < 8; $i++) {
      $rand_word = array_rand($wordList, 1);
      $password = $password.$hyphen.$rand_word;
    }
  }

  if ($_POST["word_options"] == "option6") {
    $rand_word = array_rand($wordList, 1);
    $password = $password.$rand_word;
    for ($i = 1; $i < 9; $i++) {
      $rand_word = array_rand($wordList, 1);
      $password = $password.$hyphen.$rand_word;
    }
  }

  # add single random character at the end of the password,  if selected by user
  if ($_POST["char_options"] == "yes") {
    $rand_char='';
    $rand_char = array_rand($randomChars, 1);
    $password = $password.$hyphen.$rand_char;
  }

  # add single random number at the end of the password, if selected by user
  if ($_POST["num_options"] == "yes") {
    $password = $password.$hyphen.rand(0,9);
  }
?>
