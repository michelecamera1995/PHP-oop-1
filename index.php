<?php

    class Film {

        public $nome;
        public $eta;
        public $anno_pubblicazione;
	
        function __construct($_nome) {
            $this->nome = $_nome;
            $this->getDataonScreen();
        }

        public function getDataonScreen() {
            echo('<p>'.$this->nome.'</p>');
        }
    }

    $movie = new Film('Godzilla');
    $movie = new Film('La mummia');
    $movie = new Film('Interstellar');
    $movie = new Film('Zorro');

?>