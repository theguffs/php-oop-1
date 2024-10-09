<?php
    class Movie {
        // istanze
        public $title;
        public $director;
        public $year;
        public $genre;
        
        // costruttore
        public function __construct($title, $director, $year, $genre) {
            $this->title = $title;
            $this->director = $director;
            $this->year = $year;
            $this->genre = $genre;
        }
          // metodo info sul film
        public function getMovieInfo() {
            return "Title: " . $this->title . "<br>" .
                "Director: " . $this->director . "<br>" .
                "Year: " . $this->year . "<br>" .
                "Genre: " . $this->genre . "<br><br>";
        }
    }

    // creazione oggetti
    $movie1 = new Movie("Inception", "Christopher Nolan", 2010, "Science Fiction");
    $movie2 = new Movie("The Godfather", "Francis Ford Coppola", 1972, "Crime");

    // echo film
    echo $movie1->getMovieInfo();
    echo $movie2->getMovieInfo();
?>