<?php
require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/Model/Media.php';
require_once __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.css' integrity='sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A==' crossorigin='anonymous'/>

  <title>Movies</title>
</head>
<body>
    <div class="container my-5 d-flex justify-content-between">

      <?php foreach($movies as $movie): ?>
      <div class="card" style="width: 18rem;">
        <img src="asset/<?php echo $movie->image->file_name ?>" class="card-img-top" alt="<?php echo $movie->title ?>">
        <div class="card-body">
          <h5 class="card-title"><?php echo $movie->title ?></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><?php echo $movie->genere ?></li>
          <li class="list-group-item"><?php echo $movie->timing ?></li>
          <li class="list-group-item"><?php echo implode(", ", $movie->actors) ?></li>
        </ul>
      </div>
      <?php endforeach; ?>

    </div>
</body>
</html>