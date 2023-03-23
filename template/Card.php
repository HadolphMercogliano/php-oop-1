<div class="col-4 text-dark d-flex">
  <div class="card">
    <img src=" <?= $movie->poster?>" class="card-img-top img-custom" alt="">
    <div class="card-body">
      <h5 class="card-title"><?= $movie->title?></h5>
      <p class="card-text"><?= $movie->getfilmDirector() ?></p>
      <p class="card-text text-muted"><?= $movie->year ?></p>

      <p class="card-text ">Genre:<?php foreach($movie->genres as $genre) : ?>
        <?= $genre->name ?>,
        <?php endforeach ?>
      </p>
    </div>
  </div>
</div>