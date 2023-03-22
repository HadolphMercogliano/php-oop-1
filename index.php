<?php 

  class Movie {
    public $title;
    public $director;
    public $year;
    public $genre;
    
    public function __construct($_title, $_director, $_year, $_genre)
    {
      $this->title = $_title;
      $this->director = $_director;
      $this->year = $_year; 
      $this->genre = $_genre;
    }
    public function filmDirector()
    {
      return "Diretto da $this->director."
    }
  }
  
  $movie_1 = new Movie("Il Signore degli Anelli - Il ritorno del re","Peter Jackson","2003","fantasy");
  
  $movie_2 = new Movie("Dal tramonto all'alba","Quentin Tarantino" ,"1996","horror");
 
  var_dump($movie_1);
  var_dump($movie_2);

  ?>