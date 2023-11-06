<?php
require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/Model/Media.php';

$matrix = new Movie('Matrix', 'Sci-Fi', 133, ['Keanu Reeves', 'Laurence Fishburne', 'Carrie-Anne Moss']);
$titanic = new Movie('Titanic', 'Dramatic', 194, ['Leonardo DiCaprio', 'Kate Winslet', 'Billy Zane'], new Poster('locandina.jpg', 'Matrix'));
var_dump($titanic);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies</title>
</head>
<body>
  
</body>
</html>