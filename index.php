<?php

    class Film {

        public $title;
        public $genre;
        public $year;
	
        function __construct($_title,  $_year) {
            $this->title= $_title;
            $this->year= $_year;
            $this->getDataonScreen();
        }

        public function getDataonScreen() {
            echo('<p>'.$this->title.' '.$this->year.'</p>');
        }
    }

    $movie = new Film('Godzilla', '2014');
    $movie = new Film('La mummia', '2005');
    $movie = new Film('Interstellar', '2016');
    $movie = new Film('Zorro', '1980');

?>