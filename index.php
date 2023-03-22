<?php 

 require_once __DIR__ . "./models/movies.php";
require_once __DIR__ . "./data/db.php";


  // var_dump($movies);
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <!-- LINK BOOTSTRAP  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous" defer>
  </script>


  <title>OOP first</title>
</head>

<body class="bg-dark text-light">


  <main>
    <div class="container">
      <h1 class="mt-3 mb-5">Lista Film</h1>
      <div class="row d-flex justify-content-center ">
        <?php foreach($movies as $movie) : ?>

        <div class="col-4 text-dark d-flex">
          <div class="card">
            <img src=" <?= $movie->poster?>" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title"><?= $movie->title?></h5>
              <p class="card-text"><?= $movie->getfilmDirector() ?></p>
              <p class="card-text text-muted"><?= $movie->year ?></p>
              <p class="card-text ">Genre:<?php ?></p>
            </div>

          </div>
        </div>
        <?php endforeach ?>

      </div>
    </div>
  </main>
</body>

</html>