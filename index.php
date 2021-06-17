<?php

  require_once __DIR__ . '/Movie.php';

  $tenenbaum = new Movie('I Tenenbaum');
  $tenenbaum->director = 'Wes Anderson';
  $tenenbaum->year = '2001';

  $fight_club = new Movie('Fight Club');
  $fight_club->director = 'David Fincher';
  $fight_club->setYear('1999');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP-1</title>
</head>
<body>

  <h1>Movie</h1>

  <h2>Film: <?php echo $tenenbaum->title ?></h2>
  <h2>Regista: <?php echo $tenenbaum->director ?></h2>
  <h2>Anno: <?php echo $tenenbaum->year ?></h2>

  <hr>

  <h2>Film: <?php echo $fight_club->title ?></h2>
  <h2>Regista: <?php echo $fight_club->director ?></h2>
  <h2>Anno: <?php echo $fight_club->year ?></h2>
  
</body>
</html>