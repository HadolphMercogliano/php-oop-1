<?php

class Movie {
    public $id;
    public $title;
    public $director;
    public $year;
    public $genre;
    public $poster;
    
    public function __construct(
      int $_id, 
      string $_title, 
      string $_director, 
      string $_year, 
      array $_genre, 
      string $_poster
      )
    {
      $this->id = $_id;
      $this->title = $_title;
      $this->director = $_director;
      $this->year = $_year; 
      $this->genre = $_genre;
      $this->poster = $_poster;
      
    }
    public function getfilmDirector(){
      return "Diretto da $this->director.";
    }
  }