<?php 
require __DIR__ . "/Models/Movies.php";
  $movies = [
    new Movie("1", "Il Signore degli Anelli - Il ritorno del re","Peter Jackson","2003",["fantasy", "adventure" ],"https://image.tmdb.org/t/p/w342//rCzpDGLbOoPwLjy3OAm5NUPOTrC.jpg"),
    new Movie("2", "Dal tramonto all'alba","Quentin Tarantino" ,"1996",[ "action", "horror"], "https://image.tmdb.org/t/p/w342//sV3kIAmvJ9tPz4Lq5fuf9LLMxte.jpg"),
  ];
 
  var_dump($movies);
  ?>