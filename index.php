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
      
}
    

?>