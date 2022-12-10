<?php

/**
 * class movies
 * defines movies class
 * @author Eustache Vignonzan
 */
class Movie
{
    public $title;
    public $gender;
    public $duration;
    public $description;
    public $movie_director;
    public $country_of_production;
    public $year_of_production;
    public $language;
    public $vote;

    /**
     * @param String $title titolo del film
     * @param String $gender genere del film
     * @param Integer $duration durata del film (minuti)
     * @param String $description trama del film
     * @param String $movie_director regista del film
     * @param String $country_of_production paese di produzione
     * @param String $year_of_production anno di produzione
     * @param String $language lingua del film
     * @param Integer $vote voto film
     */

    function __construct(
        String $title,
        String $gender,
        Int $duration,
        String $description,
        String $movie_director,
        String $country_of_production,
        String $year_of_production,
        String $language,
        Int $vote
    ) {
        $this->title = $title;
        $this->gender = $gender;
        $this->duration = $duration;
        $this->description = $description;
        $this->movie_director = $movie_director;
        $this->country_of_production = $country_of_production;
        $this->year_of_production = $year_of_production;
        $this->language = $language;
        $this->vote = $vote;
    }

    function PrintInfoMovie()
    {
        return "Titolo: $this->title;
                Genere: $this->gender;
                Duration: $this->duration;
                Description: $this->description;
                Movie director: $this->movie_director;
                Country of production: $this->country_of_production;
                Year of production: $this->year_of_production;
                Language: $this->language;
                Vote: $this->vote";
    }
}
$LaVitaEBella = new Movie("La Vita è bella", "Drammatico", 124, "", "Roberto Benigni", "Italia", "1997", "italiano", 9);
echo $LaVitaEBella->PrintInfoMovie();
$BlackAdam = new Movie("Black Adam", "Azione", 124, "", "Jaume Collet-Serra", "USA", "2022", "inglese", 8);
echo $BlackAdam->PrintInfoMovie();
var_dump($LaVitaEBella);
var_dump($BlackAdam);
