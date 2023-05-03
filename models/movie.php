<?php

class Movie {
    public $name;
    public $releaseYear;
    public $genre;

    function __construct(string $name, string $releaseYear, Genres $genre) {
        $this->name = $name;
        $this->releaseYear = $releaseYear;
        $this->genre = $genre;
    }
}