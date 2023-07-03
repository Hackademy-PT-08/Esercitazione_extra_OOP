<?php
class Film {
    public $title;
    public $year;
    public $director;
    public $genre;
    public static $counter;

    public function __construct($title, $year, $director, $genre){
        $this->title = $title;
        $this->year = $year;
        $this->director = $director;
        $this->genre = $genre;
        self::$counter++;
    }
    
    public function filmInfo(){
        echo "Film: $this->title, girato nell'anno $this->year, diretto da $this->director in categoria $this->genre \n";
    }

    public static function filmCounter(){
        echo "Nella nostra libreria ci sono attualmente " . self::$counter . " film! Buona visione!";
    }
};


$film1 = new Film("007", 1963, "Terence Young", "Azione, Dramma");
$film2 = new Film("a 30 milioni di km dalla terra", 1957, "Nathan Juran", "Classici, Film Americani, Fantascienza");
$film3 = new Film("A 30 secondi dalla fine", 1985, "Andrei Jonchalovsky", "Dramma, Film Americani");
$film4 = new Film("A Beautiful Day", 2017, "Lynne Ramsay", "Thriller, Dramma, Noir");

$film1->filmInfo();
$film2->filmInfo();
$film3->filmInfo();
$film4->filmInfo();

Film::filmCounter();
?>