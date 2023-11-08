<?php

require_once __DIR__ . '/Traits/Genere.php';
require_once __DIR__ . '/Model/Productions.php';
require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/Model/SerieTv.php';
require_once __DIR__ . '/Model/Media.php';
require_once __DIR__ . '/db/db.php';


$titanic =   new Movie('Titanic', 'Dramatic', ['Leonardo DiCaprio', 'Kate Winslet', 'Billy Zane'], new Media('locandinapg9.jpg', 'Titanic'), 194, 1998);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.css' integrity='sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A==' crossorigin='anonymous'/>

<!-- CSS -->
<link rel="stylesheet" href="style.css">

<title>Productions</title>
</head>
<body>
  <div class="container my-5 d-flex flex-wrap">

    <?php foreach($productions as $production): ?>

    <div class="card m-3" style="width: 18rem;">
      <img src="asset/<?= $production->image->file_name ?>" class="card-img-top layout-img" alt="<?= $production->title ?>">
      <div class="card-body">
        <h5 class="card-title"><?= $production->title ?></h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Genere: <?= $production->genere ?></li>
        <li class="list-group-item">Attori: <?= implode(", ", $production->actors) ?></li>
        <?php if(get_class($production) == 'Movie'): ?>
          <li class="list-group-item">Durata: <?= $production->running_time ?>'</li>
        <?php else: ?>
          <li class="list-group-item">Anno uscita: <?= $production->aired_from_year ?></li>
          <li class="list-group-item">Anno ultimo episodio: <?= $production->aired_to_year ?></li>
          <li class="list-group-item">Totale episodi: <?= $production->number_of_episodes ?></li>
          <li class="list-group-item">Stagioni: <?= $production->number_of_seasons ?></li>

          <?php endif; ?>

      </ul>
    </div>

    <?php endforeach; ?>

  </div>
</body>
</html>