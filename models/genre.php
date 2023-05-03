<?php

class Genres {
    public $genre1;
    public $genre2;
    public $genre3;

    function __construct(string $genre1, string $genre2, string $genre3) {
        $this->genre1 = $genre1;
        $this->genre2 = $genre2;
        $this->genre3 = $genre3;
    }

    public function getAllGenres() {
        return "{$this->genre1}, {$this->genre2}, {$this->genre3}";
    }
}